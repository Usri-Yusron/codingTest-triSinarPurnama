<?php

use App\Http\Controllers\managerController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// middleware group buat product manager
Route::middleware('auth', 'prodManage')->group(function() {
    // dashboard
    Route::get('/manager/dashboard', [managerController::class, 'index']);

    // detail order page
    Route::get('manager/detail_orders', [managerController::class, 'detail_orders']);

    // add order route page
    Route::get('manager/add_order', [managerController::class, 'add_order']);

    // save work order function
    Route::post('manager/save_order', [managerController::class, 'save_order']);

    // delete order function
    Route::get('manager/delete_order/{id}', [managerController::class, 'delete_order']);

    // edit order page
    Route::get('manager/edit_order/{id}', [managerController::class, 'edit_order']);

    // update order function
    Route::post('manager/update_order/{id}', [managerController::class, 'update_order']);

    // chart order
    Route::get('/chart-data', [managerController::class, 'chartData'])->name('chart.data');
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
