<?php

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('/');


Route::view('/produkter/hygiejnisk-panelradiator', 'produkter.hygiejnisk-panelradiator')->name('hygiejnisk-panelradiator');


Route::get('mail', function(){
    return view('mail');
});

Route::post('mail', 'SendEmailController@sendMail');


