<?php

use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Admin\AdminRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Mentee\MenteeLoginController;
use App\Http\Controllers\Auth\Mentee\MenteeRegisterController;
use App\Http\Controllers\V1\Admin\AdminController;
use App\Http\Controllers\V1\Admin\Booking\BookingsController;
use App\Http\Controllers\V1\Admin\DashboardController;
use App\Http\Controllers\V1\Admin\Mentee\MenteeController as AdminMenteeController;
use App\Http\Controllers\V1\Admin\Mentor\MentorController;
use App\Http\Controllers\V1\Admin\Mentor\MentoringApplicantsController;
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
use App\Http\Controllers\V1\Mentor\Profile\PaymentController;
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

//Mentor reviews view
Route::get('mentor/reviews' , [ProfileController::class , 'showReviews'])->name('mentor.reviews')->middleware(['auth', 'verified', 'profile']);


//Mentor Meetings
Route::prefix('mentor/meetings')->controller(OnlineMeetingsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('mentor.meetings');
    Route::post('store', 'store')->name('mentor.meetings.store');
});

//Mentor Appointments
Route::prefix('mentor/appointments')->controller(AppointmentsController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/', 'index')->name('appointments.index');
});

//Mentor chat && add payment && reset password
Route::prefix('mentor')->controller(MentorChatController::class)->middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('chat/show','showMentees')->name('mentor.chat.show');
    Route::get('chat/{id}','index')->name('mentor.chat');
    Route::post('chat/store','store')->name('mentor.chat.store');
    Route::get('chat/latest/{id}','latest')->name('mentor.chat.latest');
//reset password
    Route::get('reset-password', [ProfileController::class,'resetPassword'])->name('mentor.reset-password');
    Route::post('reset-password/update', [ProfileController::class,'resetPasswordUpdate'])->name('mentor.reset-password.update');
//Payment
    Route::prefix('payment')->controller(PaymentController::class)->middleware('payment')->group(function(){
        Route::get('setup', 'index')->name('mentor.payment.setup');
        Route::post('store', 'store')->name('mentor.payment.store');
    });

});
//Review Account Page
Route::get('mentor/review-account', [PlanController::class,'reviewAccount'])->name('review-account');

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
    Route::post('favourites/delete/{id}', [MenteeProfileController::class,'deleteFavourite'])->name('mentee.favourite.delete');
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
    Route::post('{id}/add-review', [MentorProfileController::class,'addReview'])->name('mentee.mentor.add_review');


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

 //Admin Registration
// Route::prefix('admin/register')->controller(AdminRegisterController::class)->middleware('guest:admin')->group(function () {
//     Route::get('/', 'showRegisterForm')->name('admin.register');
//     Route::post('/', 'register')->name('admin.register.submit');
// });

//Admin Auth
Route::prefix('admin/login')->controller(AdminLoginController::class)->middleware('guest:admin')->group(function () {
    Route::get('/', 'showLoginForm')->name('admin.login');
    Route::post('/', 'login')->name('admin.login.submit');
});

//Admin
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('logout' , [AdminLoginController::class , 'logout'])->name('admin.logout');
//Add admin
    Route::get('/', [AdminController::class, 'index'])->name('admin.admin-list');

//mentor actions
    Route::prefix('mentor')->controller(MentorController::class)->group(function () {
        Route::get('/','index')->name('admin.mentor-list');
        Route::post('/{id}/status', 'updateStatus')->name('admin.mentor.update_status');
        Route::get('/profile/{id}', 'viewProfile')->name('admin.mentor.view_profile');

    });
//mentoring applicants
    Route::prefix('mentoring-applicants')->controller(MentoringApplicantsController::class)->group(function () {
        Route::get('/','index')->name('admin.mentoring-applicants');
        Route::post('/{id}/accept', 'acceptApplicant')->name('admin.applicant.accept');
        Route::post('/{id}/delete', 'deleteApplicant')->name('admin.applicant.delete');

    });

//mentee actions
    Route::prefix('mentee')->controller(AdminMenteeController::class)->group(function () {
        Route::get('/','index')->name('admin.mentee-list');
        Route::post('/{id}/status', 'updateStatus')->name('admin.mentee.update_status');


    });

//Bookings
    Route::prefix('bookings')->controller(BookingsController::class)->group(function () {
        Route::get('/', 'index')->name('admin.bookings');
    });
});


