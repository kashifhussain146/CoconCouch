<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssignmentCategory;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use DataTables;
use Validator;
use Auth;
use Str;

class AssignmentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) 
        {
            $data = AssignmentCategory::latest()->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row)
                    {
                        $btn =' ';
                        if(Auth()->user()->can('Category Edit'))
                        {
                            $btn .= '<a href="'.route("category-edit", $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                        }

                        if(Auth()->user()->can('Category View')){
                        $btn .= ' <button type="button" data-url="'.route('category-view', $row->id).'" class="edit btn btn-primary btn-sm viewDetail">View</a>';
                        }
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $data = AssignmentCategory::latest()->get();
        return view('admin.assignment-category.category',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industry = Industry::get();
        return view('admin.assignment-category.category-create',compact('industry'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";print_r($request->post());
        // exit;
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:assignment_category,title',
            'image'=>'required|mimes:jpg,jpeg,png,svg',

        ]);

        if ($validator->fails()) 
        {
		   return response()->json([
			'status' => false,
			'errors' => $validator->errors()
			]);
        }



        $category = new AssignmentCategory();
        

        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if($request->hasFile('image'))
        {
            $image = 'assignment-category_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('/uploads/assignment-category'), $image);
            $image = "/uploads/assignment-category/".$image;
            $category->image = $image ;
        }
        $category->status = 'active';
        $category->description = $request->description;
        // $category->sort_order = $request->sort_order;
        $category->created_at = date('Y-m-d H:i:s');
        $category->updated_at =  date('Y-m-d H:i:s');
        $category->save();


        return response()->json([
            'status' => true,
            'msg' => 'Category created successfully'
			]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $loan = AssignmentCategory::with('industry')->find($id);
    //    prd($loan);
        return view('admin.assignment-category.category-show',compact('loan'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = AssignmentCategory::find($id);
        $industry = Industry::get();
        return view('admin.assignment-category.category-edit',compact('loan','industry'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:assignment_category,title,'.$id,
            'image'=>'required|mimes:jpg,jpeg,png,svg',
        ]);

        if ($validator->fails()) 
        {
		   return response()->json([
			'status' => false,
			'errors' => $validator->errors()
			]);
        }


        $category = AssignmentCategory::find($id);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if($request->hasFile('image'))
        {
            $image = 'assignment-category_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('/uploads/assignment-category'), $image);
            $image = "/uploads/assignment-category/".$image;
            $category->image = $image ;
        }
        $category->status = 1;
        $category->description = $request->description;
        // $category->sort_order = $request->sort_order;
        $category->created_at = date('Y-m-d H:i:s');
        $category->updated_at =  date('Y-m-d H:i:s');
        $category->save();



        return response()->json([
            'status' => true,
            'msg' => 'Service updated successfully'
			]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssignmentCategory::find($id)->delete();
    }



}
