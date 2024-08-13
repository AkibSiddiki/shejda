<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Photo;
use App\Models\ProjectBooking;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        return view('admin.projects-index', compact('projects'));
    }

    public function bookings(Project $project)
    {
        $bookings = $project->bookings()->orderBy('id', 'desc')->paginate(10);
        return view('admin.project-bookings-index', compact('project', 'bookings'));
    }

    public function create()
    {
        return view('admin.project-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description1' => 'required|string',
            'description2' => 'required|string',
            'type' => 'required|in:1,2,3|integer',
        ]);

        // dd($request->photos);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/projects');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/projects/' . $image_name;
        }

        $project = Project::create($validateData);
        if ($project == null) {
            return redirect()->route('panel.project.index')->with('error', 'Project created failed.');
        }

        return redirect()->route('panel.project.index')->with('success', 'Project uploaded successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.project-edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validateData = $request->validate([
            'title' => 'nullable|min:3|max:65',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description1' => 'nullable',
            'description2' => 'nullable',
            'type' => 'required|in:1,2,3',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/projects');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/projects/' . $image_name;
        }

        $project->update($validateData);


        return redirect()->route('panel.project.index')->with('success', 'Project updated successfully.');
    }

    public function statusToggle(Project $project)
    {
        $project->update(['status' => !$project->status]);
        return redirect()->route('panel.project.index')->with('success', 'Project status updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        File::delete(public_path($project->image));
        return redirect()->route('panel.project.index')->with('success', 'Project deleted successfully.');
    }

    public function createPhoto(Project $project)
    {

        return view('admin.project-photos-create', compact('project'));
    }
    public function destroyPhoto(Photo $photo)
    {
        File::delete(public_path($photo->image));
        $photo->delete();
        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }

    public function storePhotos(Request $request, Project $project)
    {
        $request->validate([
            'photos.*' => 'required|mimes:jpeg,png,jpg|max:512',
        ]);

        $images = array();

        if ($files = $request->file('photos')) {
            foreach ($files as $file) {
                $name = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('/uploads/photos'), $name);
                $images[] = '/uploads/photos/' . $name;
            }
        }

        foreach ($images as $image) {
            $photo = new Photo();
            $photo->project_id = $project->id;
            $photo->image = $image;
            $photo->save();
        }

        return redirect()->route('panel.project.index')->with('success', 'Photos uploaded successfully.');
    }

    public function bookingSeen(ProjectBooking $projectBooking)
    {
        $projectBooking->update(['is_seen' => 1]);
        return redirect()->back()->with('success', 'Booking seen successfully.');
    }
}
