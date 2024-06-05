<?php

use App\Http\Controllers\AccidenteController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\AcceptHeaderItem;

Route::get('/', function () {
    return view('welcome');
});

Route::get('accidentes/listar',[AccidenteController::class,'index'])->name('accidente.index');
Route::get('accidentes/create',[AccidenteController::class,'create']);
Route::post('accidentes/store',[AccidenteController::class,'store'])->name('accidentes.store');
Route::get('accidentes/{accidente}',[AccidenteController::class,'show'])->name('accidente.show');
Route::put('accidente/{accidente}',[AccidenteController::class,'update'])->name('accidente.update');
Route::delete('accidente/{accidente}',[AccidenteController::class,'destroy'])->name('accidente.destroy');
Route::get('accidentes/{accidente}/editar',[AccidenteController::class,'edit'])->name('accidente.edit');
