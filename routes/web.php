<?php


use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('pages/index');
})->name('home');

Route::get('/food', function () {
    return view('pages/shop-grid-3-column');
})->name('food');

Route::get('/send-mail', function () {
    $mail = new \App\Mail\UserSubscribed();
    $mail ->subject = "Welcome";

    Mail::to('kostenko289@gmail.com')->send($mail);
})->name('food');


