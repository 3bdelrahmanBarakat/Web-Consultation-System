<?php

namespace App\Models\Mentor\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorPayment extends Model
{
    use HasFactory;
    protected $table = 'mentors_payment';
    protected $fillable = ['mentor_id','stripe_token','account_holder_name','routing_number','last4'];

    
}
