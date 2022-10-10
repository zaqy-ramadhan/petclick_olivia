<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\serviceController;

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

Route::get('/adm', function () {
    return view('admin.admin');
});

Route::get('/adm-app', function () {
    return view('admin.appointment');
});

Route::get('/adm-pet', function () {
    return view('admin.pet');
});

Route::get('/adm-petedit', function () {
    return view('admin.petedit');
});

Route::get('/adm-petcreate', function () {
    return view('admin.petcreate');
});

Route::get('/adm-services', function () {
    return view('admin.services');
});

Route::get('/adm-servicesedit', function () {
    return view('admin.servicesedit');
});

Route::get('/adm-servicescreate', function () {
    return view('admin.servicescreate');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/create1', [AppointmentController::class, "store"]);
Route::get('/adm-app', [appointmentController::class, "index"]);

Route::get('/home', [petController::class, "index"]);
Route::get('/', [petController::class, "index"]);
Route::get('/consultation', [petController::class, "consultation"]);
Route::get('/grooming', [petController::class, "grooming"]);
Route::get('/vaccine', [petController::class, "vaccine"]);
Route::get('/surgery', [petController::class, "surgery"]);
Route::get('/adm-pet', [petController::class, "adm_pet"]);
Route::get('/adm-petedit', [petController::class, "petedit"]);
Route::resource('pets', petController::class);
Route::get('/petedit_test/{id}', [petController::class, "peteditf"]);
Route::put('/petedit_test/{id}', [petController::class, "update"]);
Route::post('/petedit_create', [petController::class, "store"]);

Route::resource('services', serviceController::class);
Route::get('/adm-services', [serviceController::class, "index"]);
Route::get('/servicesedit/{id}', [serviceController::class, "edit"]);
Route::put('/servicesedit/{id}', [serviceController::class, "update"]);
Route::post('/services_create', [serviceController::class, "store"]);
