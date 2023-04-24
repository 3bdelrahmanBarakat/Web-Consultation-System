<?php

namespace App\Models\Mentor\Profile;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorAbout extends Model
{
    use HasFactory;
    protected $table = 'mentorsabout';
    protected $fillable = [
        'gender',
        'date_of_birth',
        'mentor_id',
        'address',
        'country',
        'city',
        'zip_code',
        'photo'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
