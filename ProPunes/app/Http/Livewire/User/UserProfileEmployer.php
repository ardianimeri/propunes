<?php

namespace App\Http\Livewire\User;

use App\Models\JobsPosition;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileEmployer extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $jobpositions = $user->jobposition()->get();
        return view('livewire.user.user-profile-employer', ['user' =>$user, 'jobpositions' => $jobpositions])->layout('layouts.front');
    }
}
