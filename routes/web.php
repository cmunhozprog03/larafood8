<?php

use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function(){


    Route::get('/plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');
    Route::get('/plans/{url}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::post('/plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('/plans/{url}/details/{idPlan}', [DetailPlanController::class, 'show'])->name('details.plan.show');
    Route::get('/plans/{url}/details/{idPlan}/edit', [DetailPlanController::class, 'edit'])->name('details.plan.edit');
    Route::put('/plans/{url}/details/{idPlan}', [DetailPlanController::class, 'update'])->name('details.plan.update');
    Route::delete('/plans/{url}/details/{idPlan}', [DetailPlanController::class, 'destroy'])->name('details.plan.destroy');



    Route::resource('/plans', PlanController::class);

});

