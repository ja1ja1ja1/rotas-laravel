<?php
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobrenosController;

use Illuminate\Support\Facades\Route;

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


Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name('site.sobrenos');


Route::fallback(function(){
    echo "<h2>A rota acessada não existe <a href='" . route('site.principal') . "'>clique aqui</a> para voltar parra a página principal</h2>";
});