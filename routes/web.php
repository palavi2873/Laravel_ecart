<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductSearch;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-mail', function() {
    Mail::raw('Hello, this is a test email!', function($message) {
        $message->to('anyone@example.com')
                ->subject('Test Mailtrap Email');
    });

    return 'Email sent!';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('search',[ProductSearch::class,'searchProduct'])->name('search')->middleware('verify');

require __DIR__.'/auth.php';
