@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
المشرفين
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
إضافة
@endsection
@section('content')

<div class="card">



 <div class="card-body">

@include('partials._errors')
<form action="{{ route('users.store')}}" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    {{ method_field('post') }}

<div class="form-group">
 <label> الاسم </label>
 <input type="text" name="name" class="form-control" value=" {{ old('name')}}">
</div> <!-- end form group-->


<div class="form-group">
 <label> البريد الالكتروني </label>
 <input type="email" name="email" class="form-control" value=" {{ old('email')}}">
</div> <!-- end form group-->

{{-- <div class="form-group">
    <label> الصورة </label>
    <input type="file" name="image" class="form-control image">
</div> <!-- end form group-->

<div class="form-group">
    <img src="#"  style="width: 100px" class="img-thumbnail image-preview" alt="">
</div> <!-- end form group--> --}}


<div class="form-group">
 <label> كلمة المرور </label>
 <input type="password" name="password" class="form-control" >
</div> <!-- end form group-->

<div class="form-group">
 <label> تأكيد كلمة المرور </label>
 <input type="password" name="password_confirmation" class="form-control" >
</div> <!-- end form group-->

{{-- <div class="form-group">
    <label> الصلاحيات </label>
    <div class="row mt-4">
        <nav class="w-100">
    <div class="nav nav-tabs">

        @php
            $models = ['users', 'news', 'statistics', 'policies', 'employees'];
            $maps = ['create', 'read', 'update', 'delete'];
        @endphp

        <ul class="nav nav-tabs">
            @foreach ($models as $index=>$model)
                <li class="nav-item nav-link {{ $index == 0 ? 'active' : '' }}"><a href="#{{ $model }}" data-toggle="tab">@lang('site.' . $model)</a></li>
            @endforeach
        </ul>
    </nav>
        <div class="tab-content p-3">

            @foreach ($models as $index=>$model)

                <div class="tab-pane fade {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">

                    @foreach ($maps as $map)
                        <label><input type="checkbox" name="permissions[]" value="{{ $map . '_' . $model }}"> {{ $map }}</label>
                    @endforeach

                </div>

            @endforeach

        </div><!-- end of tab content -->

    </div><!-- end of nav tabs -->

</div> --}}

<div class="form-group">
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> أضف </button>
</div> <!-- end form group-->

</form>


</div><!-- end of box -->

<!-- end of content -->
</div>


@endsection
