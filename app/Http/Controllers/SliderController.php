<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider-index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider-create');
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider-edit', compact('slider'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/sliders');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/sliders/' . $image_name;
        }
        Slider::create($validateData);
        return redirect()->route('panel.slider.index')->with('success', 'Slider created successfully.');
    }

    public function update(Request $request, Slider $slider)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:65',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/sliders');
            $image->move($destinationPath, $image_name);
            $validateData['image'] = '/uploads/sliders/' . $image_name;
        }

        $slider->update($validateData);
        return redirect()->route('panel.slider.index')->with('success', 'Slider updated successfully.');
    }

    public function delete(Slider $slider)
    {
        $slider->delete();
        File::delete(public_path($slider->image));
        return redirect()->route('panel.slider.index')->with('success', 'Slider deleted successfully.');
    }


    public function statusToggle(Slider $slider)
    {
        $slider->update(['status' => !$slider->status]);
        return redirect()->route('panel.slider.index')->with('success', 'Slider status updated successfully.');
    }
}
