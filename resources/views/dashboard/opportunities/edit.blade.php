@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
تعديل الفرص المتاحة
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

                    <form action="{{ route('opportunity.update', $opportunities->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}




                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> تعديل عنوان الفرصة</label>
                            <input type="text" name="title" class="form-control" value="{{ $opportunities->title }}">
                        </div>


                        <div class="form-group">
                            <label>تعديل الصورة</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset($opportunities->image) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>تعديل</button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

