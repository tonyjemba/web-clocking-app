<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        //this is the vue component
        return Inertia::render('LoginPage');
    }
    public function login(Request $request)
    {

        //request data is validated (returns error for invalid input)
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        /*data is compared with what is in the database(users table) with the attempt method
        if it returns true a session for authentication is created and the user is redirected
        the dashboard
        */
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //navigate to the dasboard with the athenticated user email and type
            return inertia('DashboardPage', ['email' => Auth::user()->email, 'type' => Auth::user()->type]);
        }

        //in case of any errors  in the request data  this error message is generated
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        //logs out user, cancels session
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
