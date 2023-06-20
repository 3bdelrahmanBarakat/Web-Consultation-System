<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Profile_setup\PlanRequest;
use App\Models\Mentor\Profile\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function index()
    {
        return view('Mentor.Profile.create-plan');
    }

    public function store(PlanRequest $request)
    {

        Plan::create([
        'mentor_id' => Auth::user()->id,
        'price' => $request->standard_price,
        'plan_type' => $request->standard_type,
        'number_of_sessions' => $request->standard_sessions,
        'is_chat_allowed' => $request->standard_chat,
        'response_time' => $request->standard_response_time,
        'description' => $request->standard_description,
        ]
    );

        Plan::create([
            'mentor_id' => Auth::user()->id,
            'price' => $request->pro_price,
            'plan_type' => $request->pro_type,
            'number_of_sessions' => $request->pro_sessions,
            'is_chat_allowed' => $request->pro_chat,
            'response_time' => $request->pro_response_time,
            'description' => $request->pro_description,
        ]);

        Plan::create([
            'mentor_id' => Auth::user()->id,
            'price' => $request->per_session_price,
            'plan_type' => $request->per_session_type,
            'is_chat_allowed' => $request->per_session_chat,
            'description' => $request->per_session_description,
        ]);

        return redirect()->route('review-account');
    }

    public function reviewAccount()
    {
        return view('Mentor.Profile.account-review');
    }
}
