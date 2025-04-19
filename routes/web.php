<?php
use App\http\Controllers\HelloWorldController;
use App\http\Controllers\HtmlController;
use App\http\Controllers\LatihanController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class,'index']);
// /ambilfile akan mereturn isi dari
Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);

Route::get('getlorem', [HtmlController::class, 'getLorem']);

Route::get('/tabel', [LatihanController::class, 'getTabel']);
Route::get('/form', [LatihanController::class, 'getForm']);
