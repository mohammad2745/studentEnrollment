<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentsController extends Controller
{

#add student part
    public function addstudent(){
      return view('admin.addstudent');
    }
#save student part
    public function savestudent(Request $request){
      $data=array();
      $data['student_name'] = $request->student_name;
      $data['student_roll'] = $request->student_roll;
      $data['student_fathersname'] = $request->student_fathersname;
      $data['student_mothersname'] = $request->student_mothersname;
      $data['student_email'] = $request->student_email;
      $data['student_phone'] = $request->student_phone;
      $data['student_address'] = $request->student_address;
      $data['student_password'] = md5($request->student_password);
      $data['student_admissionyear'] = $request->student_admissionyear;
      $data['student_department'] = $request->student_department;
      $image=$request->file('student_image');
      $image_url='';

      if($image){
        $image_name=$image->getClientOriginalName();
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'images/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);

        if($success){
          $data['student_image'] = $image_url;

          DB::table('student_tbl')->insert($data);
          Session::put('exception','Student added successfully');
          return redirect()->route('addstudent');
        }
      }

    $data['image'] = $image_url;
        DB::table('student_tbl')->insert($data);
        Session::put('exception','Student added successfully');
        return redirect()->route('allstudent');


      DB::table('student_tbl')->insert($data);
      Session::put('exception','Student added successfully');
      return redirect()->route('allstudent');
    }

  #add student part
    public function student_profile(){
        $student_id=Session::get('student_id');
          $student_profile = DB::table('student_tbl')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();

          $manage_student = view('student.student_view')
                            ->with('student_profile',$student_profile);
          return view('student_layout')
                            ->with('student_view',$manage_student);
      }
}
