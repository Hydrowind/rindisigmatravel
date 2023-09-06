<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardController;
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
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('detail', [PageController::class, 'detail'])->name('detail');

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
      'books'         => BookController::class,
      'transactions'  => TransactionController::class,
      'students'      => StudentController::class,
  ]);
  Route::resource('users', UserController::class)->middleware('superadmin');
});