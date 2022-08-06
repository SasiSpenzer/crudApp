<?php
/* By Sasitha Perera 2022-08-06 **  */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Employee List Route
Route::get('/', [EmployeeController::class, 'viewEmployeesList']);

// Employee View Route
Route::get('/employee_view/{id}', [EmployeeController::class, 'showEmployeesDetails'])->where('id','[0-9]+');

// Employee Edit Route
Route::get('/employee_edit/{id}', [EmployeeController::class, 'editEmployeesDetails'])->where('id','[0-9]+');

// Employee data Deletes
Route::get('/delete_salary/{id}', [EmployeeController::class, 'deleteEmployeesSalary'])->where('id','[0-9]+');
Route::get('/delete_title/{id}', [EmployeeController::class, 'deleteEmployeesTitle'])->where('id','[0-9]+');

// Employee Update Route
Route::post('/employee_edit', [EmployeeController::class, 'updateEmployeesDetails']);
Route::post('/employee_create', [EmployeeController::class, 'storeEmployeesDetails']);

// Employee Creation
Route::get('/create_employee', [EmployeeController::class, 'createEmployee']);
