<?php

namespace App\Http\Controllers\V1\Mentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function index()
    {
        return view('Mentee.mentees');
    }
}
