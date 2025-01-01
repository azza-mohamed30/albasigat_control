@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة الموظفين
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الموظفين
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي الموظفين <small>{{ $employees->total() }} </small></h3>

        <form action="{{ route('employees.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder=" ابحث بإسم الموظف او رقم الهاتف او الوظيفة" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('employees.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($employees->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th>إسم الموظف</th>
            <th> الوظيفة</th>
            <th> رقم الهاتف </th>
            <th> العنوان </th>
            <th> اضافة وتعديل بواسطة </th>
            <th>صورة الموظف</th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($employees as $index=>$employee)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->job}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->added->name}}</td>
            <td><img src="{{asset($employee->image)}}" style="width: 100px" class="img-thumbnail" alt=""></td>
            <td>

             <a href="{{ route('employees.edit',$employee->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>

             <a href="{{ route('employees.show',$employee->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> عرض </a>


                <form action=" {{ route('employees.destroy', $employee->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->
          {{ $employees->appends(request()->query())->links() }}
    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
