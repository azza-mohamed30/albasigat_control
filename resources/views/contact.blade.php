<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" rel="stylesheet">
    <title>الباسقات</title>




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
        <li><a href="#">تواصل معنا</a></li>
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


<section id="contact">

  <h1 class="section-header">تواصل معنا </h1>

  <div class="contact-wrapper">

  <!-- Left contact page -->

    <form id="contact-form" class="form-horizontal" role="form">

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder=" الاسم بالكامل    "  name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder=" مجال العمل    " name="work" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="phone" placeholder=" رقم الهاتف    " name="phone" value="" required>
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder=" اكتب رسالتك  " name="message" required></textarea>

      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
         <span class="send-text"> إرسال</span>
        </div>

      </button>

    </form>

  <!-- Left contact page -->

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-envelope fa-2x"> <span class="contact-text phone">يسعدنا تواصلكم معنا للرد على اسئلتكم واستفساراتكم خلال منصات التواصل او ترك رسالة    </span> </i></li>
        </ul>
          <br><br><br>
        <hr>

          <div class="social-media-list">

            <img src="{{asset('assets/images/whatsapp.png')}}" alt="">


            <img src="{{asset('assets/images/twitter-alt-circle.png')}}" alt="">


            <img src="{{asset('assets/images/instagram.png')}}" alt="">

        </div>

        <hr>



      </div>

  </div>

</section>





<section class="location">

  <p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.7602546049843!2d39.80202680000001!3d21.399342600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c21adbeff4b0cb%3A0x68fde0bebfcea67f!2z2YXYpNiz2LPYqSDYotmF2YbYqSDYp9mE2YjZgtmB2YrYqSAtINin2YTYqNin2LPZgtin2KogLQ!5e0!3m2!1sen!2sus!4v1733248444785!5m2!1sen!2sus"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </p>

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
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
