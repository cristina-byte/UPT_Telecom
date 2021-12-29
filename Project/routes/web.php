<?php

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



//Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');

//aratam pe toate aici
Route::get('/', [App\Http\Controllers\MainController::class, 'getDashboard'])->name('dashboard');




Route::get('/clienti', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/angajati', [App\Http\Controllers\AngajatController::class, 'index'])->name('angajat');
//Route::get('/departamente', [App\Http\Controllers\DepartamentController::class, 'index'])->name('departament');
Route::get('/facturi', [App\Http\Controllers\FacturaController::class, 'index'])->name('factura');
Route::get('/servicii', [App\Http\Controllers\ServiciuController::class, 'index'])->name('serviciu');
Route::get('/tichete', [App\Http\Controllers\TichetController::class, 'index'])->name('tichet');

//clienti
Route::get('/add_client', [App\Http\Controllers\ClientController::class, 'create'])->name('add_client');
Route::post('/cauta_client', [App\Http\Controllers\ClientController::class, 'search'])->name('cauta_client');
Route::post('/store_client', [App\Http\Controllers\ClientController::class, 'store'])->name('store.client');
Route::post('/client/{id}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::get('/client/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::get('/delete_client/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('delete.client');
Route::get('/neplatit_client', [App\Http\Controllers\ClientController::class, 'neplatit'])->name('neplatit_client');

//angajat
Route::get('/add_angajat', [App\Http\Controllers\AngajatController::class, 'create'])->name('add_angajat');
Route::post('/cauta_angajat', [App\Http\Controllers\AngajatController::class, 'search'])->name('cauta_angajat');
Route::post('/store_angajat', [App\Http\Controllers\AngajatController::class, 'store'])->name('store.angajat');
Route::get('/angajat/{id}/edit', [App\Http\Controllers\AngajatController::class, 'edit'])->name('edit_angajat');
Route::post('/angajat{id}/update', [App\Http\Controllers\AngajatController::class, 'update'])->name('update.angajat');
Route::get('/delete_angajat/{id}', [App\Http\Controllers\AngajatController::class, 'destroy'])->name('delete.angajat');
Route::get('/tichete_active', [App\Http\Controllers\AngajatController::class, 'tichete_active'])->name('tichete_active');


//tichete
Route::get('/add_tichet', [App\Http\Controllers\TichetController::class, 'create'])->name('add_tichet');
Route::post('/cauta_tichet', [App\Http\Controllers\TichetController::class, 'search'])->name('cauta_tichet');
Route::post('/store_tichete', [App\Http\Controllers\TichetController::class, 'store'])->name('store.tichete');
Route::get('/tichet/{id}/edit', [App\Http\Controllers\TichetController::class, 'edit'])->name('edit_tichete');
Route::post('/tichet/{id}/update', [App\Http\Controllers\TichetController::class, 'update'])->name('update_tichete');


Route::post('/filter_tichete', [App\Http\Controllers\TichetController::class, 'filter'])->name('filter_tichete');


//servicii
Route::get('/add_serviciu', [App\Http\Controllers\ServiciuController::class, 'create'])->name('add_serviciu');
Route::post('/store_serviciu', [App\Http\Controllers\ServiciuController::class, 'store'])->name('store.serviciu');
Route::get('/serviciu/{id}/edit', [App\Http\Controllers\ServiciuController::class, 'edit'])->name('edit_serviciu');
Route::post('/serviciu/{id}/update', [App\Http\Controllers\ServiciuController::class, 'update'])->name('update_serviciu');
Route::get('/delete_serviciu/{id}', [App\Http\Controllers\ServiciuController::class, 'destroy'])->name('delete_serviciu');

Route::get('/top_servicii', [App\Http\Controllers\ServiciuController::class, 'top'])->name('top_servicii');


//factura
Route::get('/add_factura', [App\Http\Controllers\FacturaController::class, 'create'])->name('add_factura');
Route::get('/cauta_factura/{status}', [App\Http\Controllers\FacturaController::class, 'cauta_factura'])->name('cauta_factura');
Route::post('/store_factura', [App\Http\Controllers\FacturaController::class, 'store'])->name('store.factura');
Route::get('/factura/{id}/edit', [App\Http\Controllers\FacturaController::class, 'edit'])->name('edit_factura');
Route::post('/factura/{id}/update', [App\Http\Controllers\FacturaController::class, 'update'])->name('update_factura');
Route::get('/factura/{status}/filter', [App\Http\Controllers\FacturaController::class, 'show'])->name('filter_factura');

Route::get('/createPDF/pdf', [App\Http\Controllers\FacturaController::class, 'createPDF'])->name('createPDF/pdf');
 

//departament
Route::get('/add_departament', [App\Http\Controllers\DepartamentController::class, 'create'])->name('departament');
Route::post('/store_departament', [App\Http\Controllers\DepartamentController::class, 'store'])->name('store.departament');
Route::get('/departament/{id}/edit', [App\Http\Controllers\DepartamentController::class, 'edit'])->name('edit_departament');
Route::post('/departament/{id}/update', [App\Http\Controllers\DepartamentController::class, 'update'])->name('update_departament');
Route::get('/delete_departament/{id}', [App\Http\Controllers\DepartamentController::class, 'destroy'])->name('delete.departament');
//Route::get('/departament/{id}',[App\Http\Controllers\DepartamentController::class,'show'])->name('departament.show');
