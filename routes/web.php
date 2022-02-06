<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
Route::get('admin/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('admin/plans/create', [PlanController::class, 'store'])->name('plans.store');

Route::get('/', function () {
    return view('welcome');
});
