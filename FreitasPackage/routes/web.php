<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\MovimentoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('pacotes')->group(function () {
        Route::get('/', [PacoteController::class, 'index'])->name('pacotes.index');
        Route::get('create', [PacoteController::class, 'create'])->name('pacotes.create');
        Route::post('store', [PacoteController::class, 'store'])->name('pacotes.store');
        Route::get('{id}', [PacoteController::class, 'show'])->name('pacotes.show');
        Route::get('{id}/edit', [PacoteController::class, 'edit'])->name('pacotes.edit');
        Route::put('{id}', [PacoteController::class, 'update'])->name('pacotes.update');
        Route::delete('{id}', [PacoteController::class, 'destroy'])->name('pacotes.destroy');

        Route::get('{pacote_id}/movimentos', [MovimentoController::class, 'index'])->name('movimentos.index');
        Route::get('{pacote_id}/movimentos/create', [MovimentoController::class, 'create'])->name('movimentos.create');
        Route::post('{pacote_id}/movimentos', [MovimentoController::class, 'store'])->name('movimentos.store');
        Route::get('movimentos/{id}/edit', [MovimentoController::class, 'edit'])->name('movimentos.edit');
        Route::put('movimentos/{id}', [MovimentoController::class, 'update'])->name('movimentos.update');
        Route::delete('movimentos/{id}', [MovimentoController::class, 'destroy'])->name('movimentos.destroy');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
