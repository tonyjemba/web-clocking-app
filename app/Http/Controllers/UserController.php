<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function addUser(Request $request)
    {

        //Only users of type admin will add users
        if (Auth::user()->type !== 'admin') {
            return Inertia::render('DashboardPage', ['message' => 'You are not Admin, you cannot add user account']);
        }

        //request data is validated (returns error for invalid input)
        $fields = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'type' => ['required', 'string']
        ]);

        //saving new user to the database

        $user = new User;

        $user->name = $fields['name'];
        $user->email = $fields['email'];
        $user->password = $fields['password'];
        $user->type = $fields['type'];

        $user->save();

        return Inertia::render('DashboardPage', ['message' => 'User account created successfully']);
        
    }
}
