<?php

namespace App\Http\Controllers\V1\Admin\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::where('status', 1)->paginate();

        return view('Admin.Mentor.mentor-list')->with('mentors',$mentors);
    }

    public function updateStatus($id)
    {
        $mentor = Mentor::find($id);

        if ($mentor) {
            $mentor->is_activated = !$mentor->is_activated;
            $mentor->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function viewProfile($id)
    {
        $mentor = Mentor::with('about','experience','plans')->find($id);
        
        if($mentor['about']== null || $mentor['experience']== null || count($mentor['plans']) === 0)
        {
            return back()->with('notfinished', 'This account is not finished yet');
        }
        return view('Admin.Mentor.mentor-profile')->with('mentor',$mentor);
    }
}
