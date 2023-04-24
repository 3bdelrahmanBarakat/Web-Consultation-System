<?php

namespace App\Models\Mentor\Profile;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $guarded = [];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
