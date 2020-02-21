<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MECController extends Controller
{
  public function mec(){
    $mecstudent_info = DB::table('student_tbl')
                          ->where(['student_department'=>3])
                          ->get();
    $manage_student = view('admin.mec')
                          ->with('mecstudent_info',$mecstudent_info);
    return view('layout')->with('mec',$manage_student);
  }
}
