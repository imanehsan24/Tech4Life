<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CourtController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\VenueController as FrontendVenueController;
use App\Http\Controllers\Frontend\CourtController as FrontendCourtController;

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

Route::get('/venue', [FrontendVenueController::class, 'index'])->name('venue.index');
Route::get('/venue/{venue}', [FrontendVenueController::class, 'show'])->name('venue.show');
Route::get('/courts', [FrontendCourtController::class, 'index'])->name('court.index');
Route::get('/booking', [FrontendBookingController::class, 'step1'])->name('booking.step1');

Route::get('/aboutus',function() {
    return view('aboutus');
});

Route::get('/contactus',function() {
    return view('contactus');
});

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
    Route::resource('/venue', VenueController::class);
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
