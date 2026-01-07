<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoboweltChatController;

/*
|--------------------------------------------------------------------------
| RoboWelt Pages (Standard: root-level URLs)
|--------------------------------------------------------------------------
*/

// Home
Route::view('/', 'robowelt.index')->name('home');

// Main pages
Route::view('/services', 'robowelt.services')->name('services');
Route::view('/services/plc-programming', 'robowelt.services.plc')->name('services.plc');
Route::view('/services/robot-programming', 'robowelt.services.robot')->name('services.robot');
Route::view('/services/robot-simulation', 'robowelt.services.simulation')->name('services.simulation');
Route::view('/services/systems-integration', 'robowelt.services.integration')->name('services.integration');

Route::view('/about-us', 'robowelt.about-us')->name('about');
Route::view('/contact', 'robowelt.contact')->name('contact');
Route::view('/careers', 'robowelt.careers')->name('careers');

// (Optional) Preview
Route::view('/preview', 'robowelt.robowelt')->name('preview');

/*
|--------------------------------------------------------------------------
| Forms / APIs
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/chat', [RoboweltChatController::class, 'ask'])
    ->middleware('throttle:30,1')
    ->name('chat');

/*
|--------------------------------------------------------------------------
| Backward compatibility (optional but recommended)
|--------------------------------------------------------------------------
| If you already shared /robowelt/* URLs anywhere, keep these redirects
| so nothing breaks when you go live.
*/
Route::prefix('robowelt')->group(function () {
    Route::redirect('/', '/', 301);
    Route::redirect('/services', '/services', 301);
    Route::redirect('/services/plc-programming', '/services/plc-programming', 301);
    Route::redirect('/services/robot-programming', '/services/robot-programming', 301);
    Route::redirect('/services/robot-simulation', '/services/robot-simulation', 301);
    Route::redirect('/services/systems-integration', '/services/systems-integration', 301);

    Route::redirect('/about-us', '/about-us', 301);
    Route::redirect('/contact', '/contact', 301);
    Route::redirect('/careers', '/careers', 301);

    Route::redirect('/preview', '/preview', 301);
});
