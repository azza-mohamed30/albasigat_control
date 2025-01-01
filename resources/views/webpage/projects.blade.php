@extends('webpage.master')

@section('content')

<br><br>


 <!-- Projects Section -->
 <section class="projects-page">
    <h2>مشاريعنا</h2>
<div class="project-page-container">
<a href="aswa-project.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/images/project-Aswah.jpg')}}');">
    <div class="project-page-title">برنامج أسوة</div>

  </div>
</a>
<a href="braeam-project.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/images/project2.jpg')}}');">
    <div class="project-page-title">برنامج براعم رواء</div>
  </div>
</a>
<a href="olyAnhy-project.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/images/project1.jpg')}}');">
    <div class="project-page-title">برنامج اولي النهي</div>
  </div>
</a>
<a href="tatwey.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/images/')}}');">
    <div class="project-page-title">برنامج تطوعي إستثمار</div>
  </div>
</a>
<a href="liqat.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/image5.jpg')}}');">
    <div class="project-page-title"> برنامج اللقاءات العامة</div>
  </div>
</a>
    <a href="hfawah.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/image5.jpg')}}');">
    <div class="project-page-title">برنامج حفاوة</div>
  </div>
</a>
    <a href="hafdhat.html" class="project-page">
  <div class="project-page-image" style="background-image: url('{{asset('assets/image5.jpg')}}');">
    <div class="project-page-title">برنامج حافظات الذكر</div>
  </div>
</a>
</div>
</section>

<br>
<br>



@endsection
