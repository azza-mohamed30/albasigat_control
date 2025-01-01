@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
إضافة الموظفين
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

                    <form action="{{ route('employees.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}




                        <input type="hidden" name="user_id" value="{{ $users->id }}" >

                            <div class="form-group">
                                <label> اسم الموظف </label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label> الوظيفة </label>
                                <input type="text" name="job" class="form-control" value="{{ old('job') }}">
                            </div>

                            <div class="form-group">
                                <label> رقم الهاتف </label>
                                <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
                            </div>

                            <div class="form-group">
                                <label> العنوان  </label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                            </div>


                        <div class="form-group">
                            <label>صورة الموظف</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>أضف</button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
