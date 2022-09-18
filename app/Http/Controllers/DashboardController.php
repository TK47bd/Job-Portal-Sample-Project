<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function viewDashboard(){

        if(Session::has('Email')){
            $Email = Session::get('Email');
            $User_prev = Session::get('User');
        }else{
            return redirect(route('Home'));
        }

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        if($User_prev === 'CLi'){
            $Con = 'mysql3';
        }else if($User_prev === 'user' || $User_prev === 'semi'){
            $Con = 'mysql2';
        }else{
            return redirect(route('Home'));
        }

        $User = DB::connection($Con)->table('general')->where('Email', '=', $Email)->first();

        Session::put('Email', $Email);
        Session::put('User', $User_prev);

        return view('dashboard');
    }
}
