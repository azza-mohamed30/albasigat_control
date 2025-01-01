@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
تعديل التقارير المالية
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

                    <form action="{{ route('financial_report.update', $report->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}





                        <input type="hidden" name="user_id" value="{{ $users->id }}" >


                        <div class="form-group">
                            <label> التقرير المالي </label>
                            <input type="text" name="title" class="form-control" value="{{ $report->title }}">
                        </div>

                        <div class="form-group">
                            <input type="file" name="report" class="form-control ">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> تعديل </button>
                        </div>


                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>



@endsection

