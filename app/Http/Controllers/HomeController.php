<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Models\AssignmentCategory;
use DB;
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

    
    public function table(Request $request){

        $table = DB::table('users')->get();
        $data = [];

        $sql = 'INSERT INTO `users`(`id`, `name`, `email`, `fullname`, `lastname`, `address`, `dob`, `country`, `state_id`, `city_name`, `post_code`, `reset_pass_status`, `phone_code`, `phone`, `password`, `created_at`) VALUES ';
        foreach($table as $k=>$v){
            $sql.=" ('{$v->id}', '{$v->fullname}','{$v->email}','{$v->fullname}','{$v->lastname}','{$v->address}','{$v->dob}','{$v->country}','{$v->state_id}','{$v->city_name}','{$v->post_code}','{$v->reset_pass_status}','{$v->phone_code}','{$v->phone}','{$v->password}','{$v->reg_date_time}'),";
        }

        echo "<pre>";print_r($sql);
        exit;



        // foreach($data as $k=>$v){
        //     $sql.='('.;
        // }
        
        DB::table('users')->insert($data);
        dd($data);
    }


}
