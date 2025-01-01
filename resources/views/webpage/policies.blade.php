@extends('webpage.master')

@section('content')

<section class="policies">
    <h1>السياسات واللوائح</h1>
    <br><br>
    <div class="policy-grid">
        @foreach ($policies as $policie)
        <div class="policy-item">
            <p> {{$policie->policies_title}} </p>
            <a href="{{route('policie_show',$policie->id)}}"><button class="download-btn">تحميل</button></a>

        </div>
        @endforeach

    </div>
</section>



<br><br><br><br><br><br><br><br><br><br>

@endsection
