<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CompraFinalizadaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PadariaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Can;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [CadastroController::class, 'cadastro'] );
Route::get('/login' , [LoginController::class, 'login']);
Route::get('/home' , [HomeController::class, 'home']);
Route::get('/padarias' , [PadariaController::class, 'padarias']);
Route::get('/produtos' , [ProdutosController::class, 'produtos']);
Route::get('/pagamento' , [PagamentoController::class, 'pagamento']);
Route::get('/compraFinalizada' , [CompraFinalizadaController::class, 'compraFinalizada']);

