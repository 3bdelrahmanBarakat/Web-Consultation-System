<?php

namespace App\Http\Controllers\V1\Mentee\MenteeProfile;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Favorite;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;

class MenteeProfileController extends Controller
{
    public function profileSettings()
    {
        return view('Mentee.Profile.profile-settings');
    }

    public function viewFavourites()
    {
        $favorites = Favorite::with('mentor')->where('mentee_id', auth()->user()->id)->get();
        // return $favorites;

        return view('Mentee.Profile.favourites')->with([
            'favorites' => $favorites,
        ]);
    }
}
