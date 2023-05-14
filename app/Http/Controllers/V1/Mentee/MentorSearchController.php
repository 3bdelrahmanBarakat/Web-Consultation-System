<?php

namespace App\Http\Controllers\V1\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentorSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
    $results = DB::table('mentors')
                    ->join('mentorsabout', 'mentors.id', '=', 'mentorsabout.mentor_id')
                    ->join('experiences', 'mentors.id', '=', 'experiences.mentor_id')
                    ->where('fname', 'LIKE', '%' . $query . '%')
                    ->orWhere('lname', 'LIKE', '%' . $query . '%')
                    ->orwhere('country', 'LIKE', '%' . $query . '%')
                    ->orWhere('city', 'LIKE', '%' . $query . '%')
                    ->orWhere('address', 'LIKE', '%' . $query . '%')
                    ->orwhere('company_name', 'LIKE', '%' . $query . '%')
                    ->get();

            // dd($results);
        return view('Mentee.Mentor_search.mentor_search')->with(['results'=> $results , 'query' => $query ]);
    }
}
