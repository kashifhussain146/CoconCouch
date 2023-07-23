<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Models\AssignmentCategory;
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
}
