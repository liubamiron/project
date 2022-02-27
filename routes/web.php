<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\test\TestTagController;
use App\Http\Controllers\ContactUsController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\api\ArticleApiController;
use App\Http\Controllers\api\ImobilApiController;

use App\Http\Controllers\ItemController;

use App\Http\Controllers\RegistrationController;
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

 Route::get('/registration', function () {return view('registration'); })->name('registration');

 Route::get('/houses', [HouseController::class, 'index'])->name('house');

 Route::get('/apartment', [ApartmentController::class, 'index'])
 ->name('apartment');

 Route::get('/blog/article/create', [ArticleController::class, 'create']);

 Route::get('/blog', [BlogController::class, 'index'])->name('blog');

 

 Route::get('/blog/article/{id}', [ArticleController::class, 'show'])->name('blogArticle');



Route::get('/item/{id}', [ItemController::class, 'index'])->name('itemById');


 Route::get('/apartments/item/', [ItemController::class, 'index'])->name('apartmentsItem');

Route::get('/house/item/', [ItemController::class, 'index'])->name('housesItem');


// Route::post('/productAdd/{productId}', [ProductController::class, 'addProduct'])->name('product.add');




Route::get('/contact', [ContactUsController::class, 'view'])->name('contactUs');

Route::post('/contactUs', [ContactUsController::class, 'send'])->name('contactUs.send')
->middleware('log.activity:sendContactUs');


// Route::post('/contactUs/{articleId}', [CommentController::class, 'send'])->name('comment.send');


Route::get('/api/articles/most-popular',  [ArticleApiController::class, 'readMostPopular']);

Route::get('/api/articles',  [ArticleApiController::class, 'readAllArticles']);

Route::get('/api/articles/{id}',  [ArticleApiController::class, 'readOneArticle']);

Route::post('/api/articles/',  [ArticleApiController::class, 'createArticle']);

Route::post('/api/articles/{id}',  [ArticleApiController::class, 'updateArticle']);

Route::delete('/api/articles/{id}',  [ArticleApiController::class, 'deleteArticle']);




//Route::get('/api/items/most-popular', [ImobilApiController::class, 'readMostPopular']);
Route::get('/api/items', [ImobilApiController::class, 'readAll']);
Route::get('/api/items/{id}', [ImobilApiController::class, 'readOne']);



// Route::post('/api/items/new',[ImobilApiController::class, 'postNew']);

// Route::get('/api/items/type', [ImobilApiController::class, 'readType']);

