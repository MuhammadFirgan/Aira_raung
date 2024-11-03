<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/product/{id}', [MainController::class, 'show'])->name('detail');

Route::get('/gate', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/gate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/pages', function() {
//     return view('dashboard.section.pages.index');
// })->middleware('auth');

route::prefix('dashboard/pages')->middleware('auth')->group(function() {
    
    Route::resource('home', HomeSectionController::class)->only(['index', 'edit', 'update']);
    Route::resource('about', AboutSectionController::class)->only(['index', 'edit', 'update']);
    Route::resource('contact', ContactSectionController::class)->only(['index', 'edit', 'update']);
});

Route::get('/dashboard/product', function() {
    return view('dashboard.section.product_list.index');
})->middleware('auth');
