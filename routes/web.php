<?php

use App\Http\Controllers\ProfileController,
    App\Http\Controllers\AdminController,
    App\Http\Controllers\ClientesController,
    App\Http\Controllers\RfidController,
    App\Http\Controllers\EthernetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::prefix('etapas')->group(function () {
    Route::get('/etapa1', function () {
        return view('etapas/etapa1');
    })->name('etapa1');
    Route::get('/etapa2', function () {
        return view('etapas/etapa2');
    })->name('etapa2');
});

Route::get('/dashboard', 
    [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Rotas para os Clientes
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
    Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{clientes}', [ClientesController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/{clientes}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{clientes}/update', [ClientesController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{clientes}/destroy', [ClientesController::class, 'destroy'])->name('clientes.destroy');

    // Rotas para os RFIDs
    Route::get('/rfid', [RfidController::class, 'index'])->name('rfid');  
    Route::get('/rfid/create', [RfidController::class, 'create'])->name('rfid.create'); 
    Route::post('/rfid/store', [RfidController::class, 'store'])->name('rfid.store'); 
    Route::get('/rfid/{rfid}/edit', [RfidController::class, 'edit'])->name('rfid.edit');
    Route::put('/rfid/{rfid}/update', [RfidController::class, 'update'])->name('rfid.update'); 
    Route::delete('/rfid/{rfid}/destroy', [RfidController::class, 'destroy'])->name('rfid.destroy'); 

    Route::get('/ethernetshield/{id}/{rfid_status}', [EthernetController::class, 'updateEstado']);
});

Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::get('/ethernetshield/requestrfid', [EthernetController::class, 'requestRFID']);
});

Route::resource("clientes", ClientesController::class);
Route::resource("rfid", RfidController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
