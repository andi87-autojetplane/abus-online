<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HeroController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.index');
})->name('welcome');



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','admin_profile_index')->name('admin.profile');
    Route::get('/admin/profile/show','admin_profile_show')->name('admin.profile.show');
    Route::post('/admin/profile/update','admin_profile_update')->name('update.profile');
    Route::post('/admin/profile/changepassword','admin_profile_change_password')->name('change.password');
});

Route::controller(HeroController::class)->group(function(){
    Route::get('/frontend/hero','index')->name('hero');
    Route::post('/frontend/hero/post','storeHero')->name('post-hero');
    Route::get('/frontend/hero/{heroid}/edit','hero_edit')->name('hero.edit');
    Route::post('/frontend/hero/update','hero_update')->name('hero.update');
});

Route::controller(FrontendController::class)->group(function(){
    Route::get('/contact','frontend_contact')->name('kontak');
    Route::get('/profil-puskesmas','frontend_about')->name('profil-puskesmas');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
