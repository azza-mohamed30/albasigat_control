@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
تعديل الصور
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
تعديل
@endsection
@section('content')

<div class="card">



                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('photo.update', $images->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}




                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> تعديل عنوان الصورة</label>
                            <input type="text" name="title" class="form-control" value="{{ $images->title }}">
                        </div>


                        <div class="form-group">
                            <label>تعديل صورة الخبر الرئيسية</label>
                            <input type="file" name="main_image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset($images->main_image) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label> تعديل صورة الخبر الفرعية</label>
                            <input type="file" name="photos" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset($images->photos) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>تعديل</button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

