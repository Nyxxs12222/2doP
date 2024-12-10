<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlForm;

Route::get('/', [controlForm::class, 'create'])->name('getForm');
Route::post('/enviarForm', [controlForm::class, 'store'])->name('postForm');

