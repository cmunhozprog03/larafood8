<?php

use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function(){

    Route::post('/plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('/plans/{url}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::get('/plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');
    Route::resource('/plans', PlanController::class);

});

