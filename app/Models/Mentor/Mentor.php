<?php

namespace App\Models\Mentor;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Booking\Booking;
use App\Models\Meeting\Meeting;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Mentor\Profile\Plan;
use App\Models\Mentor\Schedule_Timings\ScheduleTiming;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mentor extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'phone',
        'user_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function about()
    {
        return $this->hasOne(MentorAbout::class);
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function timings()
    {
        return $this->hasMany(ScheduleTiming::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    
}
