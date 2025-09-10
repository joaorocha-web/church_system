<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/membros', [MemberController::class, 'index'])->name('member.index');
Route::get('/novo-membro', [MemberController::class, 'create'])->name('member.create');
Route::post('/novo-membro', [MemberController::class, 'store'])->name('member.store');
Route::get('/editar-membro', [MemberController::class, 'edit'])->name('member.edit');

Route::get('/registrar-usuario', [UserController::class, 'create'])->name('user.create');
Route::post('/salvar-usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [SessionController::class, 'create'])->name('login.create');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');