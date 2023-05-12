<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

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
//             ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
//   return view('qrCode');

// });

Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
