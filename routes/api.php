<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/usuario', [UsuarioController::class, 'store']);

<<<<<<< HEAD
Route::get('/usuario/{id}/find', [UsuarioController::class, 'findById']);

Route::get('/usuario', [UsuarioController::class, 'index']); 
=======
Route::get('/usuario/{id}/find',[UsuarioController::class, 'findById']);

Route::get('/usuario ', [UsuarioController::class, 'index']);
>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392

Route::get('/usuario/search', [UsuarioController::class, 'searchByName']);

Route::get('/usuario/search/email', [UsuarioController::class, 'searchByEmail']);

<<<<<<< HEAD
Route::delete('/usuario/{id}/delete', [UsuarioController::class, 'delete']);
=======
Route::delete('/usuario/{id}/delete',[UsuarioController::class, 'delete']);
>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392

Route::put('/usuario', [UsuarioController::class, 'update']);