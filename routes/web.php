<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppointmentController::class, 'create']);
Route::resource('appointments', AppointmentController::class)->only(['create', 'store']);