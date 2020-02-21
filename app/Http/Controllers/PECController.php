<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PECController extends Controller
{
  public function pec(){
    $pecstudent_info = DB::table('student_tbl')
                          ->where(['student_department'=>5])
                          ->get();
    $manage_student = view('admin.pec')
                          ->with('pecstudent_info',$pecstudent_info);
    return view('layout')->with('pec',$manage_student);
  }
}
