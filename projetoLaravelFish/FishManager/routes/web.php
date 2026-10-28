<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FishController;
use App\Models\Type;
use App\Models\Fish;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $totalTypes = Type::count();
        $totalFish = Fish::count();
        
        return view('dashboard', compact('totalTypes', 'totalFish'));
    })->name('dashboard');

  
    Route::resource('tanques-lotes', FishController::class)
        ->names('fishes')
        ->parameters(['tanques-lotes' => 'fish']);

   
    Route::resource('categorias-especies', TypeController::class)
        ->names('types')
        ->parameters(['categorias-especies' => 'type']);

   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';