<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\Models\User $user The user to be deleted
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->is_admin === 1) {
            if (User::checkIfLastAdminExists()) {
                return redirect()->route('users')->with('message', 'Last admin can\'t be deleted!');
            }
        }

        $user->delete();
        return redirect()->route('users')->with('message', 'User deleted successfully');
    }

    /**
     * Display the specified user profile.
     *
     * @param  int $id The ID of the user whose profile to display
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id !== $user->id) {
            return redirect()->route('home');
        }
        return view('user_profile', compact('user'));
    }

    public static function edit(): View
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);
    
        // Check if the request has a new profile picture
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image/users_profiles_pics'), $filename);
            $user->profile_pic = $filename;
        }
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->bio = $request->input('bio');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
    
        $user->save();
    
        return redirect()->route('user.profile', $user->id)->with('success', 'User Information Updated Successfully');
    }
}
