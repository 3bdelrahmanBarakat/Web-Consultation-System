<?php

namespace App\Http\Controllers\V1\Admin\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\generateReportRequest;
use App\Models\Booking\Booking;
use App\Models\Mentor\Mentor;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ReportsController extends Controller
{
    public function index()
    {
        $mentors = Mentor::where('status',1)->where('is_activated', 1)->get();
        return view('Admin.Report.reports')->with('mentors', $mentors);
    }

    public function generateReport(generateReportRequest $request)
    {

    $mentorIds = $request->mentor_ids;
    $startDate = $request->start_date;
    $endDate = $request->end_date;
    $status = $request->status;

    $startDateFormatted = Carbon::createFromFormat('d/m/Y', $startDate)->format('Y-m-d');
    $endDateFormatted = Carbon::createFromFormat('d/m/Y', $endDate)->format('Y-m-d');


    $bookings = Booking::query()
        ->whereIn('mentor_id', $mentorIds)
         ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
        ->when($status, function ($query, $status) {
            if ($status === 'accepted') {
                return $query->where('status', 'accepted');
            } elseif ($status === 'rejected') {
                return $query->where('status', 'rejected');
            }
            return $query;
        })
        ->with('mentor','mentee')
        ->get();


        if ($bookings->isEmpty()) {
            return redirect()->back()->with('error', 'No bookings found with the selected options.');
        }


    $totalEarnings = $bookings->sum('total_fees');


    $html = View::make('Admin.Report.report-pdf', [
        'bookings' => $bookings,
        'totalEarnings' => $totalEarnings,
    ])->render();


    $pdf = new Dompdf();
    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'landscape');
    $pdf->render();


    return $pdf->stream('mentor_report.pdf');


    }

    public function searchMentors(Request $request)
    {
        $query = $request->query('query');

        $mentors = Mentor::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('fname', 'LIKE', "%$query%")
                ->orWhere('lname', 'LIKE', "%$query%");
        })->get(['id', 'fname', 'lname']);

        return response()->json($mentors);
    }
}
