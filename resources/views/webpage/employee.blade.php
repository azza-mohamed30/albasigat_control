@extends('webpage.master')

@section('content')


<br><br>

 <section class="introduction">
    <h1>الموظفون </h1>

 <div class="employee-container">
    @foreach ($employees as $employee)
    <div class="employee-card">

        <div class="employee-icon">
            <!-- Replace with your actual icon -->
            <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
          </div>
          <h3 class="employee-name">{{$employee->name}}</h3>
          <p class="employee-title">{{$employee->job}}</p>
        </div>
        @endforeach
    </div>

</section>
    {{-- <div class="employee-card">
        <div class="employee-icon">
          <!-- Replace with your actual icon -->
          <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
        </div>
        <h3 class="employee-name">الاسم</h3>
        <p class="employee-title">الوظيفة</p>
      </div>
      <div class="employee-card">
        <div class="employee-icon">
          <!-- Replace with your actual icon -->
          <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
        </div>
        <h3 class="employee-name">الاسم</h3>
        <p class="employee-title">الوظيفة</p>
      </div>
      <div class="employee-card">
        <div class="employee-icon">
          <!-- Replace with your actual icon -->
          <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
        </div>
        <h3 class="employee-name">الاسم</h3>
        <p class="employee-title">الوظيفة</p>
      </div>
    <div class="employee-card">
      <div class="employee-icon">
        <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
      </div>
      <h3 class="employee-name">الاسم</h3>
      <p class="employee-title">الوظيفة</p>
    </div>
    <div class="employee-card">
      <div class="employee-icon">
        <img src="{{asset('assets/images/emp.png')}}" alt="Employee Icon">
      </div>
      <h3 class="employee-name">الاسم</h3>
      <p class="employee-title">الوظيفة</p>
    </div> --}}







 <br><br><br><br><br><br>

 @endsection
