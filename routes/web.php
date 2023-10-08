<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;


Route::get('/',[HomeController::class,'index'])->name('view.home');
Route::get('/view/detail/{id}',[HomeController::class,'detail'])->name('view.detail');


Route::get('/employee/add',[EmployeeController::class,'index'])->name('employee.add');
Route::post('/employee/create',[EmployeeController::class,'create'])->name('employee.create');

Route::get('/employee/manage',[EmployeeController::class,'manage'])->name('employee.manage');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');




