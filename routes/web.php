<?php

use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
   
    $recipientEmail = 'recipient@example.com';
    $subject = 'Your Email Subject';
    $message = 'This is the plain text content of your email.';

    // Use the mail facade to send a text email
    Mail::raw($message, function ($message) use ($recipientEmail, $subject) {
        $message->to($recipientEmail)
                ->subject($subject);
    });

    return 'Text email sent successfully!';

});
