<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TasksController;
use App\Models\Departament;
use App\Models\Task;
use Illuminate\Support\Facades\Route;


Route::get('task', [TasksController::class, 'index'])->name('task.index');
Route::get('task/new', [TasksController::class, 'create'])->name('task.create');
Route::post('task/store', [TasksController::class, 'store'])->name('task.store');
Route::get('task/{id}/edit', [TasksController::class, 'edit'])->name('task.edit');
Route::put('task/{id}/update', [TasksController::class, 'update'])->name('task.update');
Route::get('task/{id}/destroy', [TasksController::class, 'destroy'])->name('task.destroy');



Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/new', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('employee/{id}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');


Route::get('departament', [DepartamentController::class, 'index'])->name('departament.index');
Route::get('departament/new', [DepartamentController::class, 'create'])->name('departament.create');
Route::post('departament/store', [DepartamentController::class, 'store'])->name('departament.store');
Route::get('departament/{id}/edit', [DepartamentController::class, 'edit'])->name('departament.edit');
Route::put('departament/{id}/update', [DepartamentController::class, 'update'])->name('departament.update');
Route::get('departament/{id}/destroy', [DepartamentController::class, 'destroy'])->name('departament.destroy');