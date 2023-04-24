<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Profile_setup\ExperienceRequest;
use App\Models\Mentor\Profile\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('Mentor.Profile.experience');
    }

    public function store(ExperienceRequest $request)
    {
        Experience::create($request->all());
        return redirect()->route('plan');
    }
}
