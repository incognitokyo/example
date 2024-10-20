<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationTestController extends Controller
{
    public function index(Request $request)
    {
        // Get the date filter inputs (optional)
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Build the query
        $query = DB::table('users'); // Assuming you want to query the 'users' table

        // Apply the date filter if provided
        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // Paginate the query results (10 items per page)
        $data = $query->paginate(10);

        // Return the data to a view
        return view('view', compact('data'));
    }
}
