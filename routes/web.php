<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\PetController;
use App\Models\pet;
use App\Models\Appointment;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/consultation', function () {
    return view('services.consultation');
});

Route::get('/grooming', function () {
    return view('services.grooming');
});

Route::get('/vaccine', function () {
    return view('services.vaccine');
});

Route::get('/surgery', function () {
    return view('services.surgery');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/log', function () {
    return view('log');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/scroll', function () {
    return view('scrollnav');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/homee', [App\Http\Controllers\AppointmentController::class, "store"]);
// Route::get('/create1', [AppointmentController::class, "store"]);

Route::post('/create1', [AppointmentController::class, "store"]);
Route::match(['get', 'post'], '/', [AppointmentController::class, "store"]);
Route::match(['get', 'post'], '/home', [AppointmentController::class, "store"]);
Route::get('/home', [petController::class, "index"]);
Route::get('/', [petController::class, "index"]);
Route::get('/consultation', [petController::class, "consultation"]);
Route::get('/grooming', [petController::class, "grooming"]);
Route::get('/vaccine', [petController::class, "vaccine"]);
Route::get('/surgery', [petController::class, "surgery"]);
