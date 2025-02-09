<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ManutencaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['role:admin']], function () { 
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');  

    Route::get('/forms', function () {
        return view('admin.forms');
    })->name('admin.forms'); 
    Route::get('/tables', function () {
        return view('admin.tables');
    })->name('admin.tables'); 
    Route::get('/ui-elements', function () {
        return view('admin.ui-elements');
    })->name('admin.ui-elements');
    Route::get('/veiculos', function () {
        return view('veiculos.index');
    })->name('veiculos.index');
    Route::get('/vendas', function () {
        return view('vendas.index');
    })->name('vendas.index');
    Route::get('/manutencao', function () {
        return view('manutencao.index');
    })->name('manutencao.index');

    Route::resource('veiculos', VeiculoController::class);
    Route::resource('vendas', VendaController::class);
    Route::resource('manutencao', ManutencaoController::class);

 
 });

 Route::group(['middleware' => ['permission:publish articles']], function () {

 });

 // Group routes that need admin role and authentication
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

require __DIR__.'/auth.php';

