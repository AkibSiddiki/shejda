<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\InfoPage;
use App\Models\NewsEvent;
use App\Models\Project;
use App\Models\Team;
use App\Models\Client;
use App\Models\Job;
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
        $contact = InfoPage::where('slug', 'contact-us')->get()->first();
        return view('home', compact('sliders', 'welcome', 'why', 'projects', 'news', 'contact'));
    }

    public function ourStory()
    {
        $ourStory = InfoPage::where('slug', 'our-story')->get()->first();
        return view('our-story', compact('ourStory'));
    }

    public function missionVision(){
        $mission = InfoPage::where('slug', 'our-mission')->get()->first();
        $vision = InfoPage::where('slug', 'our-vision')->get()->first();
        return view('our-mission-vision', compact('mission', 'vision'));
    }

    public function boardOfDirectors(){
        $directors = Team::where('type', 1)->orderBy('position', 'ASC')->get();
        return view('board-of-directors', compact('directors'));
    }

    public function managementTeam(){
        $managements = Team::where('type', 2)->orderBy('position', 'ASC')->get();
        return view('management-team', compact('managements'));
    }

    public function clients(){
        $clients = Client::orderBy('title', 'ASC')->get();
        return view('clients', compact('clients'));
    }

    public function landowners(){
        $landowners = InfoPage::where('slug', 'landowners')->get()->first();
        return view('landowners', compact('landowners'));
    }

    public function buyers(){
        $buyers = InfoPage::where('slug', 'buyers')->get()->first();
        return view('buyers', compact('buyers'));
    }

    public function customers(){
        $customers = InfoPage::where('slug', 'customers')->get()->first();
        return view('customers', compact('customers'));
    }

    public function contactUs(){
        $contact = InfoPage::where('slug', 'contact-us')->get()->first();
        return view('contact', compact('contact'));
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


    public function jobList(){
        $jobs = Job::orderBy('id', 'desc')->paginate(10);
        return view('jobs', compact('jobs'));
    }

    public function jobView(Job $job){
        return view('job-view', compact('job'));
    }

    public function jobApply(Job $job, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'cv' => 'required|mimes:pdf,docx,doc'
        ]);

        $file = $request->file('cv');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/jobs', $filename);

        Job::create([
            'job_id' => $job->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'cv' => $filename
        ]);

        session()->flash('success', 'Application sent successfully');
        return redirect()->back();
    }
}
