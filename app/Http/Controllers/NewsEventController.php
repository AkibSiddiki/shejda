<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsEvent;
use Illuminate\Support\Facades\File;

class NewsEventController extends Controller
{

    public function index()
    {
        $newsEvents = NewsEvent::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.newsEvent-index', compact('newsEvents'));
    }

    public function create()
    {
        return view('admin.newsEvent-create');
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/news-events');
            $image->move($destinationPath, $image_name);
            $validationData['image'] = '/uploads/news-events/' . $image_name;
        }

        NewsEvent::create($validationData);

        return redirect()->route('panel.newsEvent.index')->with('success', 'News Event created successfully.');
    }

    public function edit(NewsEvent $newsEvent)
    {
        return view('admin.newsEvent-edit', compact('newsEvent'));
    }

    public function update(Request $request, NewsEvent $newsEvent)
    {
        $validationData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/news-events');
            $image->move($destinationPath, $image_name);
            $validationData['image'] = '/uploads/news-events/' . $image_name;
        }

        $newsEvent->update($validationData);

        return redirect()->route('panel.newsEvent.index')->with('success', 'News Event updated successfully.');
    }

    public function destroy(NewsEvent $newsEvent)
    {
        $newsEvent->delete();
        File::delete(public_path($newsEvent->image));
        return redirect()->route('panel.newsEvent.index')->with('success', 'News Event deleted successfully.');
    }

    public function statusToggle(NewsEvent $newsEvent)
    {
        $newsEvent->update(['status' => !$newsEvent->status]);
        return redirect()->route('panel.newsEvent.index')->with('success', 'News Event status updated successfully.');
    }
}
