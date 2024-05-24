<?php

use App\Http\Controllers\admin\AdmPadariaController;
use App\Http\Controllers\admin\AdmProdutosController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\ProdutosTesteAdmController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
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

Route::get('/', [ProdutosController::class, 'index']);
Route::get('/cadastro', [CadastroController::class, 'cadastro']);
  
  Route::get('/cadastro', [CadastroController::class, 'cadastro']);
  
  Route::get('/produtos', [ProdutosController::class, 'produtos']);




//Painel de admin
Route::view("/admin/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", [AdminLoginController::class, "auth"])->name("login.auth");

//middleware-group
Route::middleware("validaLogin")->group(function () {
  Route::middleware("checkUserPermission")->group(function(){
    
    Route::get("/admin", [DashboardController::class, "index"]);
    Route::resource("/admin/produtos", ProdutosTesteAdmController::class);
    
    Route::get("/admin/logout", [AdminLoginController::class, "logout"]);
  });
});

Route::get('/carrinho', [ProdutosController::class, "index"]);
Route::post('/cart/add', [CarrinhoController::class,"add"])->name("cart.add");
Route::post('/cart/remove', [CarrinhoController::class,"remove"])->name("cart.remove");
Route::get('/cart', [CarrinhoController::class, "index"])->name("cart");
Route::get('/compraFinalizada', [CarrinhoController::class,"checkout"])->name('cart.checkout');

