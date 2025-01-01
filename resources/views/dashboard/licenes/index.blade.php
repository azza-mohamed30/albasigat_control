@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة التراخيص
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي التراخيص
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالية <small>{{ $licenes->total() }} </small></h3>


        <form action="{{ route('liceneses.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder=" ابحث بعنوان الترخيص " value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('liceneses.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($licenes->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> عنوان الترخيص </th>
            <th> ملف الترخيص  </th>
            <th> تم التعديل والإضافة بواسطة </th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($licenes as $index=>$licene)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$licene->title}}</td>
            <td><a href="{{ route('liceneses.show',$licene->id )}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> تحميل </a></td>
            <td>{{$licene->added->name}}</td>
            <td>

             <a href="{{ route('liceneses.edit',$licene->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('liceneses.destroy', $licene->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $licenes->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
