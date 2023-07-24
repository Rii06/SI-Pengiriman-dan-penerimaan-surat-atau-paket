<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DatdivController;
use App\Http\Controllers\DatpegController;
use App\Http\Controllers\DatpengController;
use App\Http\Controllers\RekdatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'showLoginForm'])->middleware('guest');
Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest');
Route::get('/register', [AuthController::class, 'showRegForm'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/home', function () {
    return view('home', [
        "active" => " home"
    ]);
})->name('home')->middleware('auth');

Route::get('/showdatpeg', [DatpegController::class, 'index'])->name('show-idatpeg')->middleware('auth');
Route::get('/showdatpengirim', [DatpengController::class, 'index'])->name('show-idatpengirim')->middleware('auth');
Route::get('/showrekdat', [RekdatController::class, 'index'])->name('show-irekdat')->middleware('auth');
Route::get('/showdatdiv', [DatdivController::class, 'index'])->name('show-idatdiv')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::group(['middleware' => ['admin']], function () {

    Route::get('/irekdat', [RekdatController::class, 'show'])->name('irekdat');
    Route::post('/irekdat', [RekdatController::class, 'create'])->name('create-irekdat');

    Route::get('/idatpengirim', [DatpengController::class, 'show'])->name('idatpengirim');
    Route::post('/idatpengirim', [DatpengController::class, 'create'])->name('create-idatpengirim');

    Route::get('/idatpeg', [DatpegController::class, 'show'])->name('idatpeg');
    Route::post('/idatpeg', [DatpegController::class, 'create'])->name('create-idatpeg');

    Route::get('/idatdiv', [DatdivController::class, 'show'])->name('idatdiv');
    Route::post('/idatdiv', [DatdivController::class, 'create'])->name('create-idatdiv');

    Route::get('/adduser', [AuthController::class, 'show'])->name('adduser');
    Route::post('/adduser', [AuthController::class, 'create'])->name('create-user');
    Route::get('/showuser', [AuthController::class, 'index'])->name('show-user');


    Route::get('/pdf/{table}/{view}', [CetakController::class, 'cetakToPdf'])->name('pdf');
    Route::get('/cetak/{table}/{view}', [CetakController::class, 'cetakLangsung'])->name('cetak');
});

Route::group(['middleware' => ['operator']], function () {
});
