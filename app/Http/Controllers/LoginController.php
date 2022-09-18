<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Cookie;
use DB;
use File;

class LoginController extends Controller
{

    public function React_test(){ // React test
        return response()->json([
            'value' => "Testing..."
        ]);
    }


    // Login jobseekers
    public function User_access(Request $req){

        $mail = $req->Email;
 
        if($User = DB::connection('mysql2')->table('general')->where('Email', '=', $mail)->first()){

            if(Hash::check($req->pass, $User->Pass)){
                return redirect(route('Dashboard'))->with('Email', $mail)->with('User', $User->isActive);
            }else{
                return redirect(route('User-login'))->with('error', 'Not a Valid User');
            }

        }else{     
            return redirect(route('User-login'))->with('error', 'Not a Valid User');
        }

    }


    // Register New jobseekers Account
    public function User_register(Request $request){

        $validated = $request->validate([
            'name'         => 'required|max:100',
            'email'        => 'required|unique:mysql3.general,Email|unique:mysql2.general,Email|max:55',
            'Organization' => 'required|max:100',
            'Designation'  => 'required|max:40',
            'Field'        => 'required|max:100',
            'Password'     => 'required|confirmed|min:5|max:25',
            'Phone'        => 'required|unique:mysql3.general,Phone|max:15',
            'Birthdate'    => 'required|before:-18 years',
            'uploadImage'  => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'gender'       => 'required'
            
        ]);

        $imageName = time().'_'.rand().'.'.$request->uploadImage->extension(); 
        $path = "files/Users/images/".$request->email;

        $imgLoC = $path.'/'.$imageName;
        $path = public_path($path);
        
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->uploadImage->move($path, $imageName);

        $Password = Hash::make($request->Password);
        $Hash = md5(rand(101, 809));

        DB::connection('mysql2')->table('general')->insert(
            array(
                   'Name'         =>  $request->name,
                   'Email'        =>  $request->email,
                   'Pass'         =>  $Password,
                   'Phone'        =>  $request->Phone,
                   'Organization' =>  $request->Organization,
                   'Designation'  =>  $request->Designation,
                   'Field'        =>  $request->Field,
                   'Birthdate'    =>  $request->Birthdate,
                   'Gender'       =>  $request->gender,
                   'Picture'      =>  $imgLoC,
                   'isActive'     => 'semi',
                   'Hashes'       => $Hash
            )
       );

        return redirect(route('User-login'));

    }


    // Register jobseeker's professional details
    public function Next_registration(Request $request){

        $validated = $request->validate([
            'Institute'    => 'max:100',
            'Social'       => 'max:150',
            'Country'      => 'required',
            'City'         => 'required',
            'Location'     => 'required|max:100',
            'Portfolio'    => 'max:150',
            'Skills'       => 'required|max:150',
            'Expertise'    => 'required|max:150',
            'Experience'   => 'max:400',
            'Language'     => 'required|max:150',
            'Cover'        => 'required|max:200',
            'Bio'          => 'required|max:150',
            'Certificates' => 'max:400',
            'uploadResume' => 'mimes:pdf|max:2048',
            
        ]);

        $FileName = time().'_'.rand().'.'.$request->uploadResume->extension(); 
        $path = "files/Users/Resume/".$request->email;

        $FileLoC = $path.'/'.$FileName;
        $path = public_path($path);
        
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->uploadResume->move($path, $FileName);

        DB::connection('mysql2')->table('general')->insert(
            array(
                   'Name'        =>  $request->name,
                   'Email'       =>  $request->email,
                   'Pass'        =>  $Password,
                   'Phone'       =>  $request->Phone,
                   'Institute'   =>  $request->Institute,
                   'Designation' =>  $request->Designation,
                   'Field'       =>  $request->Field,
                   'Birthdate'   =>  $request->Birthdate,
                   'Gender'      =>  $request->gender,
                   'Picture'     =>  $imgLoC,
                   'isActive'    => 'semi',
                   'Hashes'      => $Hash
            )
       );

        return redirect(route('Dashboard'));
    }


    // Login Clients
    public function Client_access(Request $req){

        $mail = $req->Email;
 
        if($User = DB::connection('mysql3')->table('general')->where('Email', '=', $mail)->first()){

            if(Hash::check($req->pass, $User->Pass)){
                return redirect(route('Dashboard'))->with('Email', $mail)->with('User', $User->isActive);
            }else{
                return redirect(route('Client-login'))->with('error', 'Not a Valid User');
            }

        }else{     
            return redirect(route('Client-login'))->with('error', 'Not a Valid User');
        }

    }


    // Register New Client Account
    public function Client_register(Request $request){

        $validated = $request->validate([
            'name'        => 'required|max:100',
            'email'       => 'required|unique:mysql3.general,Email|unique:mysql2.general,Email|max:55',
            'Institute'   => 'required|max:100',
            'Web'         => 'max:120',
            'Designation' => 'required|max:40',
            'NID'         => 'required|unique:mysql3.general,NID|max:40',
            'Location'    => 'required|max:225',
            'ZIP'         => 'required|max:25',
            'City'        => 'required|max:25',
            'password'    => 'required|confirmed|min:5|max:25',
            'Phone'       => 'required|unique:mysql3.general,Phone|max:15',
            'Birthdate'   => 'required|before:-18 years',
            'uploadImage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'gender'      => 'required'
        ]);

        $imageName = time().'_'.rand().'.'.$request->uploadImage->extension(); 
        $path = "files/Clients/images/".$request->email;

        $imgLoC = $path.'/'.$imageName;
        $path = public_path($path);
        
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->uploadImage->move($path, $imageName);

        $Password = Hash::make($request->password);
        $Hash = md5(rand(101, 809));

        DB::connection('mysql3')->table('general')->insert(
            array(
                   'Name'        =>  $request->name,
                   'Email'       =>  $request->email,
                   'Website'     =>  $request->Web,
                   'Pass'        =>  $Password,
                   'Phone'       =>  $request->Phone,
                   'Institute'   =>  $request->Institute,
                   'Designation' =>  $request->Designation,
                   'NID'         =>  $request->NID,
                   'Location'    =>  $request->Location,
                   'Zip'         =>  $request->ZIP,
                   'City'        =>  $request->City,
                   'Birthdate'   =>  $request->Birthdate,
                   'Gender'      =>  $request->gender,
                   'Picture'     =>  $imgLoC,
                   'isActive'    => 'CLi',
                   'Hashes'      => $Hash
            )
       );

        return redirect(route('Client-login'));

    }


    // Logout user
    public function Logout(){

        session()->flush();
        return redirect(route('Home'));
    }

}
