<?php

use App\Http\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});




//domo page for admin dashboard
Route::get('/admin/home',function(){
    return view('admin.index');
});

// new route

Route::get('/admin/website/banner',function(){
    return view('admin.banner_image');
});

Route::get('/admin/website/banner/edit',function(){
    return view('admin.banner_image_edit');
});

Route::get('/admin/website/ads',function(){
    return view('admin.ads_image');
});

Route::get('/admin/website/bannerAds',function(){
    return view('admin.banner_ads');
});


//new route


//this is demo code for livewire
Route::get('/admin/city',function(){
    return view('admin.city');
});



//this is testing livewire
Route::get('/counter',Counter::class);


//write asxox route here





Route::get('testing',[CityController::class,'index']);
