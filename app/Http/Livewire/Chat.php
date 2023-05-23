<?php

namespace App\Http\Livewire;

use App\Models\Chat\Message;
use Livewire\Component;

class Chat extends Component
{
    public $messageText;
    public $mentor_id;
    public function render($id)
    {
        $messages = Message::where('mentor_id', $id)->where('mentee_id',auth()->user()->id)->get();
        return view('livewire.chat')->with([
            'messages'=> $messages,
            'mentor_id'=>$id
        ]);
    }

    public function sendMessage()
    {
        return $this->mentor_id;
        Message::create([
            'mentor_id' => $this->mentor_id,
            'mentee_id' => auth()->user()->id,
            'content' => $this->messageText,
            'type' => "1"
        ]);

        $this->reset('messageText');
        // return back();
    }
}
