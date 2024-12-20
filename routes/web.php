<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return redirect()->route('home');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/ourDoctors', [HomeController::class, 'ourDoctors'])->name('ourDoctors');
Route::get('/blog-single', [HomeController::class, 'blogsingle'])->name('blog-single');
Route::get('/brouchers', [HomeController::class, 'brouchers'])->name('brouchers');
Route::get('/newsroom', [HomeController::class, 'newsroom'])->name('newsroom');
Route::get('/scientificPublications', [HomeController::class, 'scientificPublications'])->name('scientificPublications');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/lifeAtTRUSTlab', [HomeController::class, 'lifeAtTRUSTlab'])->name('lifeAtTRUSTlab');
Route::get('/currentOpportunities', [HomeController::class, 'currentOpportunities'])->name('currentOpportunities');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/biochemistry', [HomeController::class, 'biochemistry'])->name('biochemistry');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/diagnosticsolutions', [HomeController::class, 'diagnosticsolutions'])->name('diagnosticsolutions');
Route::get('/leadershipteam', [HomeController::class, 'leadershipteam'])->name('leadershipteam');
Route::get('/boardOfAdvisors', [HomeController::class, 'boardOfAdvisors'])->name('boardOfAdvisors');
Route::get('/boardOfDirectors', [HomeController::class, 'boardOfDirectors'])->name('boardOfDirectors');


// Route::get('/payment', [HomeController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment', [HomeController::class, 'initiatePayment'])->name('payment.initiate');
Route::post('/payment/success', [HomeController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/payment/failure', [HomeController::class, 'paymentFailure'])->name('payment.failure');

