<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\VolunteerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('auth/login', [LoginController::class, 'index']);
Route::get('reverse/{number}', [MasterController::class, 'index']);
Route::resource('volunteer', VolunteerController::class);
Route::get('fetch', [MasterController::class, 'fetch']);
Route::get('volunteer/delete/{volunteer_id}', [VolunteerController::class, 'delete'])->name('volunteer.delete');