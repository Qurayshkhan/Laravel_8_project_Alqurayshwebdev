<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AboutController;
use App\Http\Controllers\admin_profile;
use App\Http\Controllers\showAbout;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\happyCode;
use App\Http\Controllers\nameRoute;
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
    return view('welcome');
});
Route::get('about',function(){
    echo "Khuram";
});
Route::get('users/{u_id}', function ($id) {
    return $id;
});
Route::get('post/{post_id}/comments/{comment_id}', function ($id,$comm) {
    return "POST_ID ".$id." Comment_id ".$comm;
});
// Route::get('students/{name?}', function ($name=null) {
//     return  " Hi " .$name;
// });
Route::get('students/{name?}', function ($name='Hassan') {
    return  " Hi " .$name;
});
Route::get('product/{product_name}', function ($product) {
    return  "Product Name is ".$product;
})->where("product_name",'[A-Za-z]+');

Route::get('manager/{id}/{name}', function ($manager_id,$manager_name) {
    return  "Manager id is ".$manager_id." Manager name is ".$manager_name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

Route::get('employee/{id}/{name}', function ($emp_id,$emp_name) {
    return  "Employee id is ".$emp_id." Employee name is ".$emp_name;
})->whereNumber('id')->whereAlpha('name');
Route::redirect('Yahan', 'Wahan', 301);

Route::permanentRedirect('Yahan1','wahan2');
Route::fallback(function(){
    return "Default Message";
});
Route::get('about',function(){
    return view('aboutme');
});
Route::view('about','aboutme');

Route::get('adminprofile', function () {
    return view('admin.profile');
});
// Direct Method
Route::view('adminprofile2', 'admin.profile');

// Route::get('contact',function(){

//     return view('contactme',['name'=>'Hassan']);
// });

//Route::view('contact', 'contactme',['name'=>'Husnain','roll'=>10]);


Route::get('contact',function(){

    return view('contactme')->with('name','Hassan');
});

Route::view('login','login');
Route::view('register','register');

Route::redirect('login', 'register');


Route::fallback(function(){
    return view('default');
});
Route::get('aboutc',[AboutController::class,'show']);
Route::get('aboutc/{name}',[AboutController::class,'show']);
Route::get('admin_profile/{name}',[admin_profile::class,'show_profile']);
Route::get('admin_profile2',[admin_profile::class,'show_profile2']);
Route::get('myuri',[showAbout::class]);
Route::get('mycontact',[ContactController::class,'myshow']);
Route::get('happyCode',[happyCode::class,'HappyCode']);
Route::get('layout',function(){
    return view('LayoutWelcome');
});
Route::get('ContactLayout',function(){
    return view('ContactLayout');
});
Route::get('InharitLayout',function(){
 return view('inharitWelcome');
});
Route::get('cssjava',function(){
 return view('components.css-java-script');
});
Route::get('namedRoute',function(){
    return view('namedRoute');
})->name('namedRoute');
Route::get('namedRouteAbout',function(){
    return view('namedRouteAbout');
})->name('nameRouteAbout');

Route::get('nameRouteContact',[nameRoute::class,'nameContact'])->name('nameRouteController');