<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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
    return view('welcome');
});

Route::post('/welcome', function () {
    return 'view';
});

// Route::post('/Registration', [RegistrationController::class, 'add']);

// Route::post('/5ara', [RegistrationController::class, 'add']);
