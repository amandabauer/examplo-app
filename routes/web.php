<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Empresa\EmpresaController;


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
    return view('site.home');
});

// Route::get('/empresa', function () {
//     return view('empresa.listagem');
// });

Route::resource('empresa', EmpresaController::class);
Route::resource('vaga', VagaController::class);
Route::resource('candidato', CandidatoController::class);


Route::post('/empresa/store','EmpresaController@store')->name('inclusao_empresa');

// Route::get('/empresa/inclusao', function () {
//     return view('empresa.inclusao');
// });

// Route::get('/empresa/edicao', function () {
//     return view('empresa.edicao');
// });

// Route::get('/empresa/exclusao', function () {
//     return view('empresa.exclusao');
// });

Route::get('/vaga', function () {
    return view('vaga.listagem');
});

Route::get('/vaga/inclusao', function () {
    return view('vaga.inclusao');
});

Route::get('/vaga/edicao', function () {
    return view('vaga.edicao');
});

Route::get('/vaga/exclusao', function () {
    return view('vaga.exclusao');
});

Route::get('/candidato', function () {
    return view('candidato.listagem');
});

Route::get('/candidato/inclusao', function () {
    return view('candidato.inclusao');
});

Route::get('/candidato/edicao', function () {
    return view('candidato.edicao');
});

Route::get('/candidato/exclusao', function () {
    return view('candidato.exclusao');
});


