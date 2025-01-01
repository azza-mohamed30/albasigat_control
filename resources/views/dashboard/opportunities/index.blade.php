@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة الفرص المتاحة
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الفرص المتاحة
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي الفرص <small>{{ $opportunities->total() }} </small></h3>


        <form action="{{ route('opportunity.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="ابحث بعنوان الفرصة" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('opportunity.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($opportunities->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th>عنوان الفرصة</th>
            <th>إضافة بواسطة</th>
            <th>الصورة</th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($opportunities as $index=>$opportunity)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$opportunity->title}}</td>
            <td>{{$opportunity->added->name}}</td>
            <td><img src="{{asset($opportunity->image)}}" style="width: 100px" class="img-thumbnail" alt=""></td>

            <td>

             <a href="{{ route('opportunity.edit',$opportunity->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('opportunity.show',$opportunity->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('opportunity.destroy', $opportunity->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $opportunities->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
