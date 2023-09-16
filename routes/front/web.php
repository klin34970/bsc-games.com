<?php

use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\Form\AirdropController;
use App\Http\Controllers\Front\Form\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('index');
Route::get('faq', FaqController::class)->name('faq');

Route::get('airdrop/{uuid}', [ItemController::class, 'show'])->name('item');


/*
 * FORMS
 */
Route::group(['as' => 'form.',], function(){
    Route::resource('form/contact', ContactController::class, ['only' => ['create', 'store']]);
    Route::resource('form/airdrop', AirdropController::class, ['only' => ['create', 'store']]);
});
