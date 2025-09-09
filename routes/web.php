<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/membros', [MemberController::class, 'index'])->name('member.index');
Route::get('/novo-membro', [MemberController::class, 'create'])->name('member.create');
Route::post('/novo-membro', [MemberController::class, 'store'])->name('member.store');

