<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\GamingChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// หน้าแรก Redirect ไปที่ Staff Index
Route::get('/', function () {
    return redirect()->route('staff.index');
});

// Route สำหรับงานเดิม (Staff Management System - w07)
Route::resource('staff', StaffController::class);
Route::resource('title', TitleController::class);
Route::resource('organization', OrganizationController::class);

// Step 5: Route สำหรับงาน w10 (Gaming & Esports Community Report)
Route::get('/gaming-chart', [GamingChartController::class, 'index'])->name('gaming.chart');