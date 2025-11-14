<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VeiculoController;


Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/veiculo/{id}', [PublicController::class, 'show'])->name('public.veiculo.show');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/perfil', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');

Route::post('/perfil', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){

    Route::get('/', [VeiculoController::class, 'index'])->name('veiculos.index');

    Route::get('/veiculos/create', [VeiculoController::class, 'create'])->name('veiculos.create');

    Route::post('/veiculos', [VeiculoController::class, 'store'])->name('veiculos.store');

    Route::get('/veiculos/{id}/edit', [VeiculoController::class, 'edit'])->name('veiculos.edit');

    Route::put('/veiculos/{id}', [VeiculoController::class, 'update'])->name('veiculos.update');

    Route::delete('/veiculos/{id}', [VeiculoController::class, 'destroy'])->name('veiculos.destroy');

});
