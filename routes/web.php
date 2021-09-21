<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermissionController;
use App\Models\Client;
use App\Models\Comprobante;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/roles', function () {
    return view('roles.index');
})->name('roles');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/usuarios/permisos', [PermissionController::class, 'index'])->name('usuarios.permisos');
    Route::get('/clientes', [ClientController::class, 'index'])->name('cliente.add');
});


Route::get('pruebaEmail', [ClientController::class, 'pruebaEmail']);

Route::get('importar', [ClientController::class, 'view_excel']);
Route::post('importar', [ClientController::class, 'import_excel'])->name('migrate.excel.import');



Route::get('importa222', function(){
    dd( Client::all() );
});

/*
Route::get('test2',function(){
    dd( auth()->user()->can('permission-slug') );
})->middleware('permission:permission-slug');

Route::get('test',function(){
    dd( auth()->user()->roles );
    dd( auth()->user()->can('permission-slug') );
});
*/
