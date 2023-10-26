<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignmentCategory;
use App\Models\ModulesData;
use App\Models\Modules;

class BlogsController extends Controller
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
    public function index(){
        
        $category =    module(14);
        $blogs = module(15);
        return view('blogs.index',compact('blogs','category'));

    }

    public function assignmentDetails(Request $request,$module_data_id){
        $category = ModulesData::find($module_data_id);
        $modules = explode(',',$category->module_ids);

        $experts = array();
        $services = array();
        $subjects = array();
        $portfolio = array();
        $testimonials = array();
        $faqs = array();

        if(count($modules) > 0){
            $modulesIDS = json_decode($category->category_ids);
            foreach($modules as $k=>$v){
                
                $modDataId = $modulesIDS->{$modules[$k]};
              
                switch ($v) {

                    case '4':
                        $experts = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;

                    case '5':
                        $services = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;

                    case '9':
                        $portfolio = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;

                    case '11':
                        $subjects = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;

                    case '12':
                        $testimonials = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;

                    case '19':
                        $faqs = ModulesData::select('id','title','module_id','description','image')->where('status','active')->whereIn('id',$modDataId)->get();
                    break;
                }
            }
        }
        //dd($portfolio);

        return view('blogs.show',compact('category','experts','services','subjects','portfolio','testimonials','faqs'));
        
    }


}
