<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/project', function () {
    return view('project');
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/baru', function () {
    return view('baru');
});

Route::get('/halo/{nama?}', function ($nama = 'Anonim') {
    return '<h1>Halo '. $nama .'</h1>';
});

Route::resource('posts',
'App\Http\Controllers\PostController');

Auth::routes();

Auth::routes([
    'reset' => false,
   ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');



Route::get('/send-email',function(){
 $data = [
 'name' => 'Adiyatma Hilmy',
 'body' => 'Testing Kirim Email'
 ];

 Mail::to('adiyatmahilmy2812@gmail.com')->send(new SendEmail($data));

 dd("Email Berhasil dikirim.");
});

Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');