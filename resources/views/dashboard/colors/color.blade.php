@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
التحكم في الالوان
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
تغيير اللون
@endsection
@section('content')

<div class="card">



                <div class="card-body">

                    @include('partials._errors')

                    <form action="{{ route('news.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}



                        <div class="form-group">
                            <label> اختر اللون : </label>
                        <input type="color" name="color" value="{{ old('color') }}" >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> حفظ </button>
                        </div>





                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
