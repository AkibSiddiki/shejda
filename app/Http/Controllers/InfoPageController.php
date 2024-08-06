<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPage;
use Illuminate\Support\Facades\File;

class InfoPageController extends Controller
{

    protected $pageSlug = [
        'welcome-note',
        'why-shejda',
        'our-story',
        'our-mission',
        'our-vision',
        'our-values',
        'landowners',
        'buyers',
        'customers',
        'contact-us',
    ];

    public function index()
    {
        $infoPages = InfoPage::all();

        return view('admin.infoPage-index', compact('infoPages'));
    }

    public function edit(InfoPage $infoPage)
    {
        $updateable = [
            'title' => true,
            'content' => false,
            'image1' => false,
            'image2' => false
        ];

        if (in_array($infoPage->slug, [$this->pageSlug[0], $this->pageSlug[6], $this->pageSlug[7], $this->pageSlug[8], $this->pageSlug[9]])) {
            $updateable['image1'] = true;
        }

        if ($infoPage->slug == $this->pageSlug[0]) {
            $updateable['image2'] = true;
        }

        if ($infoPage->slug != $this->pageSlug[9]) {
            $updateable['content'] = true;
        }
        return view('admin.infoPage-edit', compact('infoPage', 'updateable'));
    }

    public function update(InfoPage $infoPage, Request $request)
    {
        $validateData = $request->validate([
            'title' => 'nullable|min:3|max:65',
            'image1' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'image2' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'content' => 'nullable|string',
        ]);

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/infoPages');
            $image->move($destinationPath, $filename);
            $validateData['image1'] = '/uploads/infoPages/' . $filename;

            if ($infoPage->image1) {
                File::delete(public_path($infoPage->image1));
            }
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/infoPages');
            $image->move($destinationPath, $filename);
            $validateData['image2'] = '/uploads/infoPages/' . $filename;

            if ($infoPage->image2) {
                File::delete(public_path($infoPage->image2));
            }
        }

        $infoPage->update($validateData);

        return redirect()->route('panel.infoPage.index')->with('success', 'Info Page updated successfully');
    }

    public function statusToggle(InfoPage $infoPage)
    {
        $infoPage->update([
            'status' => !$infoPage->status
        ]);
        return redirect()->back()->with('success', 'Info Page status updated successfully');
    }
}
