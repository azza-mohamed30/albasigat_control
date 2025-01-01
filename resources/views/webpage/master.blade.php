<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>الباسقات</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>


     <!-- Header -->


     <header class="header">
      <!-- Hamburger Menu Icon -->

       <div class="top-bar">
        <div class="hamburger" onclick="toggleMenu()" >☰</div>
        <!--    <div class="social-media">
         <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
         <a href="#"><img src="images/twitter-alt-circle.png" alt="Twitter"></a>
         <a href="#"><img src="images/whatsapp.png" alt="WhatsApp"></a>
       </div> -->
       <div class="account">
         <a href="https://wa.me/0550912100">
           <img src="{{asset('assets/images/whatsapp.png')}}" alt="">
       </a>
       <a href="https://twitter.com/Waqfalbaseqat">
           <img src="{{asset('assets/images/twitter-alt-circle.png')}}" alt="Twitter">
       </a>
     <!---  <a href="https://snapchat.com/Waqfalbaseqat">
           <img src="images/snapchat2 (2).png" alt="Snapchat">
       </a>
       <a href="https://tiktok.com/Waqfalbaseqat">
        <img src="images/tiktok.png " alt="Snapchat">-->
    </a>
    <a href="https://instagram.com/Waqfalbaseqat">
      <img src="{{asset('assets/images/instagram.png')}}" alt="Snapchat">
  </a>


       </div>
     </div>

  </header>
 <section class="Search-section">

    <!-- <div class="search">
         <input type="text" class="searchTerm" placeholder="اكتب النص للبحث">
         <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
         </button>
     </div>-->
       <div class="logo">
        <a href="/index">
          <img src="{{asset('assets/images/logo.png')}}" alt="شعار الصفحة">
        </a>

     </div>
 </section>

 <nav>




     <!-- Navigation Menu -->
     <ul>
         <!-- Close Icon (X) -->
         <li class="close-menu" style="text-align: right; cursor: pointer;">X</li>

         <!-- Navigation Links -->
         <li><a href="/index">الرئيسية</a></li>
         <li class="dropdown">
          <a href="#">من نحن <span class="arrow"><i class="fas fa-caret-down"></i></span></a>

             <ul class="dropdown-menu">
                <li><a href="/aboutUs">عن الجمعية</a></li>
                 <li><a href="/members">أعضاء الجمعية العمومية</a></li>
                 <!--  <li><a href="#">مجلس الإدارة</a></li>
                 <li><a href="#">المدير التنفيذي</a></li>
                 <li><a href="#">اللجان الدائمة</a></li> -->
                 <li><a href="/licene">تراخيص الجمعية </a></li>
                 <li><a href="/employee"> الموظفين</a></li>
                 <li><a href="/strcuture">الهيكل التنظيمي </a></li>

             </ul>
         </li>
         <li><a href="/index#our-fields">مجالاتنا</a></li>
         <li><a href="/projects">مشاريعنا</a></li>
        <!--  <li><a href="news.html">اخبارنا</a></li>-->
         <li class="dropdown">
           <a href="#"> الحوكمة <span class="arrow"><i class="fas fa-caret-down"></i></span></a>
             <ul class="dropdown-menu">
              <li><a href="/owns_page">الاستثمارات والممتلكات</a></li>
                 <li><a href="/policies">السياسات واللوائح</a></li>
                 <li><a href="/report">التقارير والخطط</a></li>
                <!--   <li><a href="meetings.html">محاضر الاجتماعات</a></li>-->
             </ul>
         </li>
         <li><a href="/stiduo">الاستديو </a></li>
         <li><a href="/FAQ">الاسئلة الشائعة </a></li>
         <li><a href="/contact">تواصل معنا</a></li>
         <li><a href="https://albaseqat-store.com/" target="_blank" rel="noopener noreferrer">متجر الخدمات</a></li>

     </ul>
 </nav>
<body>

    <!-- end header section  -->



 @yield('content')





  <!-- Footer Section -->
  <section class="footer">
    <div class="footer-row">





      <div class="footer-col">
    <a href="/index"> <img src="{{asset('assets/images/logo.png')}}" alt=""></a>
      </div>

         <div class="footer-col">
        <h4>جمعية الباسقات</h4>
        <ul class="links">
          <li><a href="/policies">السياسات واللوائح</a></li>
          <li><a href="/contact">تواصل معنا</a></li>
          <li><a href="/FAQ"> الاسئلة الشائعة</a></li>
          <li><a href="https://albaseqat-store.com/" target="_blank" rel="noopener noreferrer">متجر الخدمات</a></li>
        </ul>
      </div>
       <div class="footer-col">
        <h4>روابط سريعة</h4>
        <ul class="links">
          <li><a href="/index">الرئيسية</a></li>
          <li><a href="/stiduo">الاستديو</a></li>
          <li><a href="/projects">برامجنا</a></li>

          <li><a href="/opportunities">الفرص المتاحة</a></li>

        </ul>
      </div>



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
          <a href="https://wa.me/0550912100">
            <img src="{{asset('assets/images/whatsapp.png')}}" alt="">
        </a>
        <a href="https://twitter.com/Waqfalbaseqat">
            <img src="{{asset('assets/images/twitter-alt-circle.png')}}" alt="Twitter">
        </a>
     <a href="https://snapchat.com/Waqfalbaseqat">
            <img src="{{asset('assets/images/snapchat2 (2).png')}}" alt="Snapchat">
        </a>
        <a href="https://tiktok.com/Waqfalbaseqat">
         <img src="{{asset('assets/images/tiktok.png')}}" alt="Snapchat">
     </a>
     <a href="https://instagram.com/Waqfalbaseqat">
       <img src="{{asset('assets/images/instagram.png')}}" alt="Snapchat">
   </a>
        </div>

      </div>
    </div>
  </section>

  <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>
