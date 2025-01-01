@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
إضافة الإحصائيات
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

                    <form action="{{ route('statistic.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}




                        <input type="hidden" name="user_id" value="{{ $users->id }}" >

                            <div class="form-group">
                                <label> عدد الفعاليات </label>
                                <input type="number" name="events" class="form-control" value="{{ old('events') }}">
                            </div>

                            <div class="form-group">
                                <label> عدد المتطوعين </label>
                                <input type="number" name="volunteers" class="form-control" value="{{ old('volunteers') }}">
                            </div>

                            <div class="form-group">
                                <label> عدد المستفيدين </label>
                                <input type="number" name="recipients" class="form-control" value="{{ old('recipients') }}">
                            </div>

                            <div class="form-group">
                                <label> عدد المشاريع </label>
                                <input type="number" name="projects" class="form-control" value="{{ old('projects') }}">
                            </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> أضف </button>
                        </div>

                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
