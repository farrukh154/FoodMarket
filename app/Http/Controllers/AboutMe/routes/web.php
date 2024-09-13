<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\IndexController as Site;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\WorkController;

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

// Route::get('/', Admin) {

// })->name('aboutme');

Route::get('/', [Site::class, 'index']);
Route::post('/message', [MessageController::class, 'create'])->name('messageme');

Route::get('adminpanel', [IndexController::class,'index']);

Route::get('adminpanel/orders', [OrderController::class, 'index'])->name('orders');
Route::get('adminpanel/orders-edit/{id}', [OrderController::class, 'edit'])->name('orders.edit');
Route::post('adminpanel/orders-update/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::get('adminpanel/orders-delete/{id}', [OrderController::class, 'destroy'])->name('orders.delete');


Route::post('/email', [EmailController::class, 'create'])->name('emailme');
Route::get('adminpanel/email', [EmailController::class, 'index'])->name('emailad');

Route::post('/header', [HeaderController::class, 'update'])->name('headerme');
Route::get('adminpanel/header', [HeaderController::class, 'index'])->name('headerchange');

Route::post('/work', [WorkController::class, 'update'])->name('mywork');
Route::get('adminpanel/work', [WorkController::class, 'index'])->name('workmy');

Route::post('/booking', [BookingController::class, 'update'])->name('mybooking');
Route::get('adminpanel/booking', [BookingController::class, 'index'])->name('bookingmy');

Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::post('adminpanel/project-update{id}', [ProjectController::class, 'update'])->name('project.update');

Route::post('/skills', [SkillsController::class, 'update'])->name('skills.update');
Route::get('adminpanel/skills', [SkillsController::class, 'index'])->name('skillschange');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo');
Route::post('adminpanel/photo-update{id}', [PhotoController::class, 'update'])->name('photo.update');