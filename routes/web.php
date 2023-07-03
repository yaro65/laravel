<?php
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExempleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [UserController::class, 'index'])->name('liste');
Route::get('/register', [UserController::class, 'register'])->name('yaro');
Route::post('/register', [UserController::class, 'handleRegistration'])->name('yaro');
// permet de recuperer le id 
Route::delete('/users/{user}delete', [UserController::class, 'delete']); 






