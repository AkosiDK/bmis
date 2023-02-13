<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $population = Resident::count();
        $voters = Resident::where('voterstatus', 'Yes')->count();
        $nonVoters = Resident::where('voterstatus', 'No')->count();
        $seniorCitezen = 0; // TODO:
        $pwd = Resident::where('pwd', 'Yes')->count();

        return view('dashboard.index')
            ->with('population', $population)
            ->with('voters', $voters)
            ->with('nonVoters', $nonVoters)
            ->with('seniorCitezen', $seniorCitezen)
            ->with('pwd', $pwd);
    }
}
