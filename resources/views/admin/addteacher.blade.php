@extends('layout')

@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Teachers</h2>
            <p class="alert-success">
              <?php
                $exception = Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
               ?>
            </p>
            <form class="forms-sample" method="post" action="{{ route('saveteacher') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Teache Name</label>
                    <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone No</label>
                    <input type="text" class="form-control p-input" name="teachers_phone" placeholder="Teacher Phone no">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="teachers_address" placeholder="Teacher Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <select class="form-control p-input" name="teachers_department">
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
                        <input type="file" class="form-control-file" name="Teacher_image" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Teacher Image</small> -->
                        <input type="file" name="teachers_image" >
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
