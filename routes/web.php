<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::group([
    'prefix' => '/plant',
    'as' => 'plant.',
], function () {
    Route::get('/', [PlantController::class, 'index'])->name('index');
    Route::get('/{id}', [PlantController::class, 'show'])->name('show');
});
Route::redirect('/', '/plant', 301);
