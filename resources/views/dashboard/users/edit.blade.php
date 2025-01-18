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
تعديل
@endsection
@section('content')

<div class="card">

<div class="card-body">

    @include('partials._errors')
<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}

<div class="form-group">
 <label> الاسم </label>
 <input type="text" name="name" class="form-control" value=" {{ $user->name }}">
</div> <!-- end form group-->


<div class="form-group">
 <label> البريد الالكتروني </label>
 <input type="email" name="email" class="form-control" value=" {{ $user->email }}">
</div> <!-- end form group-->

{{-- <div class="form-group">
    <label> الصورة </label>
    <input type="file" name="image" class="form-control image">
</div>

<div class="form-group">
    <img src="{{ $user->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
</div> --}}



{{-- <div class="form-group">
    <label> الصلاحيات </label>
    <div class="nav-tabs-custom">

        @php
            $models = ['users', 'news', 'statistics', 'policies', 'employees'];
            $maps = ['create', 'read', 'update', 'delete'];
        @endphp

        <ul class="nav nav-tabs">
            @foreach ($models as $index=>$model)
                <li class="{{ $index == 0 ? 'active' : '' }}"><a href="#{{ $model }}" data-toggle="tab">@lang('site.' . $model)</a></li>
            @endforeach
        </ul>

        <div class="tab-content">

            @foreach ($models as $index=>$model)

                <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">

                    @foreach ($maps as $map)
                        <label><input type="checkbox" name="permissions[]" {{ $user->hasPermission($map . '_' . $model) ? 'checked' : '' }} value="{{ $map . '_' . $model }}"> @lang('site.' . $map)</label>
                    @endforeach

                </div>

            @endforeach

        </div><!-- end of tab content -->

    </div><!-- end of nav tabs -->

</div> --}}


<div class="form-group">
 <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> تعديل </button>
</div> <!-- end form group-->

</form>


</div><!-- end of box -->

<!-- end of content -->
</div>

@endsection
