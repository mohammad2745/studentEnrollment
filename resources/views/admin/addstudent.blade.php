@extends('layout')

@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>
            <p class="alert-success">
              <?php
                $exception = Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
               ?>
            </p>
            <form class="forms-sample" method="post" action="{{ route('savestudent') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" placeholder="Student roll">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Father's Name</label>
                    <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Father's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mother's Name</label>
                    <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Mother's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone No</label>
                    <input type="text" class="form-control p-input" name="student_phone" placeholder="Student Phone no">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" placeholder="Student Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control p-input" name="student_email" placeholder="Student Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Admission Year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Student Admission Year">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <select class="form-control p-input" name="student_department">
                      <option value="1">CSE</option>
                      <option value="2">EEE</option>
                      <option value="3">MEC</option>
                      <option value="4">MBA</option>
                      <option value="5">PEC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload file</label>
                    <div class="row">
                      <div class="col-12">
                        <!-- <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" class="form-control-file" name="student_image" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Student Image</small> -->
                        <input type="file" name="student_image" >
    <!-- <input type="submit" value="Upload Image" name="submit"> -->
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
