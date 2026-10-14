<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ActivitiesController;

Route::get('/', function () {
    return view('welcome');
});

// Resource Routes สำหรับทั้ง 6 ระบบ
Route::resource('/title', TitleController::class);
Route::resource('/organization', OrganizationController::class);
Route::resource('/community', CommunityController::class);
Route::resource('/tag', TagController::class);
Route::resource('/staff', StaffController::class);
Route::resource('/activities', ActivitiesController::class);