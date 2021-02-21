<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Page\Home;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('products', [PageController::class, 'products'])->name('products');
Route::get('product/{id}', [PageController::class, 'product'])->name('product');
Route::get('profile', [PageController::class, 'profile'])->name('profile');
Route::post('auction', [AuctionController::class, 'store'])->name('addAuction');

Route::get('home', [Home::class, 'render']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

