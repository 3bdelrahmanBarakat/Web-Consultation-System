<?php

namespace App\Http\Controllers\V1\Mentor\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Message;
use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;

class MentorChatController extends Controller
{
    public function showMentees()
    {
        $about = MentorAbout::where('mentor_id',auth()->user()->id )->first();
        $mentees = Message::with('mentee')->select('mentor_id', 'mentee_id')
        ->where('mentor_id', auth()->user()->id)
        ->distinct()
        ->get();

        return view('Chat.show-mentees')->with([
            'mentees'=> $mentees,
            'about'=>$about
        ]);
    }
    public function index($id)
    {
        $about = MentorAbout::where('mentor_id',auth()->user()->id )->first();
        $mentee_name = Mentee::findOrFail($id);
        $messages = Message::where('mentee_id', $id)->where('mentor_id',auth()->user()->id)->get();
        $mentees = Message::with('mentee')->select('mentor_id', 'mentee_id')
        ->where('mentor_id', auth()->user()->id)
        ->distinct()
        ->get();
        // return $messages;
        return view('Chat.mentor-chat')->with([
            'messages'=> $messages,
            'mentee_id'=>$id,
            'about'=>$about,
            'mentees' => $mentees,
            'mentee_name'=>$mentee_name

        ]);
    }

    public function store(Request $request)
    {
        
        Message::create([
            'mentee_id' => $request->mentee_id,
            'mentor_id' => auth()->user()->id,
            'content' => $request->message_content,
            'type' => "0"
        ]);
    }

    public function latest($id)
{
    $messages = Message::where('mentee_id', $id)->where('mentor_id',auth()->user()->id)->orderBy('created_at', 'desc')->limit(20)->get()->reverse()->values();
    return response()->json($messages);
}
}
