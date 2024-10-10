<?php

use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\RoleController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login') ;
});

Route::get('/home', function () {
    return redirect('/dashboard') ;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);

});

require __DIR__.'/auth.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/to_mail', [App\Http\Controllers\MailController::class, 'index'])->name('to_mail');
Route::get('/ho_mail', [App\Http\Controllers\MailController::class, 'homail'])->name('ho_mail');
Route::get('/track_mail', [App\Http\Controllers\MailController::class, 'trackmail'])->name('track_mail');
Route::get('/register_mail', [App\Http\Controllers\MailController::class, 'registermail'])->name('register_mail');