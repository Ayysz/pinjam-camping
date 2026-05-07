<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGearController;

Route::group([
    'prefix' => '/camp-gear',
    'as' => 'camp_gear.',
], function () {
    Route::get('/', [CampGearController::class, 'index'])->name('index');
    Route::get('/{id}', [CampGearController::class, 'show'])->name('show');
});
Route::redirect('/', '/camp-gear', 301);
