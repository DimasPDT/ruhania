<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\dashboard\Crm;

use App\Http\Controllers\LandingPageController;

// Main Page Route
Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');
Route::get('/dashboard/analytics', [Analytics::class, 'index'])->name('dashboard-analytics');
Route::get('/dashboard/crm', [Crm::class, 'index'])->name('dashboard-crm');
