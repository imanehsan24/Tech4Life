<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CourtController;
use App\Http\Controllers\Admin\SportController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Frontend\CourtController as FrontendCourtController;
use App\Http\Controllers\Frontend\SportController as FrontendSportController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\VenueController as FrontendVenueController;

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
});

Route::get('/aboutus',function() {
    return view('aboutus');
});

Route::get('/contactus',function() {
    return view('contactus');
});

Route::get('/court',[FrontendCourtController::class, 'index'])->name('court.index');
Route::get('/court/{court}',[FrontendCourtController::class, 'show'])->name('court.show');

Route::get('/sport', [FrontendSportController::class, 'index'])->name('sport.index');
Route::get('/sport/{sport}', [FrontendSportController::class, 'show'])->name('sport.show');

Route::get('/booking', [FrontendBookingController::class, 'stepOne'])->name('booking.step.one');
Route::post('/booking', [FrontendBookingController::class, 'storeStepOne'])->name('booking.store.step.one');
Route::get('/booking/{booking}', [FrontendBookingController::class, 'thankyou'])->name('booking.thankyou');
Route::get('/booking/{booking}', [FrontendBookingController::class, 'show'])->name('booking.show');
Route::get('/booking/{booking}', [FrontendBookingController::class, 'qrcode'])->name('booking.qrcode');
Route::get('/aboutus', [WelcomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [WelcomeController::class, 'contactus'])->name('contactus');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/sport', SportController::class);
    Route::resource('/booking',BookingController::class);
    Route::resource('/court',CourtController::class);
});

Route::middleware(['auth', 'member'])->name('member.')->prefix('member')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('index');
});

Route::get('/registermember', function () {
    return view('registermember');
})->middleware(['auth', 'verified'])->name('registermember');

require __DIR__.'/auth.php';
