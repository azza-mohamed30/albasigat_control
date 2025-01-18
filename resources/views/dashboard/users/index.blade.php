@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
كافة المشرفين
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي المشرفين
@endsection
@section('content')

<div class="card">

    <div class="card-body">

<section class="content">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title" style="margin-bottom: 15px">المشرفين <small>{{ $users->total() }} </small></h3>

    <form action="{{ route('users.index') }}" method="get">

    <div class="row">

    <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="ابحث " value="{{ request()->search }}">
    </div>

    <div class="col-md-4">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>

        <a href="{{ route('users.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </a>

    </div>


    </div> <!-- end row-->
</form>
</div> <!-- end box header -->
<br>

<div class="box-body">
@if ($users->count() > 0 )
<table class="table table-hover">

<thead>
    <tr>
        <th>#</th>
        <th>@lang('site.name')</th>
        <th>@lang('site.email')</th>
        <th>@lang('site.action')</th>
    </tr>
</thead>

<tbody>
    @foreach ($users as $index=>$user)
    <tr>
        <td>{{$index + 1}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>

         <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


            <form action=" {{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف </button>

            </form>

        </td>
    </tr>
    @endforeach
</tbody>


</table><!-- end of table -->
      {{ $users->appends(request()->query())->links() }}
@else
<h2>@lang('site.no_data_found')</h2>

@endif
</div> <!-- end of box body -->




</div> <!-- end of box -->
</section>
    </div>
</div>
@endsection
