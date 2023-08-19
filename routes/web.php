<?php

use App\Http\Controllers\UploadController;
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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard')->with(array('title'=>'Home',));
})->middleware(['auth'])->name('dashboard');

Route::match(array('GET','POST'),'search',[UploadController::class, 'search'])->name('search');

Route::get('views/{id}',[UploadController::class, 'publicView'])->name('views');

Route::get('/about_us',function(){
    return view('about_us');
})->name('about_us');

Route::get('/contact_us',function(){
    return view('contact_us');
})->name('contact_us');


require __DIR__.'/auth.php';
