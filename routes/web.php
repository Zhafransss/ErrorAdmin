<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\KategoriController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses formulir login
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/home', 'HomeController@index')->name('home');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('list.product');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::post('/cart', [App\Http\Controllers\HomeController::class, 'add_to_cart'])->name('add_to_cart');
Route::delete('/cart/{id}', [App\Http\Controllers\HomeController::class, 'destroy_cart_product'])->name('destroy_cart_product');
Route::get('/v1/trayek', [KategoriController::class, 'index'])->name('trayek.index');

// Define the create route
Route::get('/v1/trayek', [KategoriController::class, 'create'])->name('trayek.create');

Auth::routes();

Route::prefix('admin')->middleware('role:admin')->group(function () {

    // dashboard 
    Route::get('', [App\Http\Controllers\Backend\IndexController::class, 'index'])->name('dashboard');

    // route product
    Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

    // route users
    Route::resource('users', App\Http\Controllers\Backend\ProductController::class);

    // route orders
    Route::get('orderan', [App\Http\Controllers\Backend\OrderanController::class, 'index'])->name('orderan.index');

    // route reviews
    Route::get('review', [App\Http\Controllers\Backend\ReviewController::class, 'index'])->name('review.index');
    Route::resource('Kategori', App\Http\Controllers\Backend\KategoriController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/trayek', function () {
    return view('trayek');
});
Route::get('/lacak', function () {
    return view('lacak');
});

