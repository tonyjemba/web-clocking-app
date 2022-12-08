<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller
{
    public function showDashboard()
    {
        //this is the vue component
        return Inertia::render('DashboardPage');
    }
}
