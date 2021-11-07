<?php

use App\Http\Controllers\AdminhomeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LikeController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PostcategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');


/*SEARCH*/
Route::post('/search',[HomeController::class, 'search'])->name('search');
/*END/SEARCH*/


Route::get('/likes/',[LikeController::class, 'index'])->name('profile.likes');
Route::post('/likes/{product}', [LikeController::class, 'store'])->name('like');
Route::delete('/likes/{product}',[LikeController::class, 'destroy'])->name('likes.destroy');

/*Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}',[CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{product}',[CartController::class,'destroy'])->name('cart.destroy');*/

/*Route::get('/cart',[ClientProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[ClientProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [ClientProductController::class, 'update'])->name('update.cart');
Route::delete('/remove-from-cart', [ClientProductController::class, 'remove'])->name('remove.from.cart');*/

Route::get('/products/{product}', [ClientProductController::class, 'index'])->name('client.products.show');
Route::get('/cart', [ClientProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [ClientProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [ClientProductController::class, 'update'])->name('update.cart');
Route::delete('/remove-from-cart', [ClientProductController::class, 'remove'])->name('remove.from.cart');

Route::prefix('')->middleware('auth')->group(function (){

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/{user}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}',[ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/comments',[ProfileController::class, 'comment'])->name('profile.comment');

});



Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register/store', [UserController::class, 'store'])->name('register.store');

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/store', [UserController::class, 'login'])->name('login.store');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');


Route::prefix('/adminpanel')->middleware(['auth', 'writerMiddleware'])->group(function () {

    Route::get('/', [AdminhomeController::class, 'index'])->name('admin.home');


    Route::resource('roles', RoleController::class);
    Route::get('/users', [UserController::class, 'show'])->name('users.show');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::patch('/products/{product}',[ProductController::class, 'specialOffer'])->name('product.specialOffer');
    Route::resource('products.pictures', PictureController::class);
    Route::resource('products.discounts', DiscountController::class);
    Route::resource('propertygroups', PropertygroupController::class);
    Route::resource('properties', PropertyController::class);
    Route::get('/products/{product}/properties', [ProductPropertyController::class, 'index'])->name('products.properties.index');
    Route::get('/products/{product}/properties/create', [ProductPropertyController::class, 'create'])->name('products.properties.create');
    Route::post('/products/{product}/properties', [ProductPropertyController::class, 'store'])->name('products.properties.store');
    Route::resource('postcategories', PostcategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('productquestions', ProductquestionController::class);
    Route::post('/answers/productquestions/{productquestion}', [AnswerController::class, 'store'])->name('answer.productquestion.store');
    Route::resource('answers', AnswerController::class);

    Route::post('stars/products/{product}', [StarController::class, 'productStore'])->name('stars.products.store')->withoutMiddleware('writerMiddleware');
    Route::post('stars/posts/{post}', [StarController::class, 'postStore'])->name('stars.posts.store')->withoutMiddleware('writerMiddleware');
    Route::post('stars/productquestions/{productquestion}', [StarController::class, 'productquestionStore'])->name('stars.productquestions.store')->withoutMiddleware('writerMiddleware');

    Route::resource('sliders', SliderController::class);
});
