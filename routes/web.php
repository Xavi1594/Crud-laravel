<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/note', [NoteController::class, "index"])->name("note.index");
// Route::get('/note/{id}', [NoteController::class, 'index'])->name("note.index"); {
//     return view('note.index');
// };
