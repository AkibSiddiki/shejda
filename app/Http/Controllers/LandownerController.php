<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landowner;

class LandownerController extends Controller
{

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'contact_person' => 'nullable|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'locality' => 'required|max:255',
            'address' => 'required|max:255',
            'size' => 'required|max:65',
            'road_width' => 'required|max:65',
            'category' => 'required|in:1,2',
            'facing' => 'required|in:1,2,3,4',
            'feature' => 'nullable|in:1,2,3,4,5',
        ]);

        Landowner::create($validateData);

        return redirect()->back()->with('success', 'Your request submitted successfully.');
    }

    public function index()
    {
        $landowners = \App\Models\Landowner::all();
        return view('landowners', compact('landowners'));
    }
}
