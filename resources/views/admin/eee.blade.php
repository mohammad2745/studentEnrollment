@extends('layout')

@section('content')

<div class="card">
  <div class="card-body">
    <h2 class="card-title">EEE student table</h2>
    <div class="row">
      <div class="col-12">
        <table id="order-listing" class="table table-striped" style="width:100%;">
          <thead>
            <tr>
                <th>Student Roll</th>
                <th>Student Name</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Adress</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($eeestudent_info as $v_student)
            <tr>
                <td>{{ $v_student->student_roll }}</td>
                <td>{{ $v_student->student_name }}</td>
                <td>{{ $v_student->student_phone }}</td>
                <td><img src="{{ URL::to($v_student->student_image) }}" height="88" width="100" style="border-radius: 50%;"></td>
                <td>{{ $v_student->student_address }}</td>
                <td>
                  @if($v_student->student_department==1)
                  <span class="label label-success">{{ 'CSE' }}</span>
                  @elseif($v_student->student_department==2)
                  <span class="label label-success">{{ 'EEE' }}</span>
                  @elseif($v_student->student_department==3)
                  <span class="label label-success">{{ 'MEC' }}</span>
                  @elseif($v_student->student_department==4)
                  <span class="label label-success">{{ 'MBA' }}</span>
                  @elseif($v_student->student_department==5)
                  <span class="label label-success">{{ 'PEC' }}</span>
                  @else
                  <span class="label label-success">{{ 'Not Defined' }}</span>
                  @endif
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                  <button class="btn btn-outline-warning">Edit</button>
                  <button class="btn btn-outline-danger">Delete</button>
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
