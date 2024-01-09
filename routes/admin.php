<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CreateUserController;

Route::middleware(['is_admin','auth'])->group(function () {

    Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'admin'])->name('home');

        // create user Routes
       //======================
        Route::get('/user_list',[CreateUserController::class, 'index'])->name('create.user');
        Route::post('/user_getData',[CreateUserController::class, 'getData'])->name('user.getData');
    });
});
