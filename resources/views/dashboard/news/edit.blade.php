@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
تعديل الأخبار
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

                    <form action="{{ route('news.update', $news->id)}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <input type="hidden" name="user_id" value="{{ $users->id }}" >

                            <div class="form-group">
                                <label>تعديل عنوان الخبر </label>
                                <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                            </div>

                            <div class="form-group">
                                <label> تعديل تفاصيل الخبر </label>
                                <textarea name="description" class="form-control ckeditor">{{ $news->description }}</textarea>
                            </div>



                        <div class="form-group">
                            <label> تعديل صورة الخبر </label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset($news->image) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل </button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
