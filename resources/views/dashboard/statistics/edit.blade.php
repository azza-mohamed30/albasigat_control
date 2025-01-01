@extends('dashboard.admin')
@section('title')
الضبط العام
@endsection
@section('contentheader')
تعديل الإحصائيات
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

                    <form action="{{ route('statistic.update', $statistics->id)}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}



                        <input type="hidden" name="user_id" value="{{ $users->id }}" >

                            <div class="form-group">
                                <label> تعديل عدد الفعاليات </label>
                                <input type="number" name="events" class="form-control" value="{{ $statistics->events }}">
                            </div>

                            <div class="form-group">
                                <label> تعديل عدد المتطوعين </label>
                                <input type="number" name="volunteers" class="form-control" value="{{ $statistics->volunteers }}">
                            </div>

                            <div class="form-group">
                                <label> تعديل عدد المستفيدين </label>
                                <input type="number" name="recipients" class="form-control" value="{{ $statistics->recipients }}">
                            </div>

                            <div class="form-group">
                                <label> تعديل عدد المشاريع </label>
                                <input type="number" name="projects" class="form-control" value="{{ $statistics->projects }}">
                            </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل </button>
                        </div>


                    </form><!-- end of form -->



            </div><!-- end of box -->

        <!-- end of content -->
</div>


@endsection
