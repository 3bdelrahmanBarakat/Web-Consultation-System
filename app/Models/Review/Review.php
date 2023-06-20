<?php

namespace App\Models\Review;

use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['mentor_id', 'mentee_id', 'review'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
}
