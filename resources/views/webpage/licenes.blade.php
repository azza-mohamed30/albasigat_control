@extends('webpage.master')

@section('content')

<br><br>

<section class="introduction">
   <h1> التراخيص</h1>
   <div class="opportunity-container">
       <div class="opportunity-row">
        @foreach ($licenes->take(3) as $licene )


           <div class="opportunity-card">
               <img src="https://via.placeholder.com/349x333" alt=" ترخيص" loading="lazy"/>
               <div class="opportunity-text">{{$licene->title}}.. </div>
               <div class="opportunity-button">
                <a href="{{route('licenes_show',$licene->id)}}">  تحميل الملف  </a>
               </div>
           </div>

           @endforeach
        </div>

    </div>

           {{-- <div class="opportunity-card">
               <img src="https://via.placeholder.com/349x333" alt=" ترخيص" loading="lazy"/>
               <div class="opportunity-text">ترخيص.. </div>
               <div class="opportunity-button">
                   <div>تحميل الملف </div>
               </div>
           </div>
           <div class="opportunity-card">
               <img src="https://via.placeholder.com/349x333" alt=" ترخيص" loading="lazy" />
               <div class="opportunity-text">ترخيص.. </div>
               <div class="opportunity-button">
                   <div>تحميل الملف </div>
               </div>
           </div> --}}




</section>

<br><br>

@endsection
