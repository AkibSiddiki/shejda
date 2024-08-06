<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\InfoPage;

class HomeController extends Controller
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
        $sliders = Slider::select('title', 'image')->where('status', 1)->get();
        $welcome = InfoPage::where('slug', $this->pageSlug[0])->first();
        $why = InfoPage::where('slug', $this->pageSlug[1])->first();
        return view('home', compact('sliders', 'welcome', 'why'));
    }

    public function ourStory()
    {
        $infoPage = InfoPage::where('slug', 'our-story')->first();
        return view('our-story', compact('infoPage'));
    }
}
