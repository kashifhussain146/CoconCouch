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

    
    public function solutionsLibrary(Request $request){

        $subjectcategory = SubjectCategory::Activated();
        $subjectcategory = $subjectcategory->get();
        $questions       = Questions::latest()->Activated();
        
        $topics = [];

        if($request->subject_category!=''){
            $questions = $questions->where('subject_category',$request->subject_category);
            $topics   = Subject::select('subject_name','id')->where('subject_category',$request->subject_category)->Activated()->get();  
        }
        // dd($topics);
        if($request->subject!=''){
            $questions = $questions->where('subject',$request->subject);
        }
        if($request->search!=''){
            $search = $request->search;
            $questions = $questions->where(function($query) use ($search){
                                $query->where('question','LIKE','%'.$search.'%')->orwhere('answer','LIKE','%'.$search.'%');
                            });
        }
        $questions = $questions->paginate(20);

        

        return view('solutions-library.index',compact('subjectcategory','topics','questions'));
    }

    public function getSubcategory(Request $request){
        $subject   = Subject::select('subject_name','id')->where('subject_category',$request->category_id)->Activated()->get();        
        $questions = Questions::latest()->Activated();
        
        if($request->category_id!=''){
            $questions = $questions->where('subject_category',$request->category_id);
        }
        $questions = $questions->paginate(20);

        $view = view('sections.solution-library',compact('questions'))->render();
        return response()->json(['subject'=>$subject,'html'=>$view]);
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

}
