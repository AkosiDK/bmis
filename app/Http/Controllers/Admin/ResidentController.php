<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index(Request $request)
    {
        $residents = Resident::paginate(10);
        return view('resident.index')->with('residents', $residents);
    }

    public function create(Request $request)
    {
        return view('resident.create');
    }
}
