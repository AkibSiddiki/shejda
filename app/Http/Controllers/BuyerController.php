<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::orderBy('id', 'desc')->paginate(10);
        return view('admin.buyer-index', compact('buyers'));
    }

    public function view(Buyer $buyer)
    {
        $buyer->is_seen = 1;
        $buyer->save();
        return view('admin.buyer-view', compact('buyer'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'profession' => 'nullable|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'mail_address' => 'required|max:255',
            'preferred_location' => 'required|max:255',
            'preferred_size' => 'required|max:255',
            'no_of_car_parking_requirement' => 'required|max:255',
            'expected_handover_date' => 'required|date',
            'facing_of_the_apartment' => 'required|in:1,2,3,4',
            'preferred_floor' => 'required|max:255',
            'minimum_number_of_bedrooms' => 'required|max:255',
            'minimum_number_of_bathrooms' => 'required|max:255',
        ]);

        Buyer::create($validateData);
        return redirect()->back()->with('success', 'Your request submitted successfully.');
    }
}
