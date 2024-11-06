<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myservice',[MyController::class,'someMethod']);

// Route::get('/order', [OrderController::class, 'createOrder']);
// Route::get('/order/{gateway}', [OrderController::class, 'createOrder']);

// Route for creating an order using Stripe
Route::get('/order/stripe', [OrderController::class, 'createOrderWithStripe']);

// Route for creating an order using PayPal
Route::get('/order/paypal', [OrderController::class, 'createOrderWithPaypal']);


Route::get('/calculate-discount/{amount}', [OrderController::class, 'calculateTotal']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
