<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function destroy(user $user)
    {
        if($user->is_admin===1) {
            if(User::checkIfLastAdminExists()) {
                return redirect()->route('users')->with('message', 'Last admin can\'t be deleted!');
            }
        }

        $user->delete();
        return redirect()->route('users')->with('message', 'user deleted successfully');
    }

    public function show($id)
    {
        $user = User::findOrFail($id); 

        if (auth()->user()->id !== $user->id) {
            return redirect()->route('home');
        }

        return view('user_profile', compact('user'));
    }
}
