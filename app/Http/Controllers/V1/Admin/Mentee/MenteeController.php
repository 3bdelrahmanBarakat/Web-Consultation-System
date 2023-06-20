<?php

namespace App\Http\Controllers\V1\Admin\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Mentee;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function index()
    {
        $mentees = Mentee::paginate();
        return view('Admin.Mentee.mentee-list')->with('mentees', $mentees);
    }

    public function updateStatus($id)
    {
        $mentee = Mentee::find($id);

        if ($mentee) {
            $mentee->is_activated = !$mentee->is_activated;
            $mentee->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }
}
