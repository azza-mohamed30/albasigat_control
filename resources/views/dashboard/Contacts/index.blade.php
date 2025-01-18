@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة البيانات المرسلة بواسطة زوار الموقع
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي صفحة تواصل معنا
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title" style="margin-bottom: 15px">اجمالي الرسائل <small>{{ $contact->total() }} </small></h3>

        <form action="{{ route('contact_us.index') }}" method="get">

        <div class="row">

        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder=" ابحث بإسم الزائر او رقم الهاتف او مجال العمل" value="{{ request()->search }}">
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> ابحث </button>

            <a href="{{ route('contact')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


        </div> <!-- end row-->
    </form>
    </div> <!-- end box header -->
<br>
    <div class="box-body">
    @if ($contact->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> اسم الزائر </th>
            <th> مجال العمل </th>
            <th> التلفون </th>
            <th> الرسالة </th>
            <th> الحدث </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($contact as $index=>$contac)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$contac->name}}</td>
            <td>{{$contac->work_field}}</td>
            <td>{{$contac->phone}}</td>
            <td>{{$contac->message}}</td>
            <td>

                <form action=" {{ route('contact_us.destroy', $contac->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>


    </table><!-- end of table -->

    @else
    <h2>لايوجد بيانات</h2>

    @endif
    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
