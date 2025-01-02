@extends('webpage.master')

@section('content')


<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    @foreach ($images as $index=>$image)

    <div class="mySlides fade">
      <div class="numbertext">{{$index + 1}} / 3</div>
      <a href="https://forms.gle/ubSZXz5nxYVE7cQt5" target="_blank" rel="noopener noreferrer">  <button class="image-button"> أنضم الينا</button> </a>
      <img src="{{asset($image->main_image)}}" style="width:100%">
    </div>

    @endforeach


    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

      <br><br><br>

   <!-- Vision, Mission, Goals Section -->

        <div class="info-box-container">
      <div class="info-box">
          <img src="{{asset('assets/images\vision-removebg-preview.png')}}" alt="Icon 1" class="info-icon">

          <p> مؤسسة وقفية رائدة في تمكين المرأة والطفل وتطوير العمل الخيري النسائي بمكة المكرمة</p>
      </div>

      <div class="info-box">
          <img src="{{asset('assets/images\message-removebg-preview.png')}}"  alt="Icon 2" class="info-icon">

          <p>تفعيل واستدامة العمل الخيري النسائي بمكة المكرمة بطرق مبتكرة ومبادرات نوعية وشراكات فعالة</p>
      </div>

      <div class="info-box">
          <img src="{{asset('assets/images\goal-removebg-preview.png')}}" alt="Icon 3" class="info-icon">

          <p>تعزيز الوعي وتثقيف المرأة والطفل من خلال برامج مبتكرة، مبادرات مجتمعية نوعية، وشراكات فعالة تسهم في استدامة العمل الخيري.</p>
      </div>
  </div>






  <br><br><br><br><br>


  <!-- Icons Section -->
  <section class="icons-section">
      <div class="icons-container">
          <div class="icon">
              <img src="{{asset('assets/images/Team.png')}}" alt="Icon 1" />
              <p>العمل الجماعي</p>
          </div>
          <div class="icon">
              <img src= "{{asset('assets/images/improvment.png')}}" alt="Icon 2" />
              <p>التطوير المستمر</p>
          </div>
          <div class="icon">
              <img src="{{asset('assets/images/reliability.png')}}" alt="Icon 3" />
              <p>الجودة</p>
          </div>
          <div class="icon">
              <img src="{{asset('assets/images/present.png')}}" alt="Icon 4" />
              <p>التميز - الكفاءة</p>
          </div>
      </div>
  </section>
  <br><br><br>


  <!-- كلمة الرئيس -->

  <div class="massege-container">
    <div class="massege-content-wrapper">
        <div class="massege-title-section">
            <h1 class="massege-title">كلمة الرئيس<br> التنفيذي</h1>
             <!---   <div class="massege-highlight-box">
            <p class="massege-subtitle">الاستاذ/</p>
            </div>-->
        </div>
        <div class="massege-divider"></div>
    </div>
    <div class="massege-text-block">
        <p class="massege-paragraph">
          قال الله سبحانه وتعالى في كتابه الكريم
          (يَا أَيُّهَا الَّذِينَ آمَنُوا ارْكَعُوا وَاسْجُدُوا وَاعْبُدُوا رَبَّكُمْ وَافْعَلُوا الْخَيْرَ لَعَلَّكُمْ تُفْلِحُونَ (الحج:77.
          من أعظم  نعم الله  وفضله علينا أنه اخصتنا  العمل بهذا  القطاع غير الربحي وفي وقف بأطهر البقاع وأحبها إليه فيها  تضاعف فيها الأجور وتعظم الحسنات , ومن هنا دعوة للجميع لمشاركتنا هذا الأجر بعلم أو عمل  أو خبرة ,  قد تترك أثرا  لا ينسى  وبصمة لا تمحى, كما  أن رؤبة مملكتنا الحبيبة وقيادتنا الرشيدة  تؤكد  على دور المواطن وأهمية مساهمته الفعالة في المجتمع.
          ختاماً قال تعالى : (ومَا تُقَدِّمُوا لِأَنفُسِكُم مِّنْ خَيْرٍ تَجِدُوهُ عِندَ اللَّهِ ۗ إِنَّ اللَّهَ بِمَا تَعْمَلُونَ بَصِيرٌ )
          هذا ونسأل الله التوفيق والسداد ونفع البلاد والعباد

        </p>
    </div>
  </div>


  <div class="massege-container">

    <div class="massege-text-block">
        <p class="massege-paragraph">
            الحمد والشكر لرب الأرض والسماوات أن سخر وهيئ لنا فعل الطاعات وسخرنا لها وأن من علينا بإقامة وقف الباسقات وجعلنا أمناء عليه نسألك ربنا أن تتقبل منا هذا العمل الصالح
            وتبارك لنا وللمسلمين فيه وتجعله خالصا لوجهك الكريم كما أشكر كل من ساندنا وأعاننا ووقف إلى جانبنا وآزرنا ليقوم و الله عنا كل خير ورضي عنهم وارضاهم وسدد على طريق الحق خطانا وخطاهم
            والله اسأل ان يتقبل منا ومنكم ما قدم من عمل وان يرفع به الدرجات ويرزقنا الثبات والمداومة لفعل الخيرات وهمة تضاهي قمم الجبال الشامخات وقلب ينبض بحب الطاعات هذا غرسنا قد أينع فكونوا أنتم تلك الريح المرسلة المبشرة بالخير
            ولتكن هباتكم ووصاياكم هي غيث الباسقات في البلد الحرام وليستمر وقف الباسقات صامدا معطاء نافع وفي ذلك فليتنافس المتنافسون نسأل الله أن يتقبل منا ومنكم صالح الأعمال وأن ينفعنا وإياكم بما قدمنا من عمل وأن يستعملنا ولا يستبدلنا
            والسلام عليكم ورحمة الله وبركاته
        </p>
    </div>
    <div class="massege-divider"></div>
    <div class="massege-content-wrapper">
      <div class="massege-title-section">
          <h1 class="massege-title">كلمة رئيس<br> مجلس النظار </h1>
           <!---   <div class="massege-highlight-box">
          <p class="massege-subtitle">الاستاذ/</p>
          </div>-->
      </div>

  </div>
  </div>





  <br><br><br><br>

      <!-- Fields Section -->
      <section class="fields-section">
          <h2 id="our-fields">مجالاتنا</h2>
          <div class="fields-container">
              <div class="field">
                  <div class="icon2"><img src="{{asset('assets/images/commuity.png')}}" alt="field 1" /></div>
                       صناعة المبادرات المجتمعية التطوعية</div>

              <div class="field"><div class="icon2"><img src="{{asset('assets/images/mother-and-son.png')}}" alt="field 1" /></div >تثثيف المجتمع من النســاء والاطفــال    </div>
              <div class="field"><div class="icon2"><img src="{{asset('assets/images/online-conference.png')}}" alt="field 1" /></div>برامج ومبـادرات تـلبي احتيـاجاتـهم   </div>
          </div>
      </section>
  <br><br><br><br>
      <!-- Projects Section -->
      <section class="projects-section">
          <h2>مشاريعنا</h2>
  <div class="project-cards-container">
      <a href="aswa-project.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/project-Aswah.jpg')}}');">
          <div class="project-card-title">برنامج أسوة</div>

        </div>
      </a>
      <a href="braeam-project.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/project2.jpg')}}');">
          <div class="project-card-title">برنامج براعم رواء</div>
        </div>
      </a>
      <a href="olyAnhy-project.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/project1.jpg')}}');">
          <div class="project-card-title">برنامج اولي النهي</div>
        </div>
      </a>
      <a href="tatwey.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/')}}');">
          <div class="project-card-title">برنامج تطوعي إستثمار</div>
        </div>
      </a>
      <a href="liqat.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/image5.jpg')}}');">
          <div class="project-card-title"> برنامج اللقاءت العامة</div>
        </div>
      </a>
          <a href="hfawah.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/image5.jpg')}}');">
          <div class="project-card-title">برنامج حفاوة</div>
        </div>
      </a>
          <a href="hafdhat.html" class="project-card">
        <div class="project-card-image" style="background-image: url('{{asset('assets/images/image5.jpg')}}');">
          <div class="project-card-title">برنامج حافظات الذكر</div>
        </div>
      </a>
    </div>
      </section>

      <!-- News Section
      <section class="news-section">
    <h2>اخبارنا</h2>



          <ul class="cards">
              <li>
                <a href="" class="cardx">
                  <img src="images/663.jpg" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">انطلاق المشروع الاول</h3>
                        <span class="cardx__status">الشهر الماضي</span>
                      </div>
                    </div>
                    <p class="cardx__description">مشروع لدعم الفتيات والاطفال في شتي المجالات</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="" class="cardx">
                  <img src="images/news.jpg" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">انطلاق المشروع الثاني</h3>
                        <span class="cardx__status">قبل اسبوع</span>
                      </div>
                    </div>
                    <p class="cardx__description">لقاءات ثقافية ومناقشات معرفية</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="" class="cardx">
                  <img src="images/Rzz.jfif" class="cardx__image" alt="" />
                  <div class="cardx__overlay">
                    <div class="cardx__header">


                      <div class="cardx__header-text">
                        <h3 class="cardx__title">انطلاق المشروع الثالث</h3>
                        <span class="cardx__status">قبل يومين</span>
                      </div>
                    </div>
                    <p class="cardx__description">مشورع خدمة زوار بيت الله يهدف الي تقديم العون للحجاج</p>
                  </div>
                </a>
              </li>
            </ul>

    <button class="more-news">للمزيد من الأخبار</button>
  </section>-->
  <br><br><br><br>
  <section class="news-section">
    <h2>البوم الصور</h2>
  <div class="image-scroll-wrapper">
    <section class="activities">

      <div class="image-scroll-container">

        @foreach ($stiduos->take(4) as $stiduo )
        <img src="{{asset($stiduo->image)}}" alt="الفعالية الأولى" onclick="openImage(this)">
        @endforeach

      </div>
    </section>
  </div>
  <a href="/stiduo"> <button class="more-news"> عرض الاستديو </button></a>
  </section>

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

  <br><br><br>


@endsection
