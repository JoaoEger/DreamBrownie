<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CompraFinalizadaController;
use App\Http\Controllers\EsqueceuSenhaConntroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PadariaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\QuemSomosConntroller;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/cadastro', [CadastroController::class, 'cadastro']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/padarias', [PadariaController::class, 'padarias']);
Route::get('/produtos', [ProdutosController::class, 'produtos']);
Route::get('/pagamento', [PagamentoController::class, 'pagamento']);
Route::get('/compraFinalizada', [CompraFinalizadaController::class, 'compraFinalizada']);
Route::get('/esqueceuSenha', [EsqueceuSenhaConntroller::class, 'esqueceuSenha']);
Route::get('/quemsomos', [QuemSomosConntroller::class, 'quemSomos']);


//Painel de admin
Route::view("/admin/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", "App\Http\Controllers\admin\LoginController@auth")->name("login.auth");
Route::get("/admin/logout", "App\Http\Controllers\admin\LoginController@logout");
Route::get("/admin", [DashboardController::class, "index"])->middleware("validaLogin");

