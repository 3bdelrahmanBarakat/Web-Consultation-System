<?php

namespace App\Models\Mentee;

use App\Models\Mentor\Mentor;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['mentor_id', 'mentee_id'];

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
    public function mentor()
    {
        return $this->belongsTo(Mentor::class)->with('about', 'plans');
    }
    public function about()
    {
        return $this->belongsTo(MentorAbout::class);
    }
}
