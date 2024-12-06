<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>الباسقات</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>


    <!-- Header -->
    <!-- Header Section -->
    <header class="header">
	<h3>@ WaqfAlbaseqat</h3>


    </header>

<section class="Search-section">

    <div class="search">
        <input type="text" class="searchTerm" placeholder="اكتب النص للبحث">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
	    <div class="logo">
        <img src="{{asset('assets/images\logo.png')}}" alt="شعار الصفحة">
    </div>
</section>

	<body>
<nav>
    <ul>
        <li><a href="/contact">تواصل معنا</a></li>
        <li class="dropdown">
            <a href="#"><span class="arrow">⮟ </span> الحوكمة </a>
            <ul class="dropdown-menu">
                <li><a href="#">السياسات واللوائح</a></li>
                <li><a href="#">التقارير المالية</a></li>
                <li><a href="#">محاضر الاجتماعات</a></li>
            </ul>
        </li>
        <li><a href="#">اخبارنا</a></li>
        <li><a href="#">مشاريعنا</a></li>
        <li><a href="#">مجالاتنا</a></li>
        <li class="dropdown">
            <a href="#"><span class="arrow">⮟ </span> من نحن </a>
            <ul class="dropdown-menu">
                <li><a href="#">أعضاء الجمعية العمومية</a></li>
                <li><a href="#">مجلس الإدارة</a></li>
                <li><a href="#">المدير التنفيذي</a></li>
                <li><a href="#">اللجان الدائمة</a></li>
            </ul>
        </li>
        <li><a href="/basqat">الرئيسية</a></li>
    </ul>
</nav>



	<br>


    <!-- big image Section -->
    <section class="big-image">

        <img src="{{asset('assets/images/MainImage.png')}}" alt="main image" />

    </section>
	<br><br>

 <!-- Vision, Mission, Goals Section -->

	<div class="flip-card-container">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="{{asset('assets/images/vision.png')}}" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <h1>رؤيتنا</h1>
				<br>
                <p>نسعى لتوعية وتثقيف المرأة والطفل </p>
				<p>من خلال تقديم البرامج التي تلبي احتياجاتهم</p>
				<p>وصناعة المبادرات المجتمعية التطوعية</p>
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="{{asset('assets/images/goal.png')}}" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <h1>أهدافنا</h1>
				<br>
                <p>نسعى لتعزيز القيم والهوية الوطنية لدى الشباب</p>

            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="{{asset('assets/images/message2.png')}}" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <h1>رسالتنا</h1>
				<br>
                <p>تفعيل واستدامة العمل الخيري النسائي بمكة المكرمة</p>
				<p> بطرق مبتكرة ومبادرات نوعية وشراكات فعالة</p>

            </div>
        </div>
    </div>
</div>





<br><br><br><br><br>


<!-- Icons Section -->
<section class="icons-section">
    <div class="icons-container">
        <div class="icon">
            <img src="images/Team.png" alt="Icon 1" />
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

    <!-- Fields Section -->
    <section class="fields-section">
        <h2>مجالاتنا</h2>
        <div class="fields-container">
            <div class="field">
                <div class="icon2"><img src="{{asset('assets/images/benefits.png')}}" alt="field 1" /></div>
             تمكين الشباب والفتيات </div>

            <div class="field"><div class="icon2"><img src="{{asset('assets/images/efficient.png')}}" alt="field 1" /></div>تعزيز الاستقرار النفسي</div>
            <div class="field"><div class="icon2"><img src="{{asset('assets/images/automatic.png')}}" alt="field 1" /></div>صناعة البيئات الترفيهية </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section">
        <h2>مشاريعنا</h2>
<div class="project-cards-container">
    <a href="page1.html" class="project-card">
      <div class="project-card-image" style="background-image: url('{{asset('assets/images/project-Aswah.jpg')}}');">
        <div class="project-card-title">برنامج أسوة</div>

      </div>
    </a>
    <a href="page2.html" class="project-card">
      <div class="project-card-image" style="background-image: url('{{asset('assets/project2.jpg')}}');">
        <div class="project-card-title">برنامج براعم رواء</div>
      </div>
    </a>
    <a href="page3.html" class="project-card">
      <div class="project-card-image" style="background-image: url('{{asset('assets/images/project1.jpg')}}');">
        <div class="project-card-title">برنامج اولي النهي</div>
      </div>
    </a>
    <a href="page4.html" class="project-card">
      <div class="project-card-image" style="background-image: url('{{asset('assets/images/project-tmkeen.jpg')}}');">
        <div class="project-card-title">برنامج تمكين</div>
      </div>
    </a>
    <a href="page5.html" class="project-card">
      <div class="project-card-image" style="background-image: url('{{asset('assets/image5.jpg')}}');">
        <div class="project-card-title">Page 5</div>
      </div>
    </a>
  </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
  <h2>اخبارنا</h2>



        <ul class="cards">
            <li>
              <a href="" class="cardx">
                <img src="{{asset('assets/images/663.jpg')}}" class="cardx__image" alt="" />
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
                <img src="{{asset('assets/images/news.jpg')}}" class="cardx__image" alt="" />
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
                <img src="{{asset('assets/images/Rzz.jfif')}}" class="cardx__image" alt="" />
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
</section>


	<!-- <section class="statistics-section">
  <div class="stat">
    <h3>1402</h3>
    <p>الفعاليات</p>
  </div>
  <div class="stat">
    <h3>1402</h3>
    <p>اعداد المتطوعين</p>
  </div>
  <div class="stat">
    <h3>1402</h3>
    <p>المستفيدين</p>
  </div>
  <div class="stat">
    <h3>25</h3>
    <p>المشاريع</p>
  </div>
</section> -->


<section class="statistics-section">

  <div class="wrapper">
    <div class="container">
        <span class="num" data-val="90">000</span>
        <span class="text"> الفعاليات</span>
    </div>

    <div class="container">
        <span class="num" data-val="200">000</span>
        <span class="text">المتطوعين</span>
    </div>

    <div class="container">
        <span class="num" data-val="800">000</span>
        <span class="text">المستفيدين</span>
    </div>

    <div class="container">
        <span class="num" data-val="300">000</span>
        <span class="text">المشاريع</span>
    </div>
</div>
</section>






    <!-- Footer Section -->
    <section class="footer">
      <div class="footer-row">






        <div class="footer-col">
          <h4>إشترك ليصلك كل جديد</h4>
          <p>
            ابق على تواصل
          </p>
          <form action="#">
            <input type="text" placeholder="أدخل البريد الإلكتروني" required>
            <button type="submit">إشترك</button>
          </form>

          <div class="icons">
                  <img src="{{asset('assets/images/whatsapp.png')}}" alt="">
                  <img src="{{asset('assets/images/twitter-alt-circle.png')}}" alt="">
                  <img src="{{asset('assets/images/instagram.png')}}" alt="">
          </div>

        </div>
		        <div class="footer-col">
          <h4>جمعية الباسقات</h4>
          <ul class="links">
            <li><a href="#">السياسات و الوائح</a></li>
            <li><a href="#">تواصل معنا</a></li>
            <li><a href="#">مجلس اللإدارة</a></li>
          </ul>
        </div>
		        <div class="footer-col">
          <h4>روابط سريعة</h4>
          <ul class="links">
            <li><a href="#">الرئيسية</a></li>
            <li><a href="#">أخبارنا</a></li>
            <li><a href="#">برامجنا</a></li>
            <li><a href="#">مشاريعنا</a></li>
            <li><a href="#">الفرص المتاحة</a></li>
            <li><a href="#">الجديد</a></li>
          </ul>
        </div>

		 <div class="footer-col">
         <img src="{{asset('assets/images/logo.png')}}" alt="">
        </div>
      </div>
    </section>

    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>
