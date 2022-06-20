<?php

use App\Http\Controllers\PessoaController;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::put('/pessoa/update/{id}', [PessoaController::class, 'Update'])->name('pessoa.update');

Route::get('/pessoa/edit/{id}', [PessoaController::class, 'Edit'])->name('pessoa.edit');

Route::delete('/pessoa/{id}', [PessoaController::class, 'Destroy'])->name('pessoa.destroy');

Route::post('/pessoa/create', [PessoaController::class, 'Store'])->name('pessoa.store');

Route::get('/pessoa/create', [PessoaController::class, 'Create'])->name('pessoa.create');

Route::get('/pessoa', [PessoaController::class, 'Index'])->name('Index');
Route::get('/', [PessoaController::class, 'Index'])->name('Main');

