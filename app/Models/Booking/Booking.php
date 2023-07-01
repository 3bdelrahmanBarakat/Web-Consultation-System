<?php

namespace App\Models\Booking;

use App\Models\Meeting\Meeting;
use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use App\Models\Mentor\Schedule_Timings\ScheduleTiming;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
    public function timing()
    {
        return $this->belongsTo(ScheduleTiming::class);
    }
    public function meeting()
    {
        return $this->hasOne(Meeting::class);
    }


}
