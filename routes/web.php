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

Route::view('/', 'index')->name('homepage');
Route::get('/animals', [ClinicController::class, 'displayAnimals'])->name('animals.list');
Route::get('/owners', [ClinicController::class, 'displayOwners'])->name('owner.list');
Route::get('/owners', [ClinicController::class, 'displayOwners'])->name('owner.list');

Route::get('/search', [ClinicController::class, 'search'])->name('search');
Route::get('/animal/detail/{id}', [ClinicController::class, 'animalDetail'])->name('animal.detail');
Route::get('/owner/detail/{id}', [ClinicController::class, 'ownerDetail'])->name('owner.detail');
Route::get('/animal/update/{id}', [ClinicController::class, 'displayForm'])->name('animal.form');
Route::put('/animal/{id}', [ClinicController::class, 'update'])->name('animal.update');
// DELETE
Route::delete('/animal/delete/{id}', [ClinicController::class, 'delete'])->name('animal.delete');

// Route::get('/search', [ClinicController::class, 'searchAnimal'])->name('search');
// Route::get('/search', [ClinicController::class, 'searchOwner'])->name('search');
// Route::get('/search', [ClinicController::class, 'searchAnimal'])->name('search');
