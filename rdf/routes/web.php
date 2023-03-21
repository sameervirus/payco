<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageTextController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('/products', [WebsiteController::class, 'products'])->name('products');
Route::get('/invset', [WebsiteController::class, 'invset'])->name('invset');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/contact-us', [WebsiteController::class, 'contacts'])->name('contacts');
Route::post('/contact-us', [WebsiteController::class, 'feedback'])->name('feedback');


Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/admin/posts', PostController::class, ['as' => 'admin']);
    Route::get('/admin/feedback', [AdminController::class, 'feeds']);
    Route::get('/admin/users', [AdminController::class, 'users']);
    Route::resource('/admin/page_texts', PageTextController::class, ['as' => 'admins']);
});

require __DIR__.'/auth.php';
require __DIR__.'/register.php';


Route::get("clear", function() {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('storage:link');
    return "done";
});
