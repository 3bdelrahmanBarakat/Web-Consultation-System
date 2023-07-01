<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Profile_settings\ProfileSettingsRequest;
use App\Models\Mentor\Mentor;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileSettingsController extends Controller
{
    public function edit()
    {
        $about = MentorAbout::where('mentor_id', Auth::guard('web')->user()->id)->first();
        $experience = Experience::where('mentor_id', Auth::guard('web')->user()->id)->first();
        return view('Mentor.Profile.profile-settings')->with(['about' => $about, 'experience' => $experience]);
    }

    public function update(ProfileSettingsRequest $request)
    {
        $mentor= MentorAbout::where('mentor_id', Auth::guard('web')->user()->id)->first();
        $oldPhoto = $mentor->photo;
        $oldPath = 'public/Image/'.$oldPhoto;

        if ($request->hasFile('photo')) {
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);

            // Delete the user's old photo file from the storage location
            if ($oldPath !== null) {

                Storage::delete($oldPath);
            }

            // Update the user's photo path in the database to the new file path

            $mentor->photo = $filename;
            $mentor->save();
        }
        else {
            $mentor->photo = $oldPhoto;
            $mentor->save();
        }

        Mentor::findOrFail(Auth::guard('web')->user()->id)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
        ]);

        $mentor-> date_of_birth = $request->date_of_birth;
        $mentor->address = $request->address;
        $mentor->country = $request->country;
        $mentor->city = $request->city;
        $mentor->zip_code = $request->zip_code;
        $mentor->save();


        Experience::where('mentor_id', Auth::guard('web')->user()->id)->update([
            'company_name' => $request->company_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'years_of_experience' => $request->years_of_experience,
            'description' => $request->description
        ]);

        return back()->with('Update', 'Mentor Profile Updated Successfully');
    }
}
