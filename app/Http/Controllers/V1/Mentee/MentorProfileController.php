<?php

namespace App\Http\Controllers\V1\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Favorite;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;

class MentorProfileController extends Controller
{
    public function index($id)
    {
       $mentor = Mentor::with('about', 'experience' , 'plans')->findOrFail($id);
       return view('Mentee.Mentor_search.mentor_profile')->with([
        'mentor'=> $mentor
    ]);
    }

    public function toggleFavorite($mentor)
    {

        $mentee = auth()->user();
        // $favorites = $mentee->favorites->where('mentor_id', $mentor)->get();
        $favorites = Favorite::where('mentor_id', $mentor)->where('mentee_id', $mentee->id)->first();

        if (!$favorites) {
            // The mentor is not in the user's favorites list, so we need to add it
            Favorite::create([
                'mentor_id' => $mentor,
                'mentee_id' => $mentee->id
            ]);
            return 'favorited';
        } else {
            // The mentor is already in the user's favorites list, so we need to remove it
            // $favorites->first()->delete();
            Favorite::where('mentor_id', $mentor)->where('mentee_id', $mentee->id)->delete();
            return 'unfavorited';
        }
    }

}
