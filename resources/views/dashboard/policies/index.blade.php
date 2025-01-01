@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة السياسات
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الحوكمة
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالية <small>{{ $policies->total() }} </small></h3>


        <form action="{{ route('policie.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="ابحث بعنوان السياسات او الهيكل التنظيمي" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('policie.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($policies->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> عنوان اللائحة </th>
            <th> تم التعديل والإضافة بواسطة </th>
            <th> ملف اللائحة </th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($policies as $index=>$policie)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$policie->policies_title}}</td>
            <td>{{$policie->added->name}}</td>
            <td><a href="{{ route('download_policie', $policie->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> تحميل </a></td>


            <td>

             <a href="{{ route('policie.edit',$policie->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('policie.show',$policie->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('policie.destroy', $policie->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $policies->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
