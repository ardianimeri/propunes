<?php

namespace App\Http\Livewire\User;

use App\Models\JobsPosition;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileEmployer extends Component
{
    public $jobs = [];
    public $data = [];

    public function mount()
    {
        // Fetch jobs associated with the authenticated user
        $this->jobs = Job::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        foreach ($this->jobs as $job) {
            $applicantsForJob = $job->applicants()->get();
            $this->data[] = [
                'job' => $job,
                'applicants' => $applicantsForJob,
            ];
        }
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        $jobpositions = $user->jobposition()->get();
        return view('livewire.user.user-profile-employer', ['user' =>$user, 'jobs' => $this->jobs, 'data' => $this->data])->layout('layouts.front');
    }
}
