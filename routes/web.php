<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SignupController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/choosed', function () {
    return view('choosed');
});
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/catalog/milk', function () {
    return view('milk');
})->name('milk');
Route::get('/catalog/milk/product', function () {
    return view('product');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/search/{question?}', function ($question) {
    $searchptoducts = Product::where('description',$question)->get();
    // $searchptoducts = Product::where('description',' LIKE ',"%".$question."%")->get();
    return view('search', ['result'=>$searchptoducts]);
})->name('search');

Route::get('/registration', [RegistrationController::class, 'index'])->name('view_registration');
Route::post('/registration', [RegistrationController::class, 'create'])->name('registration');

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'auth'])->name('signup');