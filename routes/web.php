<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ActionsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\DetialComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashdoardComponent;
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

Route::get('/',HomeComponent::class)->name('home.page');
Route::get('/shop',ShopComponent::class)->name('shop.page');
Route::get('/cart',CartComponent::class)->name('cart.page');
Route::get('/checkout',CheckOutComponent::class)->name('checkout.page');
Route::get('/product/{slug}',DetialComponent::class)->name('product.details');

Route::get('/action',ActionsComponent::class);

// For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('user/dashboard',[UserDashboardComponent::class,'render'])->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('admin/dashboard',[AdminDashdoardComponent::class,'render'])->name('admin.dashboard');
});
