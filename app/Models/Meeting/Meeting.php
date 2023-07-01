<?php

namespace App\Models\Meeting;

use App\Models\Booking\Booking;
use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable= ['mentor_id','mentee_id','booking_id','meeting_id','topic','start_at','duration','password','start_url','join_url'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
    public function bookings()
    {
        return $this->belongsTo(Booking::class);
    }

}
