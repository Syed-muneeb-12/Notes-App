<?php

use App\Http\Controllers\NoteController;
use App\Models\Note;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::get('/notes',[NoteController::class,'index'])->name('notes.index');
    Route::get('/create',[NoteController::class,'create'])->name('notes.create');
    Route::post('/store',[NoteController::class,'store'])->name('notes.store');
     Route::get('/notes/{$note}/edit',[NoteController::class,'edit'])->name('notes.edit');
});
require __DIR__.'/settings.php';
