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

Route::get('/', function () {return view('welcome');});

 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[App\Http\Controllers\HomeController::class,'index'])->name('dashboard');
Route::get('/clienti', [App\Http\Controllers\ADMIN\ClientController::class, 'index'])->name('clienti');
Route::get('/angajati', [App\Http\Controllers\ADMIN\AngajatiController::class, 'index'])->name('angajati');
Route::get('/departamente', [App\Http\Controllers\ADMIN\DepartamenteController::class, 'index'])->name('departamente');
Route::get('/facturi', [App\Http\Controllers\ADMIN\FacturiController::class, 'index'])->name('facturi');
Route::get('/servicii', [App\Http\Controllers\ADMIN\ServiciiController::class, 'index'])->name('servicii');
Route::get('/tickete', [App\Http\Controllers\ADMIN\TicketeController::class, 'index'])->name('tickete');
 

//clienti  -??
Route::get('/clienti/{id}/new',[App\Http\Controllers\ADMIN\ClientiController::class,'create'])->name('clienti_create');
Route::post('/clienti{id}/store',[App\Http\Controllers\ADMIN\ClientiController::class,'store'])->name('clienti.send');
Route::get('/clienti/{id}',[App\Http\Controllers\ADMIN\ClientiController::class,'show'])->name('clienti.show');
Route::post('/clienti/{id}/update',[App\Http\Controllers\ADMIN\ClientiPageController::class,'update'])->name('clienti.update');
Route::get('/clienti/{id}/edit',[App\Http\Controllers\ADMIN\ClientiPageController::class,'edit'])->name('clienti.edit');


Route::get('/delete_clienti/{id}',[App\Http\Controllers\ADMIN\ClientiController::class,'destroy'])->name('delete_clienti');


//angajat
Route::get('/add_angajati',[App\Http\Controllers\ADMIN\AngajatiController::class,'create'])->name('add_angajati');
Route::post('/store_angajati',[App\Http\Controllers\ADMIN\AngajatController::class,'store'])->name('store.angajati');
Route::get('/edit_angajati/{id}',[App\Http\Controllers\ADMIN\AngajatController::class,'edit'])->name('edit_angajati');
Route::post('/update_angajati',[App\Http\Controllers\ADMIN\AngajatiPageController::class,'update'])->name('update.angajati');
Route::get('/delete_angajat/{id}',[App\Http\Controllers\ADMIN\AngajatController::class,'destroy'])->name('delete_angajati');


//tickete
Route::get('/add_tickets',[App\Http\Controllers\ADMIN\TicketeController::class,'create'])->name('tickete');
Route::post('/store_tickete',[App\Http\Controllers\ADMIN\TicketeController::class,'store'])->name('store.tickete');
Route::get('/edit_tickete/{id}',[App\Http\Controllers\ADMIN\TicketeController::class,'edit'])->name('edit_tickete');
Route::post('/update/{id}',[App\Http\Controllers\ADMIN\TicketeController::class,'update'])->name('update_tickete');
Route::get('/delete_tickete/{id}',[App\Http\Controllers\ADMIN\TicketetController::class,'destroy'])->name('delete_tickete');


//servicii
Route::get('/add_serviciu',[App\Http\Controllers\ADMIN\ServiciuController::class,'create'])->name('serviciu');
Route::post('/store_serviciu',[App\Http\Controllers\ADMIN\ServiciuController::class,'store'])->name('store.serviciu');
Route::get('/edit_serviciu/{id}',[App\Http\Controllers\ADMIN\ServiciuController::class,'edit'])->name('edit_serviciu');
Route::post('/update/{id}',[App\Http\Controllers\ADMIN\ServiciuController::class,'update'])->name('update_serviciu');
Route::get('/delete_serviciu/{id}',[App\Http\Controllers\ADMIN\ServiciuController::class,'destroy'])->name('delete_serviciu');


 
//Messages
Route::get('messages',[App\Http\Controllers\ADMIN\EmailController::class,'index'])->name('messages');
Route::get('/open/{id}',[App\Http\Controllers\ADMIN\EmailController::class,'show'])->name('open_message');
Route::get('/delete/{id}',[App\Http\Controllers\ADMIN\EmailController::class,'destroy'])->name('delete_message');
Route::delete('/delete_messages',[App\Http\Controllers\ADMIN\EmailController::class,'deleteSelected'])->name('delete_selected_messages');