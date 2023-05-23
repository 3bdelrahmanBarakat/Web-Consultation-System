<?php

use App\Http\Controllers\Auth\Mentee\MenteeLoginController;
use App\Http\Controllers\Auth\Mentee\MenteeRegisterController;
use App\Http\Controllers\V1\Mentee\Booking\MentorBookingController;
use App\Http\Controllers\V1\Mentee\Chat\MenteeChatController;
use App\Http\Controllers\V1\Mentee\MenteeController;
use App\Http\Controllers\V1\Mentee\MenteeProfile\MenteeProfileController;
use App\Http\Controllers\V1\Mentee\MentorProfileController;
use App\Http\Controllers\V1\Mentee\MentorSearchController;
use App\Http\Controllers\V1\Mentor\Appointments\AppointmentsController;
use App\Http\Controllers\V1\Mentor\Chat\MentorChatController;
use App\Http\Controllers\V1\Mentor\Meeting\OnlineMeetingsController;
use App\Http\Controllers\V1\Mentor\Profile\AboutController;
use App\Http\Controllers\V1\Mentor\Profile\ExperienceController;
use App\Http\Controllers\V1\Mentor\Profile\PlanController;
use App\Http\Controllers\V1\Mentor\Profile\ProfileController;
use App\Http\Controllers\V1\Mentor\Profile\ProfileSettingsController;
use App\Http\Controllers\V1\Mentor\Schedule_Timings\ScheduleTimingsController;
use App\Http\Livewire\Chat;
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


//Mentor Meetings
Route::prefix('mentor/meetings')->controller(OnlineMeetingsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('mentor.meetings');
    Route::post('store', 'store')->name('mentor.meetings.store');
});

//Mentor Appointments
Route::prefix('mentor/appointments')->controller(AppointmentsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('appointments.index');
});

//Mentor chat
Route::prefix('mentor')->controller(MentorChatController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('chat/show','showMentees')->name('mentor.chat.show');
    Route::get('chat/{id}','index')->name('mentor.chat');
    Route::post('chat/store','store')->name('mentor.chat.store');
    Route::get('chat/latest/{id}','latest')->name('mentor.chat.latest');
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

//Mentee Profile
Route::prefix('mentee')->middleware('auth:mentee')->group(function () {
    Route::get('profile-settings', [MenteeProfileController::class,'profileSettings'])->name('mentee.profile-settings');
    Route::post('profile-settings/update', [MenteeProfileController::class,'profileSettingsUpdate'])->name('mentee.profile-settings.update');
    Route::get('reset-password', [MenteeProfileController::class,'resetPassword'])->name('mentee.reset-password');
    Route::post('reset-password/update', [MenteeProfileController::class,'resetPasswordUpdate'])->name('mentee.reset-password.update');
    Route::get('favourites', [MenteeProfileController::class,'viewFavourites'])->name('mentee.favourites');
//Mentee Chat
    Route::get('chat/{id}', [MenteeChatController::class ,'index'])->name('mentee.chat');
    Route::post('chat/store', [MenteeChatController::class ,'store'])->name('mentee.chat.store');
    Route::get('chat/latest/{id}', [MenteeChatController::class ,'latest'])->name('mentee.chat.latest');
});

//Mentee actions
Route::prefix('mentor')->middleware('auth:mentee')->group(function () {
    //Mentee searchs for mentors
    Route::get('search', [MentorSearchController::class,'index'])->name('mentee.mentor_search');
    Route::post('/{mentor}/favorite', [MentorProfileController::class,'toggleFavorite'])->name('mentors.favorite');
    Route::get('profile/{id}', [MentorProfileController::class,'index'])->name('mentee.mentor_profile');


//Mentee's Booking
    Route::prefix('booking')->controller(MentorBookingController::class)->group(function () {
        Route::get('plan/{id}','bookPlan')->name('mentee.booking.plan');
        Route::get('timings','bookTimings')->name('mentee.booking.timings');
        Route::post('/step1',  'storeStep1')->name('step1.submit');
        Route::get('details','bookDetails')->name('mentee.booking.details');
        Route::post('/step2',  'storeStep2')->name('step2.submit');
        Route::get('pay','bookPay')->name('mentee.booking.pay');
        Route::get('checkout','checkout')->name('mentee.booking.checkout');
        Route::post('process-payment','processPayment')->name('mentee.booking.process-payment');
    });
});




