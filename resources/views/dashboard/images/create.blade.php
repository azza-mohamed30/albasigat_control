@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
إضافة الصور
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
إضافة
@endsection
@section('content')

<div class="card">



                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('photo.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}


                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> عنوان الصورة </label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>


                        <div class="form-group">
                            <label>صورة الخبر الرئيسية</label>
                            <input type="file" name="main_image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/photo_images/default.jpg') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>صورة الخبر الفرعية</label>
                            <input type="file" name="photos" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/photo_images/default.jpg') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>أضف</button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

