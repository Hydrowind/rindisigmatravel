<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RegionController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('product', [PageController::class, 'product'])->name('product');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('detail/product/{id}', [PageController::class, 'detail_product'])->name('detail.product');
Route::get('detail/blog/{id}', [PageController::class, 'detail_blog'])->name('detail.blog');

Route::controller(AuthController::class)->group(function() {
  Route::get('login', 'login')->name('login');
  Route::post('signin', 'signin')->name('signin');
  Route::get('signout', 'signout')->name('signout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function(){
  Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
  Route::get('report', [ReportController::class, 'index'])->middleware('superadmin')->name('report');
  Route::get('export', [ReportController::class, 'exportPDF'])->middleware('superadmin')->name('export');
  Route::resources([
      'user'      => UserController::class,
      'product'   => ProductController::class,
      'post'      => PostController::class,
      'region'    => RegionController::class,
  ]);
  Route::resource('users', UserController::class)->middleware('superadmin');
});