<?php
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('users')->with('success', 'user deleted succesfully');
    }
}
