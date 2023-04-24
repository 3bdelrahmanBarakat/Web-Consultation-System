<?php

namespace App\Http\Controllers\V1\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;

class MentorSearchController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('Mentee.Mentor_search.mentor_search')->with('mentors', $mentors);
    }
}
