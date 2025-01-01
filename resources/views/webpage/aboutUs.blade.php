@extends('webpage.master')

@section('content')


<br><br>



<main class="about-us">
    <section class="introduction">
      <h1>من نحن</h1>
      <p>
        مؤسسة وقفية غير ربحية نسائية بمكة المكرمة تعنى بتوعية وتثقيف المرأة والطفل من خلال تقديم البرامج التي تلبي احتياجاتهم وصناعة المبادرات المجتمعية التطوعية
      </p>
    </section>
    <br><br>
    <section class="about-cards">
      <div class="card">
        <h2>رسالتنا</h2>
        <p> تفعيل واستدامة العمل الخيري النسائي بمكة المكرمة بطرق مبتكرة ومبادرات نوعية وشراكات فعالة </p>

      </div>
      <div class="card">
        <h2>قيمنا</h2>
        <ul class="values-list">
            <li>العمل الجماعي</li>
            <li>التطوير المستمر</li>
            <li>الجودة</li>
            <li>التميز والكفاءة</li>
        </ul>
    </div>
      <div class="card">
        <h2>الأهداف </h2>
        <ul>
          <li>المحافظة على الوقف و استثماره وتنظيم عوائده.</li>
          <li> تفعيل وتعزيز ونشر ثقافة العمل التطوعي. </li>
          <li> تطوير مهارات العاملين بمجال خدمة ضيوف الرحمن. </li>
          <li> تقديم برامج نوعية لإثراء التجربة الدينية لضيفات الرحمن. </li>
          <li> صناعة مبادرات وبرامج نوعية لتمكين المرأة والطفل توعوياً وثقافياً. </li>
          <li> إقامة علاقات تعاون وشراكة مع الجهات ذات الصلة بما يحقق أهداف الوقف </li>

        </ul>
      </div>
    </section>
  </main>








<br>

<div class="stat-heading"> <h2>إحصاياتنا</h2></div>

<section class="statistics-section">
    @foreach ($statistics as $statistic)
  <div class="wrapper">

    <div class="container">

        <span class="num" data-val="{{$statistic->events}}">000</span>
        <span class="text"> الفعاليات</span>
    </div>

    <div class="container">
        <span class="num" data-val="{{$statistic->volunteers}}">000</span>
        <span class="text">المتطوعين</span>
    </div>

    <div class="container">
        <span class="num" data-val="{{$statistic->recipients}}">000</span>
        <span class="text">المستفيدين</span>
    </div>

    <div class="container">
        <span class="num" data-val="{{$statistic->projects}}">000</span>
        <span class="text">المشاريع</span>
    </div>
</div>

@endforeach
</section>

<br>
<br>

@endsection
