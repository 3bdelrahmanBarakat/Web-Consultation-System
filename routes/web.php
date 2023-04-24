<?php

use App\Http\Controllers\Auth\Mentee\MenteeLoginController;
use App\Http\Controllers\Auth\Mentee\MenteeRegisterController;
use App\Http\Controllers\V1\Mentee\MenteeController;
use App\Http\Controllers\V1\Mentee\MentorSearchController;
use App\Http\Controllers\V1\Mentor\Appointments\AppointmentsController;
use App\Http\Controllers\V1\Mentor\Profile\AboutController;
use App\Http\Controllers\V1\Mentor\Profile\ExperienceController;
use App\Http\Controllers\V1\Mentor\Profile\PlanController;
use App\Http\Controllers\V1\Mentor\Profile\ProfileController;
use App\Http\Controllers\V1\Mentor\Profile\ProfileSettingsController;
use App\Http\Controllers\V1\Mentor\Schedule_Timings\ScheduleTimingsController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});
Route::prefix('mentor')->group(function () {
    Auth::routes(['verify' => true]);
});

//Mentor Dashboard
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware(['auth', 'verified', 'profile'])->name('home');

//Profile Setup - About
Route::prefix('mentor/profile-setup')->controller(AboutController::class)->middleware(['auth', 'verified', 'profile.about'])->group(function () {
    Route::get('about', 'index')->name('about');
    Route::post('about/store', 'store')->name('about.store');
});

//Profile Setup - Experience
Route::prefix('mentor/profile-setup')->controller(ExperienceController::class)->middleware(['auth', 'verified', 'profile.experience'])->group(function () {
    Route::get('experience', 'index')->name('experience');
    Route::post('experience/store', 'store')->name('experience.store');
});

//Profile Setup - Plan
Route::prefix('mentor/profile-setup')->controller(PlanController::class)->middleware(['auth', 'verified', 'profile.plan'])->group(function () {
    Route::get('plan', 'index')->name('plan');
    Route::post('plan/store', 'store')->name('plan.store');
});

//Profile Settings
Route::prefix('mentor/profile-settings')->controller(ProfileSettingsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'edit')->name('profile-settings.edit');
    Route::Put('update', 'update')->name('profile-settings.update');
});

//Schedule Timings
Route::prefix('mentor/schedule-timings')->controller(ScheduleTimingsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('schedule-timings.index');
    Route::post('store', 'store')->name('schedule-timings.store');
    Route::delete('delete/{id}' , 'delete_timing')->name('schedule-timings.destroy');
});

//Mentor Profile view
Route::get('mentor/profile' , [ProfileController::class , 'index'])->name('mentor.profile')->middleware(['auth', 'verified', 'profile']);


//Mentor Appointments
Route::prefix('mentor/appointments')->controller(AppointmentsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('appointments.index');
});

//Mentee Routes
Route::get('mentee' , [MenteeController::class , 'index'])->name('mentee.dashboard')->middleware('auth:mentee');

//Mentee Registration
Route::prefix('mentee/register')->controller(MenteeRegisterController::class)->middleware('guest:mentee')->group(function () {
    Route::get('/', 'showRegisterForm')->name('mentee.register');
    Route::post('/', 'register')->name('mentee.register.submit');
});

//Mentee login
Route::prefix('mentee/login')->controller(MenteeLoginController::class)->middleware('guest:mentee')->group(function () {
    Route::get('/', 'showLoginForm')->name('mentee.login');
    Route::post('/', 'login')->name('mentee.login.submit');
});

//Mentee logout
Route::post('mentee/logout' , [MenteeLoginController::class , 'logout'])->name('mentee.logout');

//Mentee search for mentors
Route::prefix('mentee/mentor-search')->controller(MentorSearchController::class)->middleware('auth:mentee')->group(function () {
    Route::get('/', 'index')->name('mentee.mentor_search');
});

