<?php

use App\Http\Controllers\alatBahanController;
use App\Http\Controllers\dataUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
// });
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified', 'role:admin']);
// dataUser
Route::resource('/dataUser', dataUserController::class)->middleware('permission:entri_user');
// alatBahan
Route::get('/alatBahan', [alatBahanController::class, 'index'])->name('alatBahan')->middleware('auth', 'verified', 'role:admin');
Route::get('/createSepatu', [alatBahanController::class, 'create'])->name('create.alatBahan')->middleware('auth', 'verified', 'permission:edit_alat_bahan'); 
Route::post('/storeSepatu', [alatBahanController::class, 'store'])->name('store.alatBahan')->middleware('auth', 'verified', 'permission:edit_alat_bahan'); 

Route::get('/editSepatu/{id}', [alatBahanController::class, 'edit'])->name('edit.alatBahan')->middleware('auth', 'verified', 'permission:edit_alat_bahan'); 
Route::put('/updateSepatu/{id}', [alatBahanController::class, 'update'])->name('update.alatBahan')->middleware('auth', 'verified', 'permission:edit_alat_bahan'); 
Route::delete('/deleteSepatu/{id}', [alatBahanController::class, 'delete'])->name('delete.alatBahan')->middleware('auth', 'verified', 'permission:edit_alat_bahan'); 

