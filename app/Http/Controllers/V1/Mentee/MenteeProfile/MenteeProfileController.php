<?php

namespace App\Http\Controllers\V1\Mentee\MenteeProfile;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentee\Profile\MenteePasswordResetRequest;
use App\Http\Requests\V1\Mentee\Profile\MenteeProfileSettingsRequest;
use App\Models\Mentee\Favorite;
use App\Models\Mentee\Mentee;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MenteeProfileController extends Controller
{
    public function profileSettings()
    {
        $mentee = Mentee::findOrFail(auth()->user()->id);

        return view('Mentee.Profile.profile-settings')->with('mentee', $mentee);
    }

    public function profileSettingsUpdate(MenteeProfileSettingsRequest $request)
    {

        Mentee::findOrFail(auth()->user()->id)->update([
            'name' => $request->name,
            'username' => $request->username
        ]);
        return back()->with('Update', 'Your profile has been updated successfully');
    }

    public function resetPassword()
    {
        return view('Mentee.Profile.reset-password');
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

    public function viewFavourites()
    {
        $favorites = Favorite::with('mentor')->where('mentee_id', auth()->user()->id)->get();

        return view('Mentee.Profile.favourites')->with([
            'favorites' => $favorites,
        ]);
    }
    public function deleteFavourite($id)
    {
        Favorite::where('mentor_id', $id)->delete();
        return back();
    }
}
