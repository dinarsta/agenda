<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Agendatb;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AgendatbController;
use App\Http\Controllers\GuruviewController;
use App\Models\mapel;
use Illuminate\Support\Facades\Auth;

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
    $dataguru = Guru::count();
    $datakelas = Kelas::count();
    $dataagenda = Agendatb::count();
    $datamapel = mapel::count();
    return view('dashboard', compact('dataguru','datakelas','dataagenda', 'datamapel'));
})->middleware('auth');

// table Guru


Route::get('/guru', [GuruController::class, 'index'])->name('guru')->middleware('auth');

Route::get('/tambahguru', [GuruController::class, 'tambahguru'])->name('tambahguru');

Route::post('/insertdataguru', [GuruController::class, 'insertdataguru'])->name('insertdataguru');

Route::get('/tampilkandataguru/{id}', [GuruController::class, 'tampilkandataguru'])->name('tampilkandataguru');

Route::post('/updatedataguru/{id}', [GuruController::class, 'updatedataguru'])->name('updatedataguru');

Route::get('/deletedataguru/{id}', [GuruController::class, 'deletedataguru'])->name('deletedataguru');

// table Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas')->middleware('auth');
Route::get('/tambahkelas', [KelasController::class, 'tambahkelas'])->name('tambahkelas');

Route::post('/insertdatakelas', [KelasController::class, 'insertdatakelas'])->name('insertdatakelas');

Route::get('/tampilkandatakelas/{id}', [KelasController::class, 'tampilkandatakelas'])->name('tampilkandatakelas');

Route::post('/updatedatakelas/{id}', [KelasController::class, 'updatedatakelas'])->name('updatedatakelas');

Route::get('/deletedatakelas/{id}', [KelasController::class, 'deletedatakelas'])->name('deletedatakelas');

// table agenda
Route::get('/agendatbs', [AgendatbController::class, 'index'])->name('agendatbs')->middleware('auth');
Route::get('/tambahagenda', [AgendatbController::class, 'tambahagenda'])->name('tambahagenda');

Route::post('/insertdataagenda', [AgendatbController::class, 'insertdataagenda'])->name('insertdataagenda');

Route::get('/tampilkandataagenda/{id}', [AgendatbController::class, 'tampilkandataagenda'])->name('tampilkandataagenda');

Route::post('/updatedataagenda/{id}', [AgendatbController::class, 'updatedataagenda'])->name('updatedataagenda');

Route::get('/deletedataagenda/{id}', [AgendatbController::class, 'deletedataagenda'])->name('deletedataagenda');

// table mapel
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel');
Route::get('/tambahmapel', [MapelController::class, 'tambahmapel'])->name('tambahmapel');

Route::post('/insertdatamapel', [MapelController::class, 'insertdatamapel'])->name('insertdatamapel');

Route::get('/tampilkandatamapel/{id}', [MapelController::class, 'tampilkandatamapel'])->name('tampilkandatamapel');

Route::post('/updatedatamapel/{id}', [MapelController::class, 'updatedatamapel'])->name('updatedatamapel');

Route::get('/deletedatamapel/{id}', [MapelController::class, 'deletedatamapel'])->name('deletedatamapel');

// Guru View
Route::get('/guruview', [GuruviewController::class, 'guruview'])->name('guruview');

Route::get('/tambahguruview', [GuruviewController::class, 'tambahguruview'])->name('tambahguruview');

Route::post('/insertdataguruview', [GuruviewController::class, 'insertdataguruview'])->name('insertdataguruview');

Route::get('/tampilkandataguruview/{id}', [GuruviewController::class, 'tampilkandataguruview'])->name('tampilkandataguruview');

Route::post('/updatedataguruview/{id}', [GuruviewController::class, 'updatedataguruview'])->name('updatedataguruview');

Route::delete('/deletedataguruview/{id}', [GuruviewController::class, 'deletedataguruview'])->name('deletedataguruview');




//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/regester', [LoginController::class, 'regester'])->name('regester');
Route::post('/regesteruser', [LoginController::class, 'regesteruser'])->name('regesteruser');

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middlewere'=>['auth','hakakses:user']], function(){

Route::get('/guru', [GuruController::class, 'index'])->name('guru');

});

