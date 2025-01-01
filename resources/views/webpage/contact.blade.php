@extends('webpage.master')

@section('content')


<style>

    .alert {
      position: relative;
      padding: 0.75rem 1.25rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: 0.25rem;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }

    .text-right {
      text-align: right !important;
    }


    </style>


<br>



<!-- Contact Section -->
<section class="contact-section">
  <h1 class="section-title">تواصل معنا</h1>
  <div class="contact-container">
    <div class="contact-form-container">
      <p class="instructions">
        يسعدنا تواصلكم معنا للرد على استفساراتكم واستشاراتكم خلال منصات التواصل أو ترك رسالة لنا
      </p>
      @if(Session::has('error'))
      <div class="alert alert-danger text-right" role="alert">
      {{ Session::get('error') }}
      </div>
      @endif
      @if(Session::has('success'))
      <div class="alert alert-success text-right" role="alert">
      {{ Session::get('success') }}
      </div>
      @endif
      @include('partials._errors')

      <form class="contact-form" action="{{ route('contact_us.store')}}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}
          {{ method_field('post') }}

        <input type="text" name="name" placeholder="الاسم بالكامل" />
        <input type="text" name="work_field" placeholder="مجال العمل" />
        <input type="tel" name="phone" placeholder="رقم الهاتف" />
        <textarea name="message" placeholder="اكتب رسالتك"></textarea>
        <button type="submit" class="submit-btn">إرسال</button>

      </form>
      <div class="social-media-list">

       <a href="https://wa.me/0550912100"> <div class="social-icon" ><img src="{{asset('assets/images/whatsapp.png')}}" alt=""></div></a>
       <a href="https://twitter.com/Waqfalbaseqat"><div class="social-icon" ><img src="{{asset('assets/images/twitter-alt-circle.png')}}" alt=""></div></a>
       <a href="https://instagram.com/Waqfalbaseqat"> <div class="social-icon" ><img src="{{asset('assets/images/instagram.png')}}" alt=""></div></a>
      </div>
    </div>
    <!-- Map Section -->
    <div class="map-container">

      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d118872.33997150697!2d39.87206721715776!3d21.399328056933317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x15c21adbeff4b0cb%3A0x68fde0bebfcea67f!2zNjUxMtiMINmF2YPYqQ!3m2!1d21.3993426!2d39.8020268!5e0!3m2!1sar!2ssa!4v1734202451696!5m2!1sar!2ssa"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

@endsection
