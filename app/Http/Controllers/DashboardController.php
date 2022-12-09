<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class DashboardController extends Controller
{
    public function showDashboard()
    {
        //this is the vue component
        return Inertia::render('DashboardPage');
    }

    //registers timein in the database
    public function timeIn(Request $request)
    {

        $report = new Report;

        $report->date = $request->date;
        $report->timein = $request->time;
        $report->timeout = "waiting...";

        $report->save();
    }

    //registers time out in the last record in the database

    public function timeout(Request $request)
    {

        Report::where('timeout', 'waiting...')
            ->update(['timeout' => $request->time]);
    }

    //checks whether the user has registered time in or not
    public function isRegisteredIn()
    {
        $registered = Report::where('timeout', 'LIKE', 'waiting...')->exists();

        //return Inertia::render('DashboardPage', ['registeredTimeIn' => $registered]);
    }

    //get report section data
    public function reportdata()
    {

        //all data from the reports table
        $reportData = Report::select('date', 'timein', 'timeout')->get()->toJson();
        
        //authenticated user email
        $email = Auth::user()->email;

        //type of authenticated user
        $type = Auth::user()->type;

        //other users
        $otherUsers = User::all()->except(Auth::id())->toJson();
        //returns to dashboard with data as props
        return Inertia::render('DashboardPage', ['reportData' => $reportData, 'email' => $email,'otherusers'=>$otherUsers, 'type'=>$type]);
    }
}
