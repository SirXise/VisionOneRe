<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})-> name('service');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/post-message', [ContactFormController::class, 'postMessage'])->name('post-message');

Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email', function($message) {
            $message->to('testtester123234@gmail.com')  // Replace with your email
                    ->subject('Test Email');
        });

        return 'Test email sent!';
    } catch (\Exception $e) {
        Log::error('Test email sending error: ' . $e->getMessage());
        return 'Failed to send test email.';
    }
});

