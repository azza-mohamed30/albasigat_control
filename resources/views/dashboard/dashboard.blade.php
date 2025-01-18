
@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
مؤسسة امنة الوقفية
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
عرض
@endsection
@section('content')

<div class="card">
<br>
    {{-- <section class="content">

        <div class="row">



         </div>

    </section><!-- end of content -->

</div><!-- end of content wrapper --> --}}
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$news_count}}</h3>

              <p> إجمالي الأخبار </p>
            </div>

            <a href="{{ route('news.index')}}" class="small-box-footer"> تفاصيل <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$employee_count}}</h3>

              <p> إجمالي الموظفين </p>
            </div>

            <a href="{{ route('employees.index')}}" class="small-box-footer"> تفاصيل <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$opportunity_count}}</h3>

              <p> إجمالي الفرص المتاحة </p>
            </div>

            <a href="{{ route('opportunity.index')}}" class="small-box-footer"> تفاصيل <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$contact_us_count}}</h3>

              <p> رسائل الزوار </p>
            </div>

            <a href="{{ route('contact_us.index')}}" class="small-box-footer"> تفاصيل <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
      {{-- **************************************************************** --}}



      <section class="content">
        @foreach ($statistics as $statistic )
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$statistic->projects}}</h3>

                <p> إجمالي عدد المشاريع </p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$statistic->volunteers}}</h3>

                <p> إجمالي عدد المتطوعين </p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$statistic->events}}</h3>

                <p> إجمالي عدد الفعاليات  </p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$statistic->recipients}}</h3>

                <p>  إجمالي عدد المستفيدين </p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

   @endforeach
 </section>

 <img src="{{asset('assets/images/home-basqat.jpg')}}" alt="">
</div>
@endsection



