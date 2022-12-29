<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\AdsPostController::class, 'index']);
Route::post('/', [App\Http\Controllers\AdsPostController::class, 'index']);
Route::group(['prefix' => 'Ads'],function(){

    Route::get('/create', [App\Http\Controllers\AdsPostController::class,'create'])->name('ad.create');
    Route::Post('/create', [App\Http\Controllers\AdsPostController::class,'store'])->name('ad.store');
    Route::get('/edit/{id}', [App\Http\Controllers\AdsPostController::class,'edit'])->name('ad.edit');
    Route::Post('/edit/{id}', [App\Http\Controllers\AdsPostController::class,'update'])->name('ad.update');
    Route::get('/delete/{id}', [App\Http\Controllers\AdsPostController::class,'destroy'])->name('ad.delete');
});

Route::get('/categories', [App\Http\Controllers\AdsCategoryController::class, 'index'])->name('categories');
Route::get('/categoryAds/{id}', [App\Http\Controllers\AdsCategoryController::class, 'show'])->name('categoryads');
Route::group(['prefix' => 'category'],function(){
    Route::get('/create', [App\Http\Controllers\AdsCategoryController::class,'create'])->name('category.create');
    Route::Post('/create', [App\Http\Controllers\AdsCategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}', [App\Http\Controllers\AdsCategoryController::class,'edit'])->name('category.edit');
    Route::Post('/edit/{id}', [App\Http\Controllers\AdsCategoryController::class,'update'])->name('category.update');
    Route::get('/delete/{id}', [App\Http\Controllers\AdsCategoryController::class,'destroy']);
});

Route::get('/tags', [App\Http\Controllers\AdsTagController::class, 'index'])->name('tags');
Route::get('/tagAds/{id}', [App\Http\Controllers\AdsTagController::class, 'show'])->name('tagads');
Route::group(['prefix' => 'tag'],function(){
    Route::get('/create', [App\Http\Controllers\AdsTagController::class,'create'])->name('tag.create');
    Route::Post('/create', [App\Http\Controllers\AdsTagController::class,'store'])->name('tag.store');
    Route::get('/edit/{id}', [App\Http\Controllers\AdsTagController::class,'edit'])->name('tag.edit');
    Route::Post('/edit/{id}', [App\Http\Controllers\AdsTagController::class,'update'])->name('tag.update');
    Route::get('/delete/{id}', [App\Http\Controllers\AdsTagController::class,'destroy']);
});

Route::get('/advertiser', [App\Http\Controllers\AdvertiserController::class, 'index'])->name('advertiser');
Route::get('/advertiserAds/{id}', [App\Http\Controllers\AdvertiserController::class, 'show'])->name('advertiserads');
