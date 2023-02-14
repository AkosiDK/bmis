<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Officials;
use Illuminate\Http\Request;

class OfficialsController extends Controller
{
    public function index(Request $request)
    {
        $officials = Officials::paginate(10);
        return view('officials.index')->with('officials', $officials);
    }

    public function create(Request $request)
    {
        return view('officials.create');
    }

    public function store(Request $request)
    {
        $fullname = $request->fullname;
        $contact = $request->contact;
        $chairmanship = $request->chairmanship;

        $position = $request->position;
        $termstart = $request->termstart;
        $termend = $request->termend;

        $address = $request->address;
        $status = $request->status;

        Officials::create([
            'fullname' => $fullname,
            'contact' => $contact,
            'chairmanship' => $chairmanship,

            'position' => $position,
            'termstart' => $termstart,
            'termend' => $termend,

            'address' => $address,
            'status' => $status,
            
        ]);

        return redirect()->route('officials.index');
    }

    public function edit(Request $request)
    {
        $officials = Officials::find($request->id);
        return view('officials.edit')->with('officials', $officials);
    }

    public function update(Request $request)
    {
        $fullname = $request->fullname;
        $contact = $request->contact;
        $chairmanship = $request->chairmanship;

        $position = $request->position;
        $termstart = $request->termstart;
        $termend = $request->termend;

        $address = $request->address;
        $status = $request->status;

        $officials = Officials::find($request->id);

        $officials->update([
            'fullname' => $fullname,
            'contact' => $contact,
            'chairmanship' => $chairmanship,

            'position' => $position,
            'termstart' => $termstart,
            'termend' => $termend,

            'address' => $address,
            'status' => $status,
        ]);

        return redirect()->route('officials.index');
    }

   
}
