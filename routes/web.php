<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LibController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ListaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [LibController::class, 'home'])->name('home');
Route::get('/cadastroUsuario', [UsersController::class, 'create'])->name('cadastroUsuario');
Route::post('/cadastroUsuario', [UsersController::class, 'store'])->name('cadastroUsuario');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/cadastro-livro', [LivroController::class, 'create'])->name('cadastroLivro');
Route::post('/cadastro-livro', [LivroController::class, 'store'])->name('cadastroLivro');
Route::get('/livros', [ListaController::class, 'index'])->name('livros.lista');
Route::get('/livros/{livro}/editar', [LivroController::class, 'editar'])->name('livros.editar');
Route::put('/livros/{livro}', [LivroController::class, 'update'])->name('livros.update');
Route::get('/livros/{livro}/deletar', [LivroController::class, 'deletar'])->name('livros.deletar');
Route::delete('/livros/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');