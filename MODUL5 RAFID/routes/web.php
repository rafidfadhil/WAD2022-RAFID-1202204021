<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowroomController;
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

// ==================== User Route ====================
Route::get('/register', [UserController::class, 'index'])->name('register.get');
Route::post('/register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'login'])->name('login.get');
Route::post('login', [UserController::class, 'loginUser'])->name('login.post');
Route::get('logout', [UserController::class, 'logout'])->name('logout.get');
route::post('/logout', [UserController::class, 'logoutUser']);
route::put('/profile/{id}', [UserController::class, 'edit'])->name('updateProfile.put');
Route::get('/profile/{id}', [UserController::class, 'userDetail'])->name('userDetail');



// ==================== Showroom Route ====================
Route::post('addCar', [ShowroomController::class, 'addCar'])->name('addCar.post');
Route::get('/list', [ShowroomController::class, 'showCar'])->name('showCar');
Route::get('/detail/{id}', [ShowroomController::class, 'carDetail'])->name('carDetail');
Route::put('/detail/{id}', [ShowroomController::class, 'editCar'])->name('updateCar.put');
Route::delete('list/{id}', [ShowroomController::class, 'deleteCar']);


// ==================== View Route ====================
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/update', function () {
    return view('update');
});