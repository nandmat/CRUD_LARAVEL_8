<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;


Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos.index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos.create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos.store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos.edit');
    Route::put('/{id}', [JogosController::class, 'uptade'])->where('id', '[0-9]+')->name('jogos.update');
});

Route::fallback(function(){
    return "Erro ao localizar a página!";
});

// Route::get('/jogos/{nome?}', [JogosController::class, 'index']);
// Route::get('create', [JogosController::class, 'create'])->name('create');

// Route::get('/jogos', function(){
//     return view('jogos');
// });

// // Route::view('/jogos', 'jogos');

// // Route::get('/jogos', function(){
// //     return 'Testando a view com get';
// // });

// // Route::view('/jogos', 'jogos', ['name' => 'gta']);

// // Route::get('/jogos/{name?}', function($name = null){
// //     return view('jogos', ['nomeJogo' => $name]);
// // });

// Route::get('/', function () {
//     return view('welcome');
// })->name('home-index');
