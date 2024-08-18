<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('title', 'asc')->paginate(15);
        return view('admin.client-index', compact('clients'));
    }

    public function create()
    {
        return view('admin.client-create');
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:512',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/clients');
            $image->move($destinationPath, $image_name);
            $validationData['image'] = '/uploads/clients/' . $image_name;
        }

        Client::create($validationData);

        return redirect()->route('panel.client.index')->with('success', 'Client created successfully.');
    }

    public function edit(Client $client)
    {
        return view('admin.client-edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validationData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:512',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/clients');
            $image->move($destinationPath, $image_name);
            $validationData['image'] = '/uploads/clients/' . $image_name;
        }

        $client->update($validationData);

        return redirect()->route('panel.client.index')->with('success', 'Client updated successfully.');
    }

    public function statusToggle(Client $client)
    {
        $client->update([
            'status' => !$client->status,
        ]);
        return redirect()->back()->with('success', 'Client status updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back()->with('success', 'Client deleted successfully.');
    }
}
