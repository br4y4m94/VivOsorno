<?php

use App\Http\Controllers\PagesController;
use App\Models\Propiedad;
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

Route::get('mi_Perfil', function () {
    return view('mi_Perfil');
})->name('perfil');



/*
Route::get('/vistaPropiedad/{id}', function($id){
    return view('vistaPropiedad');
})->name('vistaPropiedad');
*/
Route::get('vistaPropiedad', [App\Http\Controllers\PagesController::class, 'mostrarPropiedad'])->name('vistaPropiedad');


Route::post('/propiedad',  [App\Http\Controllers\PropiedadController::class, 'store'])->name('propiedad.crear');
Route::get('/propiedad/create', [App\Http\Controllers\PropiedadController::class, 'create'])->name('formulario_Propiedad');
Route::get('/propiedad/Actualizar',  [App\Http\Controllers\PagesController::class, 'formActualizarUser'])->name('propiedad.actualizar');





Route::get('mi_Perfil', [App\Http\Controllers\PerfilController::class, 'mostrarPerfil'])->name('perfil');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/',  [App\Http\Controllers\WelcomeController::class, 'inicio'])->name('welcome');


//post


