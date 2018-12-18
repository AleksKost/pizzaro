<?php


use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('pages/index');
})->name('home');

Route::get('/food', function () {
    return view('pages/shop-grid-3-column');
})->name('food');

Route::get('/send-mail', function () {
    $mail = new \App\mail\UserSubscribed();
    $mail ->subject = "Welcome";

    Mail::to('kostenko289@gmail.com')->send($mail);
})->name('food');

Route::post('/subscribe', function (\Illuminate\Http\Request $request) {
    $subscriber = new \App\Subscriber();
    $subscriber->email = $request->input('email');
    $subscriber->status = 1;
    $subscriber -> save();

    $mail = new \App\mail\UserSubscribed ($request->input('email'));
    \App\Jobs\SendEmail::dispatch($mail)->onQueue('emails');
    return redirect('thank-you');
})->name('subscribe');

Route::get('/thank-you', function (\Illuminate\Http\Request $request) {
    return view('pages/thank-you-for-subscription');
})->name('thank-you');
