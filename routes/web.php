<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AppointmentKonselingController;
use App\Http\Controllers\AppointmentKonsultasiController;

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
    return view('auth.login');
});

Route::middleware(['splade'])->group(function () {
    // Route::get('/', fn () => view('home'))->name('home');
    Route::get('/docs', fn () => view('docs'))->name('docs');

    Route::resource('/bimbingan', BimbinganController::class);

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'process'])->name('process');
    Route::resource('/register', RegisterController::class);
});

Route::middleware('auth')->group(function(){
    Route::get('konseli/dashboard', [AppController::class, 'konseli']);
    Route::get('konselor/dashboard', [AppController::class, 'konselor']);
    Route::get('admin/dashboard', [AppController::class, '']);

});

Route::get('/logout', [AuthController::class ,'logout']);

Route::get('profile/profile', [UserController::class, 'profile']);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('peminjaman/index', [PeminjamanController::class, 'index']);

Route::resource('posts', PostController::class);
// Route::get('send-notif/{name}', function ($name) {
//     event(new AppEventsSendGlobalNotification($name));
//     return "Event has been sent!";
// });

Route::get('konseling/appointment_konselings/create', [AppointmentKonselingController::class, 'create'])->name('appointment_konselings.create');
Route::post('konseling/appointment_konselings', [AppointmentKonselingController::class, 'store'])->name('appointment_konselings.store');
Route::get('konseling/appointment_konselings', [AppointmentKonselingController::class, 'index'])->name('appointment_konselings.index');

Route::get('konsultasi/appointment_konsultasis/create', [AppointmentKonsultasiController::class, 'create'])->name('appointment_konsultasis.create');
Route::post('konsultasi/appointment_konsultasis', [AppointmentKonsultasiController::class, 'store'])->name('appointment_konsultasis.store');
Route::get('konsultasi/appointment_konsultasis', [AppointmentKonsultasiController::class, 'index'])->name('appointment_konsultasis.index');

Route::get('activity_logs', [ActivityLogController::class, 'index']);

Route::get('profile/', [ProfileController::class,'show']);

