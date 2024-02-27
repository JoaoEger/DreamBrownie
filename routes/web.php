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

Route::post('/login/auth', [LoginController::class, 'authenticate'])->name('login.autenticacao');
Route::get('/login', [LoginController::class, 'login']);
Route::get('/', [HomeController::class, 'home'])->middleware("validaCadastro");
Route::get('/cadastro', [CadastroController::class, 'cadastro']);

Route::middleware("validaCadastro")->group(function (){
  
  Route::get('/home', [HomeController::class, 'home'])->name("home");
  Route::get('/cadastro', [CadastroController::class, 'cadastro']);
  Route::get('/home', [HomeController::class, 'home']);
  
  
  Route::get('/padarias', [PadariaController::class, 'padarias']);
  Route::get('/padarias/{id}/{permalink}', [PadariaController::class, 'padaria']);
  Route::get('/produtos', [ProdutosController::class, 'produtos']);
  Route::get('/pagamento', [PagamentoController::class, 'pagamento']);
  Route::get('/compraFinalizada', [CompraFinalizadaController::class, 'compraFinalizada']);
  Route::view('/quemsomos', "agoraweb/quemSomos");
});


//Painel de admin
Route::view("/admin/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", [AdminLoginController::class, "auth"])->name("login.auth");

//middleware-group
Route::middleware("validaLogin")->group(function () {
  Route::middleware("checkUserPermission")->group(function(){
  
    Route::get("/admin", [DashboardController::class, "index"]);
    Route::resource("/admin/produtos", ProdutosTesteAdmController::class);
    
    Route::get("/admin/padaria", [AdmPadariaController::class, "index"]);
    Route::get("/admin/logout", [AdminLoginController::class, "logout"]);
  });
});

