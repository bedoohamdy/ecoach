<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\AttendanceCaptinController;


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

Route::prefix("admin")->middleware('auth')->group(function (){


    Route::view('/', 'admin.index')->name('dashboard.index');
    Route::view('dashboard', 'admin.index')->name('dashboard.index');

    // Players
    Route::resource('players', 'App\Http\Controllers\Admin\PlayerController');
    Route::get('toggleactive/{type}/{id}', 'App\Http\Controllers\Admin\PlayerController@ToggleActivePlayer');
    // Groups
    Route::resource('groups', 'App\Http\Controllers\Admin\GroupController');
    // Branches
    Route::resource('branches', 'App\Http\Controllers\Admin\BranchController');
    Route::post('branches', 'App\Http\Controllers\Admin\BranchController@store');
    // Skills
    Route::resource('skills', 'App\Http\Controllers\Admin\SkillController');
    Route::get('skills/create/{id}', 'App\Http\Controllers\Admin\SkillController@create');
    // Attendance
    Route::resource('attendances', 'App\Http\Controllers\Admin\AttendanceController');
    Route::get('attendance/captin', [AttendanceController::class, "captinView"])->name('attendance.captin');
    Route::post('attendance/captin/{id}', [AttendanceController::class, "captinDelete"]);
    // New User
    Route::get("/newuser", [AuthController::class, "NewUserPage"]);
    Route::post("/newuser", [AuthController::class, "NewUserLogic"]);
    Route::post("/deleteuser/{id}", [AuthController::class, "DeleteUserLogic"]);
    //Logout
    Route::get("/logout", [AuthController::class, "LogOutLogic"]);

});


Route::middleware('user')->group(function () {
    
    
    // Login
    Route::get("/login", [AuthController::class, "LoginPage"]);
    Route::post("/login", [AuthController::class, "LoginLogic"]);
    Route::view("/players","player.index");
    Route::view("/home","home.index");



});





