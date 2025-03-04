<?php

use App\Http\Controllers\managerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// middleware group buat product manager
Route::middleware('auth', 'prodManage')->group(function() {
    // dashboard
    Route::get('/manager/dashboard', [managerController::class, 'index']);

    // detail order
    Route::get('manager/detail_orders', [managerController::class, 'detail_orders']);

    // add order route
    Route::get('manager/add_order', [managerController::class, 'add_order']);

    // save work order
    Route::post('manager/save_order', [managerController::class, 'save_order']);
});
    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
