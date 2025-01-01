@extends('webpage.master')

@section('content')

<br>




 <section class="introduction">
    <h1> الاستديو  </h1>

 <section class="gallery-container">
    @foreach ($stiduos as $stiduo)

    <div class="gallery-item" onclick="openModal(this)">
        <img src="{{asset($stiduo->image)}}" alt="Image 1" loading="lazy">
    </div>

    @endforeach


    </section>

    <div class="modal" onclick="closeModal(event)">
        <span class="close-btn" onclick="closeModal(event)">&times;</span>
        <img class="modal-content" id="modalImg" />
      </div>


@endsection
