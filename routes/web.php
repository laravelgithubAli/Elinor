<?php

use App\Http\Controllers\AdminhomeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LikeController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterdescriptionController;
use App\Http\Controllers\FootertextController;
use App\Http\Controllers\MassageMailController;
use App\Http\Controllers\NewsletterController;
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
use App\Http\Controllers\ShoporderController;
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
Route::get('/see-all', [HomeController::class, 'show'])->name('see.all');
Route::get('/see-all-most', [HomeController::class, 'most'])->name('see.all.most');
Route::get('/see-all-newest', [HomeController::class, 'newest'])->name('see.all.newest');

/*forgotPassword*/
Route::get('/forgot/password', [HomeController::class, 'enterMail'])->name('forgot');
Route::post('/forgot/password', [HomeController::class, 'forgot'])->name('forgot.password');
/*End:forgotPassword*/




/*SEARCH*/
Route::post('/search',[HomeController::class, 'search'])->name('search');
/*END/SEARCH*/

/*NEWSLETTER*/
Route::post('/newsletter',[NewsletterController::class, 'store'])->name('newsletter.store');
/*END/NEWSLETTER*/

Route::get('/likes/',[LikeController::class, 'index'])->name('profile.likes');
Route::post('/likes/{product}', [LikeController::class, 'store'])->name('like');
Route::delete('/likes/{product}',[LikeController::class, 'destroy'])->name('likes.destroy');

Route::get('/products/{product}', [ClientProductController::class, 'index'])->name('client.products.show');
Route::get('/category/products/{category}', [ClientProductController::class, 'catPro'])->name('client.catPro.show');

Route::get('/cart', [ClientProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [ClientProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [ClientProductController::class, 'update'])->name('update.cart');
Route::post('/remove-from-cart', [ClientProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/information',[ShoporderController::class, 'index'])->name('information');
Route::post('/information',[ShoporderController::class, 'store'])->name('information.store');
Route::get('/information/final',[ShoporderController::class, 'show'])->name('information.final');



Route::post('/products/comments/{product}',[ProductquestionController::class, 'ClientCommentStore'])->name('Client.comment.store');

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

    /*Footer*/
    Route::get('/footer/links',[FooterController::class,'edit'])->name('footer.links.edit');
    Route::patch('/footer',[FooterController::class,'update'])->name('footers.update');
    /*End/Footer*/

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

    Route::get('/massageMail',[MassageMailController::class, 'index'])->name('massageMail.index');
    Route::post('/massageMail/store',[MassageMailController::class,'store'])->name('massageMail.store');

    Route::get('/footertexts',[FootertextController::class, 'index'])->name('footertext.index');
    Route::patch('/footertexts/update1',[FootertextController::class, 'create'])->name('footertext.create');
    Route::patch('/footertexts/update2',[FootertextController::class, 'update'])->name('footertext.update');

    Route::get('/footer/description',[FooterdescriptionController::class, 'index'])->name('footer.description.index');
    Route::patch('footer/description/update',[FooterdescriptionController::class, 'update'])->name('footer.description.update');

    Route::get('/information/show',[ShoporderController::class, 'adminShow'])->name('admin.information.show');
    Route::get('/information/shoporders/{shoporder}',[ShoporderController::class, 'adminShowList'])->name('admin.information.show.list');
    Route::post('/information/sendMail',[ShoporderController::class, 'sendMail'])->name('admin.information.sendMail');



});
