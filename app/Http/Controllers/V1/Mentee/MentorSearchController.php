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
        $searchTerm = $request->input('query');
    $results = DB::table('mentors')
    ->join('mentorsabout', 'mentors.id', '=', 'mentorsabout.mentor_id')
    ->join('experiences', 'mentors.id', '=', 'experiences.mentor_id')
    ->where(function ($query) use ($searchTerm) {
        $query->where('fname', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('lname', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('country', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('city', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('address', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('company_name', 'LIKE', '%' . $searchTerm . '%');
    })
    ->where('status', 1)
    ->get();
    
        return view('Mentee.Mentor_search.mentor_search')->with(['results'=> $results , 'query' => $searchTerm ]);
    }
}
