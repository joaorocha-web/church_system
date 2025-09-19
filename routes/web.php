<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::view('/', 'guest');
Route::view('/home', 'home')->middleware('auth', 'verified')->name('home');

Route::get('/membros', [MemberController::class, 'index'])->name('member.index')->middleware('auth');
Route::get('/novo-membro', [MemberController::class, 'create'])->name('member.create')->can('create', App\Models\Member::class);
Route::post('/novo-membro', [MemberController::class, 'store'])->name('member.store');
Route::get('/editar-membro', [MemberController::class, 'edit'])->name('member.edit');

Route::get('/registrar-usuario', [UserController::class, 'create'])->name('user.create');
Route::post('/salvar-usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', [SessionController::class, 'create'])->name('login.create');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');