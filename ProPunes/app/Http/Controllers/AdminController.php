<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;


class AdminController extends Controller
{
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->back()->with('success', 'User u fshi me sukses.');
    }

    public function deleteJob($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->back()->with('success', 'Job deleted successfully.');
    }
    
    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin',
        ]);


        $user = new User();
        $user->id = $validatedData['id'];
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = $validatedData['role'];
        $idExists = User::where('id', $request->id)->exists();
        $user->save();

        return redirect()->route('users.dashboardadmin');
    }

}
