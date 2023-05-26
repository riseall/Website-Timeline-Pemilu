<?php

use App\Http\Controllers\Contact;
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
});
Route::get('/pelanggaran_administrasi', 'App\Http\Controllers\PagesController@administrasi');
Route::get('/pelanggaran_etik', 'App\Http\Controllers\PagesController@etik');
Route::get('/pelanggaran_pidana', 'App\Http\Controllers\PagesController@pidana');
Route::get('/pelanggaran_peraturan', 'App\Http\Controllers\PagesController@peraturan');

Route::post('/send-email', [Contact::class,'sendEmail'])->name('send.email');