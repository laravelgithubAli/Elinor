<?php

use App\Http\Controllers\AdminhomeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PostcategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPropertyController;
use App\Http\Controllers\ProductquestionController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertygroupController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class, 'index'])->name('home');


Route::get('/register',[UserController::class ,'create'])->name('register');
Route::post('/register/store',[UserController::class ,'store'])->name('register.store');

Route::get('/login',[UserController::class, 'index'])->name('login');
Route::post('Elinor/login/store',[UserController::class, 'login'])->name('login.store');
Route::post('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}',[UserController::class, 'update'])->name('users.update');


Route::prefix('/adminpanel')->group(function () {

    Route::get('/',[AdminhomeController::class,'index'])->name('admin.home');


    Route::resource('roles',RoleController::class);
    Route::get('/users',[UserController::class, 'show'])->name('users.show');
    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);
    Route::resource('products.pictures',PictureController::class);
    Route::resource('products.discounts',DiscountController::class);
    Route::resource('propertygroups', PropertygroupController::class);
    Route::resource('properties', PropertyController::class);
    Route::get('/products/{product}/properties',[ProductPropertyController::class, 'index'])->name('products.properties.index');
    Route::get('/products/{product}/properties/create', [ProductPropertyController::class, 'create'])->name('products.properties.create');
    Route::post('/products/{product}/properties', [ProductPropertyController::class, 'store'])->name('products.properties.store');
    Route::resource('postcategories',PostcategoryController::class);
    Route::resource('posts',PostController::class);
    Route::resource('productquestions',ProductquestionController::class);
    Route::post('/answers/productquestions/{productquestion}',[AnswerController::class , 'store'])->name('answer.productquestion.store');
    Route::resource('answers',AnswerController::class);

    Route::post('stars/products/{product}',[StarController::class,'productStore'])->name('stars.products.store');
    Route::post('stars/posts/{post}',[StarController::class,'postStore'])->name('stars.posts.store');
    Route::post('stars/productquestions/{productquestion}',[StarController::class,'productquestionStore'])->name('stars.productquestions.store');

    Route::resource('sliders',SliderController::class);


});
