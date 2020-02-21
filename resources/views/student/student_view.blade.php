@extends('student_layout')

@php
  function convert_department($value){
    $values = [
      1=>'CSE',
      2=>'EEE',
      3=>'MEC',
      4=>'MBA',
      5=>'PEC',
    ];

    return $values[$value];
  }
@endphp

@section('content')

<div class="row user-profile">
  <div class="col-lg-12 side-left">
    <div class="card mb-6">
      <div class="card-body avatar">
        <h2 class="card-title">Student Info</h2>
        <img src="{{ URL::to($student_profile->student_image) }}" alt="">
        <p class="name">{{ $student_profile->student_name }}</p>
        <p class="designation">-  {{ $student_profile->student_roll }} -</p>
        <a class="email" href="#">{{ $student_profile->student_email }}</a>
        <a class="number" href="#">{{ $student_profile->student_phone }}</a>
      </div>
    </div>
    <div class="card mb-6">
      <div class="card-body overview">
        <p>Mawlana Bhasani Science and Technology</p>
        <div class="wrapper about-user">
          <h2 class="card-title mt-4 mb-3">About</h2>
          <p>Total information of student</p>
        </div>
        <div class="info-links">
          <a class="social-link">
            <i class="icon-social-facebook icon">Father's Name:</i>
            <span>{{ $student_profile->student_fathersname }}</span>
          </a>
          <a class="social-link">
            <i class="icon-social-facebook icon">Mother's Name:</i>
            <span>{{ $student_profile->student_mothersname }}</span>
          </a>
          <a class="social-link">
            <i class="icon-social-facebook icon">Address:</i>
            <span>{{ $student_profile->student_address }}</span>
          </a>
          <a class="social-link">
            <i class="icon-social-facebook icon">Department:</i>
            <span>{{ convert_department($student_profile->student_department) }}</span>
          </a>
          <a class="social-link">
            <i class="icon-social-facebook icon">Admission Year:</i>
            <span>{{ $student_profile->student_admissionyear }}</span>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
