<?php

namespace App\Http\Controllers\V1\Admin\Mentor;

use App\Http\Controllers\Controller;
use App\Mail\AcceptanceEmail;
use App\Mail\RejectionEmail;
use App\Models\Mentor\Mentor;
use Illuminate\Support\Facades\Mail;

class MentoringApplicantsController extends Controller
{
    public function index()
    {
        $mentors = Mentor::where('status', 0)->paginate();
        return view('Admin.Mentor.mentoring-applicants')->with('mentors', $mentors);
    }

    public function acceptApplicant($id)
    {
        $mentor = Mentor::find($id);
        $mentor->status = 1;
        $mentor->is_activated = 1;
        $mentor->save();

        Mail::to($mentor->email)->send(new AcceptanceEmail($mentor));

        return redirect()->back()->with('message', 'Mentor accepted successfully.');
    }

    public function deleteApplicant($id)
    {
        $mentor = Mentor::find($id);
        Mail::to($mentor->email)->send(new RejectionEmail($mentor));

        $mentor->delete();
        return redirect()->back()->with('message', 'Mentor rejected and deleted successfully.');
    }
}
