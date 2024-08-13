<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Applicant;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->paginate(10);
        return view('admin.jobs-index', compact('jobs'));
    }

    public function applicants(Job $job){
        $applicants = $job->applicants()->orderBy('id', 'ASC')->paginate(10);
        return view('admin.job-applicants-index', compact('job', 'applicants'));
    }


    public function applicantSeen(Applicant $applicant)
    {
        $applicant->is_seen = 1;
        $applicant->save();
        return redirect()->back();
    }

    public function create()
    {
        return view('admin.job-create');
    }

    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'title' => 'required|min:3|max:65|string',
            'type' => 'required|numeric|in:1,2,3',
            'location' => 'required|string',
            'salary' => 'required|integer',
            'is_negotiable' => 'required|in:1,0',
            'experience' => 'required|integer|min:0',
            'expertise' => 'required|numeric',
            'due_date' => 'required|date',
            'benefits' => 'nullable|string',
            'required_skills' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
        ]);



        $job = Job::create($validateData);
        if ($job == null) {
            return redirect()->route('panel.job.index')->with('error', 'Job created failed.');
        }

        return redirect()->route('panel.job.index')->with('success', 'Job uploaded successfully.');


    }

    public function edit(Job $job)
    {
        return view('admin.job-edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {

        $validateData =  $request->validate([
            'title' => 'nullable|min:3|max:65|string',
            'type' => 'nullable|numeric|in:1,2,3',
            'location' => 'nullable|string',
            'salary' => 'nullable|integer',
            'is_negotiable' => 'nullable|in:1,0',
            'experience' => 'nullable|integer|min:0',
            'expertise' => 'nullable|numeric',
            'due_date' => 'nullable|date',
            'benefits' => 'nullable|string',
            'required_skills' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
        ]);

        $job->update($validateData);
        return redirect()->route('panel.job.index')->with('error', 'Job updated failed.');

    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('panel.job.index')->with('success', 'Job deleted successfully.');
    }

    public function statusToggle(Job $job)
    {
        $job->update(['status' => !$job->status]);
        return redirect()->route('panel.job.index')->with('success', 'Job status updated successfully.');
    }
}
