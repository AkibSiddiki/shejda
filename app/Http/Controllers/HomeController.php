<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\InfoPage;
use App\Models\NewsEvent;
use App\Models\Project;

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
        $projects = Project::orderBy('id', 'desc')->take(8)->get();
        $news = NewsEvent::orderBy('id', 'desc')->take(3)->get();
        return view('home', compact('sliders', 'welcome', 'why', 'projects', 'news'));
    }

    public function ourStory()
    {
        $infoPage = InfoPage::where('slug', 'our-story')->first();
        return view('our-story', compact('infoPage'));
    }

    public function newsList(){
        $news = NewsEvent::orderBy('id', 'desc')->paginate(10);
        return view('news-list', compact('news'));
    }

    public function newsView(NewsEvent $news){
        return view('news-view', compact('news'));
    }

    public function projectList($type, $p_type = null){
        if($p_type == null){
            $projects = Project::where('type', $type)->orderBy('id', 'desc')->paginate(10);
        }else{
            $projects = Project::where('type', $type)->where('property_type', $p_type)->orderBy('id', 'desc')->paginate(10);
        }
        return view('project-list', compact('projects', 'p_type', 'type'));
    }

    public function projectView(Project $project){
        $view = true;
        $type = $project->type;
        return view('project-view', compact('project', 'type', 'view'));
    }
}
