@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة الإحصائيات
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الإحصائيات
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <div class="box box-primary">
        <div class="col-md-4">


            <a href="{{ route('statistic.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

        </div>


<br>
    <div class="box-body">
    @if ($statistics->count() > 0 )
    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>#</th>
            <th> عدد الفعاليات </th>
            <th> عددالمتطوعين </th>
            <th>  عدد المستفيدين  </th>
            <th> عدد المشاريع </th>
            <th>  تعديله بواسطة </th>
            <th>الحدث</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($statistics as $index=>$statistic)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$statistic->events}}</td>
            <td>{{$statistic->volunteers}}</td>
            <td>{{$statistic->recipients}}</td>
            <td>{{$statistic->projects}}</td>
            <td>{{$statistic->added->name}}</td>

            <td>

             <a href="{{ route('statistic.edit',$statistic->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('statistic.destroy', $statistic->id) }}" method="post" style="display: inline-block">
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
