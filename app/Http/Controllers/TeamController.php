<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('position', 'asc')->get();
        return view('admin.team-index', compact('teams'));
    }
    public function create()
    {
        return view('admin.team-create');
    }
    public function store(Request $request){
        $validateData = request()->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'position' => 'required|integer|min:1',
            'type' => 'required|string|in:1,2',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/team');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/team/' . $image_name;
        }

        Team::create($validateData);

        return redirect()->route('panel.team.index')->with('success', 'Team member Created.');
    }

    public function edit(Team $team){
        return view('admin.team-edit', compact('team'));
    }

    public function update(Request $request, Team $team){
        $validateData = request()->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'position' => 'nullable|integer|min:1',
            'type' => 'nullable|string|in:1,2',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/team');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/team/' . $image_name;
        }

        $team->update($validateData);
        return redirect()->route('panel.team.index')->with('success', 'Team member updated.');
    }

    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('panel.team.index')->with('success', 'Team member deleted.');
    }

    public function statusToggle(Team $team){
        $team->update(['status' => !$team->status]);
        return redirect()->route('panel.team.index')->with('success', 'Team member status updated.');
    }

}
