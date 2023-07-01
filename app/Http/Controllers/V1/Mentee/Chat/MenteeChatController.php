<?php

namespace App\Http\Controllers\V1\Mentee\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Message;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;

class MenteeChatController extends Controller
{
    public function showMentors()
    {
        $mentors = Message::with('mentor.about')->select('mentee_id', 'mentor_id')
        ->where('mentee_id', auth()->guard('mentee')->user()->id)
        ->distinct()
        ->get();


        return view('Chat.show-mentors')->with([
            'mentors'=> $mentors,
        ]);
    }

    public function index($id)
    {
        $messages = Message::where('mentor_id', $id)->where('mentee_id',auth()->guard('mentee')->user()->id)->get();
        $mentor_header = Mentor::with('about')->findOrFail($id)->first();
        $mentors = Message::with('mentor')->select('mentor_id', 'mentee_id')
        ->where('mentee_id' , auth()->guard('mentee')->user()->id)
        ->distinct()
        ->get();
        return view('Chat.chat')->with([
            'messages'=> $messages,
            'mentor_id'=>$id,
            'mentors'=>$mentors,
            'mentor_header'=>$mentor_header
        ]);
    }

    public function store(Request $request)
    {

        Message::create([
            'mentor_id' => $request->mentor_id,
            'mentee_id' => auth()->user()->id,
            'content' => $request->message_content,
            'type' => "1"
        ]);
    }

    public function latest($id)
{
    $messages = Message::where('mentor_id', $id)->where('mentee_id',auth()->guard('mentee')->user()->id)->orderBy('created_at', 'desc')->limit(20)->get()->reverse()->values();
    return response()->json($messages);
}
}
