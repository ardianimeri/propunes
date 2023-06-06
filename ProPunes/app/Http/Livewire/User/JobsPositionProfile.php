<?php

namespace App\Http\Livewire\User;

use App\Models\JobsPosition;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class JobsPositionProfile extends Component
{
    public function render()
    {
        $userJobsPosition = JobsPosition::where('user_id',Auth::user())->get();
        if(!$userJobsPosition->isEmpty()){
            $jobPosition = new JobsPosition();
            $jobPosition->user_id = Auth::user()->id;
            $jobPosition->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.user.user-profile-component',['user'=>$user])->layout('layouts.front');
    }
}
