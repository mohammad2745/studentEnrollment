<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AllstudentsController extends Controller
{
  #view student
    public function allstudent(){
      $allstudent_info = DB::table('student_tbl')->get();
      $manage_student = view('admin.allstudent')->with('allstudent_info',$allstudent_info);
      return view('layout')->with('allstudent',$manage_student);
    }

#student delete
    public function deletestudent($student_id){
      DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->delete();
      return redirect()->route('allstudent');
    }

#student edit
public function editstudent($student_id){
  $student_description_edit = DB::table('student_tbl')
                              ->select('*')
                              ->where('student_id',$student_id)
                              ->first();
  $manage_description_student = view('admin.edit')
                              ->with('student_description_edit',$student_description_edit);
  return view('layout')
              ->with('view',$manage_description_student);
}

#student view
    public function viewstudent($student_id){
      $student_description_view = DB::table('student_tbl')
                                  ->select('*')
                                  ->where('student_id',$student_id)
                                  ->first();
      $manage_description_student = view('admin.view')
                                  ->with('student_description_view',$student_description_view);
      return view('layout')
                  ->with('view',$manage_description_student);

    }

#update student

    public function updatestudent(Request $request, $student_id){
      $data = array();
      $data['student_name']=$request->student_name;
      $data['student_roll']=$request->student_roll;
      $data['student_fathersname']=$request->student_fathersname;
      $data['student_mothersname']=$request->student_mothersname;
      $data['student_email']=$request->student_email;
      $data['student_phone']=$request->student_phone;
      $data['student_address']=$request->student_address;
      $data['student_password']=$request->student_password;
      $data['student_admissionyear']=$request->student_admissionyear;

      DB::table('student_tbl')
              ->where('student_id',$student_id)
              ->update($data);

      Session::put('exception','Student updated successfully');
      return redirect()->route('allstudent');
    }
}
