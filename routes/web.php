<?php

use App\Http\Controllers\Admin\Criminal\SearchController as CriminalSearchController;
use App\Http\Controllers\Admin\Docs\DepositController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\Criminal\SearchController;
use App\Http\Controllers\Client\Docs\DepositController as DocsDepositController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Security\LoginController;
use App\Http\Controllers\Security\RegController;
use App\Http\Controllers\Security\VerifyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, "index"])->name("client.home");
Route::get('/criminal/search', [SearchController::class, "index"])->name("client.criminal.search");
Route::middleware(["auth", "verified", "admin"])->prefix("/admin")->group(function () {
    Route::get("/", [AdminHomeController::class, 'index'])->name("admin.home");
    Route::get("/docs/deposit", [DepositController::class, "index"])->name("docs.deposit.index");
    Route::get("/docs/deposit/search", [DepositController::class, "search"])->name("docs.deposit.search");
    Route::resource("/searchs", CriminalSearchController::class);
    Route::get("/register", [RegController::class, "index"])->name("reg.index");
    Route::post("/register", [RegController::class, "store"])->name("reg.store");
});
Route::middleware(["verified"])->prefix("/client")->group(function () {
    Route::get("/docs/deposit", [DocsDepositController::class, "index"])->name("client.docs.deposit.index");
});
Route::middleware(["auth"])->group(function () {
    Route::post("/logout", [LoginController::class, "logout"])->name("login.logout");
});
Route::middleware(["auth", "notverifieduser"])->group(function () {
    Route::get("/verify", [VerifyController::class, "index"])->name("verify.index");
    Route::post("/verify", [VerifyController::class, "store"])->name("verify.store");
});
Route::middleware("guest")->group(function () {
    Route::get("/login", [LoginController::class, "index"])->name("login.index");
    Route::post("/login", [LoginController::class, "store"])->name("login.store");
});