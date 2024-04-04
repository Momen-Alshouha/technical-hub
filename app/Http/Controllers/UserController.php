<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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

    public static function edit() : View {
        return view('edit_profile');
    }
}
