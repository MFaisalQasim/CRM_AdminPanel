<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\ItemController;
use App\Http\Livewire\NotificationDemo;
use App\Http\Livewire\NotificationSweetAlert;

// Laravel Telescope

// http://localhost:8000/telescope/requests


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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    // helper
    Route::get('helper', function(){
        $imageName = 'example.png';
        $fullpath = productImagePath($imageName);
      
        dd($fullpath);
    });
      
    Route::get('helper2', function(){
        $newDateFormat = changeDateFormate(date('Y-m-d'),'m/d/Y');

        dd($newDateFormat);
    });

    // qrcode
    Route::get('/qrcode', [QrCodeController::class, 'index']);

    // RoleController
    Route::resource('roles', RoleController::class);
    // UserController
    Route::resource('users', UserController::class);
    // ProductController
    Route::resource('products', ProductController::class);

    // ItemController
    // Multi Step Form
    Route::get('items', [ItemController::class,'index'])->name('items.index');

    Route::get('items/create-step-one', [ItemController::class,'createStepOne'])->name('items.create.step.one');
    Route::post('items/create-step-one', [ItemController::class,'postCreateStepOne'])->name('items.create.step.one.post');
    
    Route::get('items/create-step-two', [ItemController::class,'createStepTwo'])->name('items.create.step.two');
    Route::post('items/create-step-two', [ItemController::class,'postCreateStepTwo'])->name('items.create.step.two.post');
    
    Route::get('items/create-step-three', [ItemController::class,'createStepThree'])->name('items.create.step.three');
    Route::post('items/create-step-three', [ItemController::class,'postCreateStepThree'])->name('items.create.step.three.post');
      
    // Fullcalender
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
    
    // Notifications
    // Toasts
    Route::get('notification', NotificationDemo::class);
    // Alert    
    Route::get('notification-sweetalert', NotificationSweetAlert::class);    
    
});