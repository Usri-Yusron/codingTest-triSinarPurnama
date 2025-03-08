<?php

use App\Http\Controllers\managerController;
use App\Http\Controllers\operatorController;
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
    Route::get('manager/detail_orders', [managerController::class, 'detail_orders'])->name('manage.order.index');

    // add order route page
    Route::get('manager/add_order', [managerController::class, 'add_order']);

    // filter order page
    Route::get('manage/filter_order', [managerController::class, 'filter_order']);

    // save work order function
    Route::post('manager/save_order', [managerController::class, 'save_order']);

    // delete order function
    Route::get('manager/delete_order/{id}', [managerController::class, 'delete_order']);

    // edit order page
    Route::get('manager/edit_order/{id}', [managerController::class, 'edit_order']);

    // update order function
    Route::post('manager/update_order/{id}', [managerController::class, 'update_order']);

    // operator page
    Route::get('manager/detail_operators', [managerController::class, 'detail_operators']);

    // detail operator page
    Route::get('manager/detail_operator/{id}', [managerController::class, 'detail_operator']);

    // chart order
    Route::get('/chart-data', [managerController::class, 'chartData'])->name('chart.data');
});
    

// middleware group buat operator
Route::middleware('auth', 'verified')->group(function() {
    // dashboard operator
    Route::get('/operator/dashboard', [operatorController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
