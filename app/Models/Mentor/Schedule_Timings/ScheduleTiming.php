<?php

namespace App\Models\Mentor\Schedule_Timings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleTiming extends Model
{
    use HasFactory;
    protected $table = 'schedule_timings';
    protected $guarded = [];
}
