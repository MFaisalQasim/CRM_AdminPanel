<?php

use Illuminate\Support\Facades\Route;
// use Auth;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
// Route::get('qr-code-g', function () {

//     \QrCode::size(500)
//             ->format('png')
//             ->generate('FaisalDev', public_path('images/qrcode.png'));
//   return view('qrCode');

// });

Route::get('/qrcode', [QrCodeController::class, 'index']);


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});


