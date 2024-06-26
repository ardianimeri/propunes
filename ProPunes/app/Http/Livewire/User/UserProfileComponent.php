<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileComponent extends Component
{
    public $user;
    public $applications;

    public function mount()
    {
        $this->user = Auth::user();
        $this->applications = $this->user->applications()->with('applicants')->get();
    }
    public function render()
    {
        return view('livewire.user.user-profile-component',['user' =>$this->user, 'applications' => $this->applications])->layout('layouts.front');
    }
}
