<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FormController;

/*
 * PREFIX ROUTES
 */
Route::group(['as' => 'admin.',], function(){
    /*
     * SUBDOMAIN
     */
    Route::domain(env('APP_ADMIN_URL'))->group(function(){
        /*
         * GUEST
         */
        Route::get('login', [AuthenticatedSessionController::class, 'create',])->middleware('guest')->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store',])->middleware('guest');

        /*
         * AUTH
         */
        Route::group(['middleware' => ['auth']], function(){
            Route::post('logout', [AuthenticatedSessionController::class, 'destroy',])->name('logout');

            Route::get('/', DashboardController::class)->name('dashboard');
            Route::resource('forms', FormController::class, ['except' => ['show']]);
        });
    });
});