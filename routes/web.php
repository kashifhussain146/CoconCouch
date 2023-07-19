<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\AdminAuth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\DashboardController;

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




Route::get('/admin/login', [AdminLoginController::class,'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class,'adminLogin'])->name('admin.post.login');
Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');

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