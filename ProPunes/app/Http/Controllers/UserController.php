<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')->with(['users' => $users]);
    }

    function create($request){
        $request->validate([
            'id' => 'required|int|unique',
            'email' => 'required|email|unique:users,email,',
            'name' => 'required|string',
            'surname' => 'required|string',
            'password' => 'nullable|string|min:6',
            'role' => 'required|in:punedhenes,punekerkues',
        ]);
        if(User::create(['id' => request()->id, 'email' => request()->email, 'name' => request()->name, 'surname' => request()->surname, 'password' => request()->password, 'role' => request()->role])){
            return redirect()-> route('users.index');
        }
        else {
            return back()->with('error', 'Something went wrong');
        }
    }
    public function edit($id)
    {
        $user = User::find($id);
    
        return view('users.update', ['user' => $user]);
    }
    
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        if ($user) {
            $user->id = $request->id;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->password = $request->password;
            $user->role = $request->role;
            if ($user->save()) {
                return redirect()->route('users.index')->with('success', 'User updated successfully');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'User not found');
        }
    }
    public function delete($id)
{
    $user = User::findOrFail($id);
    if ($user->delete()) {
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    } else {
        return back()->with('error', 'Something went wrong');
    }
}
}