<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Review\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $about = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        $experience = Experience::where('mentor_id', Auth::user()->id)->first();

        return view('Mentor.Profile.profile')->with(
            [
                'about' => $about,
                'experience' => $experience
            ]);
    }

    public function resetPassword()
    {
        $about = MentorAbout::where('mentor_id', auth()->user()->id)->first();
        return view('Mentor.Profile.reset-password')->with([
            'about' => $about
        ]);
    }

    public function resetPasswordUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            $validator->errors()->add('old_password', 'The old password is incorrect.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->password = Hash::make($request->password);
        $user->save();

    return back()->with('Reset Password', 'Your password has been reset successfully');
    }

    public function showReviews()
    {
        $mentor = auth()->user();
        $about = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        $reviews = Review::with('mentee')->where('mentor_id', $mentor->id)->get();
        // return $reviews;
        return view('Mentor.Profile.reviews')->with([
            'reviews' => $reviews,
            'about' => $about
        ]);
    }
}
