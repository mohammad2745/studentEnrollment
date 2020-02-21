@extends('layout')

@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All student table</h2>
      <?php
        $exception = Session::get('exception');
        if($exception){
          echo $exception;
          Session::put('exception',null);
        }
       ?>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Student Name</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Adress</th>
                  <th>Department</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($allteacher_info as $v_teacher)
              <tr>
                  <td>{{ $v_teacher->teachers_name }}</td>
                  <td>{{ $v_teacher->teachers_phone }}</td>
                  <td><img src="{{ URL::to($v_teacher->teachers_image) }}" height="88" width="100" style="border-radius: 50%;"></td>
                  <td>{{ $v_teacher->teachers_address }}</td>
                  <td>
                    @if($v_teacher->teachers_department==1)
                    <span class="label label-success">{{ 'CSE' }}</span>
                    @elseif($v_teacher->teachers_department==2)
                    <span class="label label-success">{{ 'EEE' }}</span>
                    @elseif($v_teachers->teachers_department==3)
                    <span class="label label-success">{{ 'MEC' }}</span>
                    @elseif($v_teacher->teachers_department==4)
                    <span class="label label-success">{{ 'MBA' }}</span>
                    @elseif($v_teacher->teachers_department==5)
                    <span class="label label-success">{{ 'PEC' }}</span>
                    @else
                    <span class="label label-success">{{ 'Not Defined' }}</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ URL::to('/deleteteacher/'.$v_teacher->teachers_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
