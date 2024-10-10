<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Major;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
    // Existing counts for the dashboard
    $newsCount = News::count();
    $majorsCount = Major::count();
    $contactsCount = Contact::count();

    // Get news count per month
    $newsPerMonth = News::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month');

    // Initialize array for monthly news data
    $monthlyNewsData = array_fill(0, 12, 0); // Default to 0 for each month

    // Fill in the counts for the months where news exists
    foreach ($newsPerMonth as $month => $count) {
        $monthlyNewsData[$month - 1] = $count; // Adjust for 0-indexed array
    }

    // Get the count of each major
    $majorCounts = Major::select('name', DB::raw('COUNT(*) as count'))
        ->groupBy('name')
        ->pluck('count', 'name');

    // Prepare the data for the major chart
    $majorLabels = $majorCounts->keys(); // Get the names of the majors
    $majorData = $majorCounts->values(); // Get the counts of the majors

    // Get inquiries count per month
    $contactsPerMonth = Contact::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month');

    // Initialize array for monthly contacts data
    $monthlyContactsData = array_fill(0, 12, 0); // Default to 0 for each month

    // Fill in the counts for the months where inquiries exist
    foreach ($contactsPerMonth as $month => $count) {
        $monthlyContactsData[$month - 1] = $count; // Adjust for 0-indexed array
    }

    // Pass the data to the view
    return view('admin.dashboard.index', compact('newsCount', 'majorsCount', 'contactsCount', 'monthlyNewsData', 'majorLabels', 'majorData', 'monthlyContactsData'));
    }

}
