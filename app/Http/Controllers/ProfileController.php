<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
// use App\Http\Controllers\SkillTest;
use App\Models\SkillTest;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    
    public function index()
    {
        $skill_tests = SkillTest::where('user_id',Auth::id())->get();
        return view('profile.edit', [
            'skill_tests' => $skill_tests
        ]);   
        
        //Userの全件データ取得
        $users = User::sortBy('created_at')->paginate(10);
    
        return view('profile.browse', [
            'users' => $users
            ]);
    }
    
    
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    
     public function browse(Request $request): View
    {
        $user = User::find($request->user_id);
        $skill_tests = SkillTest::where('user_id',$request->user_id)->get();
        return view('profile.browse', [
            'user' => $user,
            'skill_tests' => $skill_tests
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
