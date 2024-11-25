<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('index');
});


Route::get('/index', [IndexController::class, 'index'])->name('index');


Route::post('/contact', [IndexController::class, 'submit'])->name('contact.submit');

Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email sent using Mailtrap.', function ($message) {
            $message->to('recipient@example.com')  // Replace with your test recipient email
                ->subject('Test Email from Laravel');
        });
        return 'Test email sent successfully!';
    } catch (\Exception $e) {
        return 'Error sending email: ' . $e->getMessage();
    }
});

Route::post('/send-contact-mail', [IndexController::class, 'sendMail'])->name('contact.send');

