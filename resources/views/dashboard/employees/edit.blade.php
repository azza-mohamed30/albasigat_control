@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
تعديل الموظفين
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

                    <form action="{{ route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <input type="hidden" name="user_id" value="{{ $users->id }}" >

                            <div class="form-group">
                                <label>تعديل اسم الموظف </label>
                                <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                            </div>

                            <div class="form-group">
                                <label>تعديل الوظيفة  </label>
                                <input type="text" name="job" class="form-control" value="{{ $employee->job }}">
                            </div>

                            <div class="form-group">
                                <label>تعديل رقم الهاتف  </label>
                                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
                            </div>

                            <div class="form-group">
                                <label>تعديل العنوان  </label>
                                <input type="text" name="address" class="form-control" value="{{ $employee->address }}">
                            </div>


                        <div class="form-group">
                            <label> تعديل صورة الموظف </label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset($employee->image) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل </button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
