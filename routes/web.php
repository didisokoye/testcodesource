<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UeController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('ues', [UeController::class, 'store']); //creation de la route de ues