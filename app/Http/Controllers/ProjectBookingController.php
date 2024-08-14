<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectBooking;

class ProjectBookingController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        ProjectBooking::create([
            'project_id' => $project->id,
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'phone' => $validateData['phone'],
            'message' => $validateData['message'],
        ]);

        return redirect()->back()->with('success', 'Booking created successfully.');
    }
}

