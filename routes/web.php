<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-conctacts', [ContactController::class, 'allContacts'])->name('allContacts'); 
Route::get('/insert-data', [ContactController::class, 'insertData']); // if use url then no need of use name 
Route::post('/data-add', [ContactController::class, 'addData']);
Route::get('/delete-contact/{id}', [ContactController::class, 'deleteContact']);
Route::get('/edit-contact/{id}', [ContactController::class, 'editContact']);
Route::post('/update-contact/{id}', [ContactController::class, 'updateContact']);