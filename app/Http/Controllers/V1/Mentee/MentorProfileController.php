<?php

namespace App\Http\Controllers\V1\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Favorite;
use App\Models\Mentor\Mentor;
use App\Models\Review\Review;
use Illuminate\Http\Request;

class MentorProfileController extends Controller
{
    public function index($id)
    {
       $mentor = Mentor::with('about', 'experience' , 'plans')->findOrFail($id);
       $mentor_fav = Favorite::where('mentee_id', auth()->guard('mentee')->user()->id)->where('mentor_id', $id)->first();
       return view('Mentee.Mentor_search.mentor_profile')->with([
        'mentor'=> $mentor,
        'mentor_fav' => $mentor_fav
    ]);
    }

    public function toggleFavorite($mentor)
    {

        $mentee = auth()->guard('mentee')->user();
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

            Favorite::where('mentor_id', $mentor)->where('mentee_id', $mentee->id)->delete();
            return 'unfavorited';
        }
    }

    public function addReview($id, Request $request)
    {
        $mentee = auth()->guard('mentee')->user();

        Review::create([
            'mentor_id' => $id,
            'mentee_id' => $mentee->id,
            'review' => $request->review
        ]);

        return back()->with('message', 'Your review has been added successfully');
    }

}
