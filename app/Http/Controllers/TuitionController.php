<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuitionController extends Controller
{
    public function tuitionfee(){
      return view('admin.tuitionfee');
    }
}
