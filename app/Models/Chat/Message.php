<?php

namespace App\Models\Chat;

use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['mentor_id', 'mentee_id', 'content', 'type'];
    use HasFactory;

    public function mentor()
    {
        return $this->belongsTo(Mentor::class)->with('about');
    }

    public function mentee()
    {
        return $this->belongsTo(Mentee::class);
    }
}
