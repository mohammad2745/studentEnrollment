@extends('student_layout')

@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All students</h2>
      @php
      $students=DB::table('student_tbl')
                          ->count('student_id');
      @endphp
      <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align:center;">{{ $students }}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All teachers</h2>
      @php
      $teachers=DB::table('teachers_tbl')
                          ->count('teachers_id');
      @endphp
      <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align:center;">{{ $teachers }}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tuition fee</h2>
      <p style="font-family: cursive; font-size:18px; font-weight: bold; text-align:center;">Monthly Fee:2500</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Courses</h2>
      <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align:center;">12</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>

@endsection
