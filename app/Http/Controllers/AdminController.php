<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{

  public function admin_dashboard(){
    return view('admin.dashboard');
  }

  public function student_dashboard(){
    return view('student.dashboard');
  }

  public function student_login_dashboard(Request $request){
    $email = $request->student_email;
    $password = md5($request->student_password);
    $result = DB::table('student_tbl')
    ->where('student_email',$email)
    ->where('student_password',$password)
    ->first();

    // echo'</pre>';
    // print_r($result);

    if($result){
      Session::put('student_email', $result->student_email);
      Session::put('student_id',$result->student_id);
      
       return redirect()->route('student_dashboard');

    }

    else{
      Session::put('exception','Email or Password Invalid');
      return Redirect::to('/');
    }
  }

#logout part
public function logout(){
  Session::put('admin_email',null);
  Session::put('admin_password',null);

  return Redirect::to('/admin');
}

#view profile & settings
  public function viewprofile(){
    return view('admin.view');
  }

  public function settings(){
    return view('admin.settings');
  }

#dashboard for admin
    public function login_dashboard(Request $request){
      $email = $request->admin_email;
      $password = md5($request->admin_password);
      $result = DB::table('admin_tbl')
      ->where('admin_email',$email)
      ->where('admin_password',$password)
      ->first();

      // echo'</pre>';
      // print_r($result);

      if($result){
        Session::put('admin_email', $result->admin_email);
        Session::put('admin_id',$result->admin_id);
        // return Redirect::to('/admin_dashboard');
         return redirect()->route('admin_dashboard');

      }

      else{
        Session::put('exception','Email or Password Invalid');
        return Redirect::to('/admin');
      }
    }
}
