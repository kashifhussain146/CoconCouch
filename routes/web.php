<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AssignmentCategoryController;
use App\Http\Controllers\Backend\SubjectCategoryController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\QuestionsController;
use App\Http\Controllers\AdminAuth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FilerController;

use App\Http\Controllers\Backend\ModulesDataController;
use App\Http\Controllers\Backend\ModulesController;
use App\Http\Controllers\Backend\WidgetPagesController;
use App\Http\Controllers\Backend\WidgetsController;
use App\Http\Controllers\Backend\WidgetDataController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test-table', [HomeController::class, 'table'])->name('home');

Route::get('/testing-table', [HomeController::class, 'table'])->name('home');

Route::get('/assignment-help', [AssignmentController::class, 'index'])->name('assignment.help');
Route::get('/assignment/help/{module_data_id}', [AssignmentController::class, 'assignmentDetails'])->name('assignment.help.details')->where(['slug' => '[a-z]+']);


Route::post('ckeditor/upload',[CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
Route::post('ajax_upload_file',[FilerController::class, 'upload'])->name('filer.image-upload');
Route::post('ajax_remove_file',[FilerController::class, 'fileDestroy'])->name('filer.image-remove');


Route::get('/admin/login', [AdminLoginController::class,'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class,'adminLogin'])->name('admin.post.login');
Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');

Route::group(['middleware' => ['auth:admin']], function() {
    //Banner Master
    Route::group([], function() {

        Route::get('/admin/banner-list', [BannerController::class,'index'])->name('banner-list');//->middleware(['permission:Banner List']);
        Route::get('/admin/banner/create', [BannerController::class,'create'])->name('banner-create');//->middleware(['permission:Banner Create']);
        Route::post('/admin/banner/store', [BannerController::class,'store'])->name('banner-store');//->middleware(['permission:Banner Create']);
        Route::get('/admin/banner/edit/{id}', [BannerController::class,'edit'])->name('banner-edit');//->middleware(['permission:Banner Edit']);
        Route::post('/admin/banner/update/{id}', [BannerController::class,'update'])->name('banner-update');//->middleware(['permission:Banner Edit']);
        Route::get('/admin/banner/delete/{id}', [BannerController::class,'destroy'])->name('banner-delete');//->middleware(['permission:Banner Delete']);
        Route::post('/admin/banner/export-search-results', [BannerController::class,'export'])->name('export-search-results');
        Route::get('/admin/banner/view/{id}', [BannerController::class,'show'])->name('banner-view');//->middleware(['permission:Banner Edit']);

    });


    // Category Master
    Route::group([], function() {

        Route::get('/admin/category', [CategoryController::class,'index'])->name('category-list');//->middleware(['permission:Category List']);
        Route::get('/admin/category/create', [CategoryController::class,'create'])->name('category-create');//->middleware(['permission:Category Create']);
        Route::post('/admin/category/store', [CategoryController::class,'store'])->name('category-store');//->middleware(['permission:Category Create']);
        Route::get('/admin/category/edit/{id}', [CategoryController::class,'edit'])->name('category-edit');//->middleware(['permission:Category Edit']);
        Route::post('/admin/category/update/{id}', [CategoryController::class,'update'])->name('category-update');//->middleware(['permission:Category Edit']);
        Route::get('/admin/ajax/category/view/{id}', [CategoryController::class,'show'])->name('category-view');//->middleware(['permission:Category View']);

    });

    //assignment Category Master
    Route::group([], function() {

        Route::get('/admin/assignment-category', [AssignmentCategoryController::class,'index'])->name('assignment-category-list');//->middleware(['permission:Category List']);
        Route::get('/admin/assignment-category/create', [AssignmentCategoryController::class,'create'])->name('assignment-category-create');//->middleware(['permission:Category Create']);
        Route::post('/admin/assignment-category/store', [AssignmentCategoryController::class,'store'])->name('assignment-category-store');//->middleware(['permission:Category Create']);
        Route::get('/admin/assignment-category/edit/{id}', [AssignmentCategoryController::class,'edit'])->name('assignment-category-edit');//->middleware(['permission:Category Edit']);
        Route::post('/admin/assignment-category/update/{id}', [AssignmentCategoryController::class,'update'])->name('assignment-category-update');//->middleware(['permission:Category Edit']);
        Route::get('/admin/ajax/assignment-category/view/{id}', [AssignmentCategoryController::class,'show'])->name('assignment-category-view');//->middleware(['permission:Category View']);

    });
    
    
    
    //Subject Category Master
    Route::group([], function() {

        Route::get('/admin/subject-category', [SubjectCategoryController::class,'index'])->name('subject-category-list');//->middleware(['permission:Category List']);
        Route::get('/admin/subject-category/create', [SubjectCategoryController::class,'create'])->name('subject-category-create');//->middleware(['permission:Category Create']);
        Route::post('/admin/subject-category/store', [SubjectCategoryController::class,'store'])->name('subject-category-store');//->middleware(['permission:Category Create']);
        Route::get('/admin/subject-category/edit/{id}', [SubjectCategoryController::class,'edit'])->name('subject-category-edit');//->middleware(['permission:Category Edit']);
        Route::post('/admin/subject-category/update/{id}', [SubjectCategoryController::class,'update'])->name('subject-category-update');//->middleware(['permission:Category Edit']);
        Route::post('/admin/subject-category/delete/{id}', [SubjectCategoryController::class,'destroy'])->name('subject-category-destroy');//->middleware(['permission:Category Edit']);

        Route::get('/admin/ajax/subject-category/view/{id}', [SubjectCategoryController::class,'show'])->name('subject-category-view');//->middleware(['permission:Category View']);

    });


    //Subject Master
    Route::group([], function() {

        Route::get('/admin/subjects', [SubjectController::class,'index'])->name('subject-list');//->middleware(['permission:Category List']);
        Route::get('/admin/subjects/create', [SubjectController::class,'create'])->name('subject-create');//->middleware(['permission:Category Create']);
        Route::post('/admin/subjects/store', [SubjectController::class,'store'])->name('subject-store');//->middleware(['permission:Category Create']);
        Route::get('/admin/subjects/edit/{id}', [SubjectController::class,'edit'])->name('subject-edit');//->middleware(['permission:Category Edit']);
        Route::post('/admin/subjects/update/{id}', [SubjectController::class,'update'])->name('subject-update');//->middleware(['permission:Category Edit']);
        Route::post('/admin/subjects/delete/{id}', [SubjectController::class,'destroy'])->name('subject-destroy');//->middleware(['permission:Category Edit']);
        Route::get('/admin/ajax/subjects/view/{id}', [SubjectController::class,'show'])->name('subject-view');//->middleware(['permission:Category View']);

    });
    
   
    //Questions Modules
    Route::group([], function() {

        Route::get('/admin/questions', [QuestionsController::class,'index'])->name('questions-list');//->middleware(['permission:Category List']);
        Route::get('/admin/questions/create', [QuestionsController::class,'create'])->name('questions-create');//->middleware(['permission:Category Create']);
        Route::post('/admin/questions/store', [QuestionsController::class,'store'])->name('questions-store');//->middleware(['permission:Category Create']);
        Route::get('/admin/questions/edit/{id}', [QuestionsController::class,'edit'])->name('questions-edit');//->middleware(['permission:Category Edit']);
        Route::post('/admin/questions/update/{id}', [QuestionsController::class,'update'])->name('questions-update');//->middleware(['permission:Category Edit']);
        Route::post('/admin/questions/delete/{id}', [QuestionsController::class,'destroy'])->name('questions-destroy');//->middleware(['permission:Category Edit']);
        Route::get('/admin/ajax/questions/view/{id}', [QuestionsController::class,'show'])->name('questions-view');//->middleware(['permission:Category View']);
        Route::get('/admin/ajax/subcategory', [QuestionsController::class,'getSubcategory'])->name('get.subcategory');//->middleware(['permission:Category View']);

    });

     /*Modules Data routes Start*/
    
    
     Route::get('/module/add', [ModulesController::class,'add'])->name('admin.modules.add');
    
     Route::post('/module/store', [ModulesDataController::class,'store'])->name('admin.modules.store');
    
     Route::post('/module/{module}/update', [ModulesDataController::class,'update'])->name('admin.modules.update');
    
     Route::get('/module/{module}/edit/{id}', [ModulesDataController::class,'edit'])->name('admin.modules.edit');
    
     Route::get('/module/{module}/delete/{id}', [ModulesDataController::class,'destroy'])->name('admin.modules.delete');
    
     Route::get('/admin/data-status/{module}/{status}', [ModulesDataController::class,'update_status']);
     
    
     Route::get('/module/{module}', [ModulesDataController::class,'index'])->name('admin.modules.data');
    
     Route::get('/module/{module}/add', [ModulesDataController::class,'add'])->name('admin.modules.data.add');
    
     Route::post('/module/{module}/store', [ModulesDataController::class,'store'])->name('admin.modules.data.store');
    
     Route::post('/module/{module}/update', [ModulesDataController::class,'update'])->name('admin.modules.data.update');
    
     Route::get('/module/{module}/edit/{id}', [ModulesDataController::class,'edit'])->name('admin.modules.data.edit');
    
     Route::get('/module/{module}/delete/{id}', [ModulesDataController::class,'destroy'])->name('admin.modules.data.delete');
    
    
     /*Modules Data routes End*/
    
     /*Widget Page routes Start*/
    
     Route::get('/admin/widget-pages', [WidgetPagesController::class,'index'])->name('admin.widget_pages');
    
     Route::get('/admin/add-widget-page', [WidgetPagesController::class,'add'])->name('admin.widget_pages.add');
    
     Route::post('/admin/store-widget-page', [WidgetPagesController::class,'store'])->name('admin.widget_pages.store');
    
     Route::post('/admin/update-widget-page', [WidgetPagesController::class,'update'])->name('admin.widget_pages.update');
    
     Route::get('/admin/edit-widget-page/{widget_page}', [WidgetPagesController::class,'edit'])->name('admin.widget_pages.edit');
    
     Route::get('/admin/delete-widget-page/{widget_page}', [WidgetPagesController::class,'destroy'])->name('admin.widget_pages.delete');
    
     /*Widget Page routes End*/
    
     /*Widget routes Start*/
    
     Route::get('/admin/widgets', [WidgetsController::class,'index'])->name('admin.widgets');
    
     Route::get('/admin/add-widget', [WidgetsController::class,'add'])->name('admin.widgets.add');
    
     Route::post('/admin/store-widget', [WidgetsController::class,'store'])->name('admin.widgets.store');
    
     Route::post('/admin/update-widget', [WidgetsController::class,'update'])->name('admin.widgets.update');
    
     Route::get('/admin/edit-widget/{widget}', [WidgetsController::class,'edit'])->name('admin.widgets.edit');
    
     Route::get('/admin/delete-widget/{widget}', [WidgetsController::class,'destroy'])->name('admin.widgets.delete');
    
     /*Widget routes End*/
    
     /*Widget data routes Start*/
    
     Route::get('/page/{page}', [WidgetDataController::class,'index'])->name('admin.widgets_data');
    
    
     Route::post('/store-widget-data/{id}', [WidgetDataController::class,'store'])->name('admin.widget_data.store');
    
     Route::post('/update-widget-page', [WidgetDataController::class,'update'])->name('admin.widget_pages.update');
     
     
    
    
     Route::get('/delete-widget-page/{widget_page}', [WidgetPagesController::class,'destroy'])->name('admin.widget_pages.delete');
    

    

    
});
