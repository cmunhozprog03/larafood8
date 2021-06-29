<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/plans', PlanController::class);
