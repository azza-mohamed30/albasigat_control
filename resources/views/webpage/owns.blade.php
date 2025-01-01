@extends('webpage.master')

@section('content')


<section class="policies">
    <h1>الممتلكات والاستثمارات </h1>
    <br><br>
    <div class="policy-grid">
        @foreach ($owns as $own)
        <div class="policy-item">
            <p> {{$own->title}} </p>
            <a href="{{route('owns_show',$own->id)}}"><button class="download-btn">تحميل</button></a>

        </div>
        @endforeach




    </div>
</section>



<br><br><br><br><br>


@endsection
