@extends('webpage.master')

@section('content')

<section class="policies">
    <h1>التقارير والخطط</h1>
    <br><br>
    <div class="policy-grid">
        @foreach ($reports as $report)
        <div class="policy-item">
            <p> {{$report->title}} </p>
            <a href="{{route('report_show',$report->id)}}"><button class="download-btn">تحميل</button></a>

        </div>
        @endforeach


    </div>
</section>



<br><br><br><br>


@endsection
