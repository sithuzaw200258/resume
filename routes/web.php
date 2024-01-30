<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\UserDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('user-details', UserDetailController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('languages', LanguageController::class);
    Route::get('/resume',[ResumeController::class,'index'])->name('resume.index');
    Route::get('/resume/pdf',[ResumeController::class,'viewPdf'])->name('resume.pdf');
    Route::get('/resume/download',[ResumeController::class,'download'])->name('resume.download');
});
// Route::resource('resume', ResumeController::class);
