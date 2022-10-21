<?php

use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');
Route::get('/animals', [ClinicController::class, 'displayAnimals'])->name('animals.list');
Route::get('/owners', [ClinicController::class, 'displayOwners'])->name('owner.list');
Route::get('/search', [ClinicController::class, 'searchOwner'])->name('search');
Route::get('/search', [ClinicController::class, 'searchAnimal'])->name('search');

