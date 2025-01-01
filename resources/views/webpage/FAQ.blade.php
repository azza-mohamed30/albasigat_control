@extends('webpage.master')

@section('content')

<div class="faq-container">
    <!-- Top Section -->
    <div class="faq-header">

        <div class="faq-text">
            <h2 class="faq-title">كيف يمكننا مساعدتك</h2>
            <p class="faq-subtitle">ابحث عن الاجابات من خلال الاسئلة الشائعة</p>
        </div>
        <img class="faq-image" src="{{asset('assets/images/Questions-amico.png')}}" alt="Image">
    </div>


    <div class="faq-content">
        <h2 >لا يوجد محتوى</h2>

    </div>
    <br><br>
    <!-- Questions Section -->
    <!-- <div class="faq-content">
        <div class="faq-item">
            <div class="faq-question">سؤال 1: نص هنا</div>
            <div class="faq-answer">اجابة 1: نص هنا</div>
            <div class="faq-divider"></div>
        </div>
        <div class="faq-item">
            <div class="faq-question">سؤال 2: نص هنا</div>
            <div class="faq-answer">اجابة 2: نص هنا</div>
            <div class="faq-divider"></div>
        </div>
        <div class="faq-item">
            <div class="faq-question">سؤال 3: نص هنا</div>
            <div class="faq-answer">اجابة 3: نص هنا</div>
            <div class="faq-divider"></div>
        </div>
        <div class="faq-item">
            <div class="faq-question">سؤال 4: نص هنا</div>
            <div class="faq-answer">اجابة 4: نص هنا</div>
        </div>
    </div>-->

    <!-- Bottom Section -->
    <div class="faq-footer">
        <div class="faq-more-questions">
            <p class="faq-more-text">هل لديك المزيد من الاسئلة؟</p>
           <a href="/contact"> <button class="faq-contact-button">تواصل معنا</button></a>
        </div>
        <img class="faq-footer-image" src="{{asset('assets/images/Mail sent-amico.png')}}" alt="Footer Image">
    </div>
</div>


@endsection
