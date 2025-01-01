@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة الصور
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الصور
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي صور الغلاف الرئيسية <small>{{ $images->total() }} </small></h3>


        <form action="{{ route('news.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="ابحث بعنوان الصورة" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('photo.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($images->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th>عنوان الصورة</th>
            <th>إضافة بواسطة</th>
            <th>الصورة الرئيسية</th>
            <th>صورة اضافية</th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($images as $index=>$image)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$image->title}}</td>
            <td>{{$image->added->name}}</td>
            <td><img src="{{asset($image->main_image)}}" style="width: 100px" class="img-thumbnail" alt=""></td>
            <td><img src="{{asset($image->photos)}}" style="width: 100px" class="img-thumbnail" alt=""></td>
            <td>

             <a href="{{ route('photo.edit',$image->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('photo.show',$image->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('photo.destroy', $image->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $images->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
