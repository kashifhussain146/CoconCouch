<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Models\AssignmentCategory;
use DB;
use App\Models\Subject;
use App\Models\SubjectCategory;
use App\Models\Questions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = module(18);
        $category = Category::where('status','active')->latest()->limit(3)->get();
        $testimonial = module(12);
        $howWork =   module(10);
        $chooseUs =    module(20);
        $helpFaqs =    module(19);


        return view('home',compact('banner','category','testimonial','howWork','chooseUs','helpFaqs'));
    }

    
    public function solutionsLibrary(Request $request,$subject_category_id=null,$topic_id=null){

        $subjectcategory = SubjectCategory::Activated()->orderBy('category_name','ASC');
        $subjectcategory = $subjectcategory->get();
        $courseCode      = \App\Models\CourseCode::Activated()->get();
        $questions       = Questions::with(['category','subjects','college'])->whereHas('subjects')->whereHas('category')->latest()->Activated();
        
        $topics = [];

        if($request->subject_category!=''){
            $questions = $questions->SubjectCategoryFilter($request->subject_category);
            $topics   = Subject::select('subject_name','id')->where('subject_category',$request->subject_category)->Activated()->get();  
        }

        if($subject_category_id!=''){
            $questions = $questions->SubjectCategoryFilter($subject_category_id);
        }

        if($request->subject_code!=''){
            $subject_code = $request->subject_code;
            $questions = $questions->where('coursesid',$subject_code);
        }

        if($request->subject!=''){
            $questions = $questions->SubjectFilter($request->subject);
        }
        
        if($topic_id!=''){
            $questions = $questions->SubjectFilter($topic_id);
        }

        if($request->search!=''){
            $search = $request->search;
            $questions = $questions->SearchFilter($search);
        }

        if( ($request->subject_category==null && $request->subject==null && $request->search==null) && ($subject_category_id==null && $topic_id==null)){
            $questions = $questions->take(10);
        }
        $questions = $questions->paginate(25)
                                ->groupBy('category.category_name')
                                ->map(function ($products, $categoryName) {
                                    $data =  [
                                        'category_name' =>$categoryName,
                                        'questions' => $products,
                                    ];

                                    return $data;
                                })
                                ->sortKeys()
                                ->values();
        //dd($questions);

        $subjectsCategory = SubjectCategory::TopicsData()->get();
        return view('solutions-library.index',compact('courseCode','subject_category_id','topic_id','subjectcategory','topics','questions','subjectsCategory'));
    }

    public function getSubcategory(Request $request){
        $subject   = Subject::select('subject_name','id')->where('subject_category',$request->category_id)->Activated()->get();        
        return response()->json(['subject'=>$subject]);
    }

    public function solutionsLibrarySubjectPage(Request $request){
        
        $subjectsCategory = SubjectCategory::TopicsData()->get();

    }

    public function getSubjects(Request $request){
        $questions = Questions::latest()->Activated();
        if($request->category_id!=''){
            $questions = $questions->where('subject_category',$request->category_id);
        }
        if($request->subject_id!=''){
            $questions = $questions->where('subject',$request->subject_id);
        }
        if($request->search!=''){
            $search = $request->search;
            $questions = $questions->whereHas('subjects',function($query) use ($search){
                            $query->where('subject_name','LIKE','%'.$search.'%');
                        });
        }
        $questions = $questions->paginate(20);


        $view = view('sections.solution-library',compact('questions'))->render();
        return response()->json(['html'=>$view]);
    }

    public function questionDetails(Request  $request,$question_id){
        $question = Questions::FindOrFail($question_id);
        $relatedQuestions = Questions::select('id','question','answer')->where('subject_category',$question->subject_category)->where('id','!=',$question_id)->get();
        return view('solutions-library.question',compact('question','relatedQuestions'));
    }

}
