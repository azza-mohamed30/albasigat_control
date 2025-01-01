@extends('webpage.master')

@section('content')

<br><br>

<section class="introduction">
   <h1>الفرص المتاحة</h1>
   <div class="opportunity-container">
       <div class="opportunity-row">
        @foreach ($opportunities as $opportunity)

        <div class="opportunity-card">
            <img src="{{asset($opportunity->image)}}" alt="Opportunity Image" />
            <div class="opportunity-text"> {{ $opportunity->title}} </div>
            <div class="opportunity-button">
                <div>تقدمي الان</div>
            </div>
        </div>

        @endforeach





       </div>
   </div>



</section>

<br><br>


@endsection
