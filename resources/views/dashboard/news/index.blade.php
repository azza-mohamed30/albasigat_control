@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة الأخبار
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الاخبار
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي الاخبار <small>{{ $news->total() }} </small></h3>

        <form action="{{ route('news.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="ابحث بعنوان الخبر" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('news.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($news->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th>عنوان الخبر</th>
            <th>تفاصيل الخبر</th>
            <th> اضافة وتعديل بواسطة  </th>
            <th>صورة الخبر</th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($news as $index=>$new)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$new->title}}</td>
            <td>{{$new->description}}</td>
            <td>{{$new->added->name}}</td>
            <td><img src="{{asset($new->image)}}" style="width: 100px" class="img-thumbnail" alt=""></td>
            <td>

             <a href="{{ route('news.edit',$new->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('news.show',$new->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('news.destroy', $new->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $news->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
