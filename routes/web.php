<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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

Route::controller(MinistryController::class)->middleware('auth')->group(function () {
    Route::get('/ministerios', 'index')->name('ministry.index');
    Route::get('/ministerios/criar', 'create')->name('ministry.create');
    // store
    Route::get('/ministerios/editar/{id}', 'edit')->name('ministry.edit');
    Route::put('/ministerios/editar/{id}', 'update')->name('ministry.update');

    Route::get('/ministerios/inscrever/{id}', 'subscribe')->name('ministry.subscribe');
});

Route::get('/dashboard/gender', [DashboardController::class, 'getGenderDistribution'])->name('dashboard.gender');