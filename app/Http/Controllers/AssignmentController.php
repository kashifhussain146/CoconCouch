<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignmentCategory;

class AssignmentController extends Controller
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
        $category = AssignmentCategory::where('status','active')->latest()->get();
        return view('assignment.category',compact('category'));
    }
}
