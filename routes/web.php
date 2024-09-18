<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\SendmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/servicos', [NavigationController::class, 'servicos'])->name('servicos');
Route::get('/galeria', [NavigationController::class, 'galeria'])->name('galeria');
Route::get('/contato', [NavigationController::class, 'contato'])->name('contato');


Route::post('/',[SendmailController::class, 'lead'])->name('lead');
Route::post('/contato',[SendmailController::class, 'contato'])->name('novocontato');
