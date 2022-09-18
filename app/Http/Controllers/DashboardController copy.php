<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use DB;

class DashboardController extends Controller
{
    public function viewDashboard(){

        if(session()->has('User_prev')){
            $Email = session()->get('Email');
            $User_prev = session()->get('User_prev');
        }else if(Cookie::get('info')){
            $Email = Cookie::get('User');
            $User_prev = Cookie::get('info');
        }else{
            return redirect(route('Home'));
        }

        if($User_prev === 'CLi'){
            $Con = 'mysql3';
            Cookie::queue('info', $User_prev, 60);
        }else if($User_prev === 'user' || $User_prev === 'semi'){
            $Con = 'mysql2';
            Cookie::queue('info', $User_prev, 60);
        }else{
            return redirect(route('Home'));
        }

        $User = DB::connection($Con)->table('general')->where('Email', '=', $Email)->first();
        Cookie::queue('User', $Email, 60);
        return view('dashboard', ['User' => $User]);
    }
}
