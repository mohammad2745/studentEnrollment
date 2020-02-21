<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class TeacherController extends Controller
{
  public function addteacher(){
    return view('admin.addteacher');
  }

  public function saveteacher(Request $request){
    $data=array();
    $data['teachers_name'] = $request->teachers_name;
    $data['teachers_phone'] = $request->teachers_phone;
    $data['teachers_address'] = $request->teachers_address;
    $data['teachers_department'] = $request->teachers_department;
    $image=$request->file('teachers_image');
    $image_url='';

    if($image){
      $image_name=$image->getClientOriginalName();
      $ext = strtolower($image->getClientOriginalExtension());
      $image_full_name = $image_name.'.'.$ext;
      $upload_path = 'images/';
      $image_url = $upload_path.$image_full_name;
      $success = $image->move($upload_path,$image_full_name);

      if($success){
        $data['teachers_image'] = $image_url;

        DB::table('teachers_tbl')->insert($data);
        Session::put('exception','Teachers added successfully');
        return redirect()->route('addteacher');
      }
    }

  $data['image'] = $image_url;
      DB::table('teachers_tbl')->insert($data);
      Session::put('exception','Teacher added successfully');
      return redirect()->route('addteacher');


    DB::table('teachers_tbl')->insert($data);
    Session::put('exception','Teachers added successfully');
    return redirect()->route('addteacher');
  }

  public function allteacher(){
    $allteacher_info = DB::table('teachers_tbl')->get();
    $manage_teacher = view('admin.allteacher')->with('allteacher_info',$allteacher_info);
    return view('layout')->with('allteacher',$manage_teacher);
  }
}
