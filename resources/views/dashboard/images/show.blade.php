@extends('dashboard.admin')
@section('title')
ضبط عام
@endsection
@section('contentheader')
عرض
@endsection
@section('contentheaderactivelink')
<a href="/dashboard"> الرئيسية  </a>
@endsection
@section('contentheaderactive')
العمليات علي الصور
@endsection
@section('content')

<div class="card">



    <div class="card-body">
<section class="content">
    <br>
    <div class="box-body">

    <table class="table table-hover">

    <thead class="custom_thead">
        <tr>
            <th>تفاصيل الصورة</th>
        </tr>
    </thead>

    <tbody>

        <tr>

            <td>
                عنوان الصورة:
                <br>
                <br>
                {{$images->title}}
            </td>
        </tr>

        <tr>
            <td>
                تمت الإضافة بواسطة :
                <br>
                <br>

                {{$images->added->name}}
            </td>
        </tr>

         <tr>
            <td>
                الصورة الرئيسية :
                <br>
                <br>

                <img src="{{asset($images->main_image)}}" style="width: 300px" class="img-thumbnail" alt="">
            </td>

         </tr>

         <tr>
            <td>
                الصورة الفرعية :
                <br>
                <br>

                <img src="{{asset($images->photos)}}" style="width: 300px" class="img-thumbnail" alt="">
            </td>

         </tr>

<tr>
    <td>
             <a href="{{ route('photo.edit',$images->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('photo.destroy', $images->id) }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger delete btn-sm" ><i class="fa fa-trash"></i> حذف </button>

                </form>
    </td>
 </tr>

    </tbody>

    </table><!-- end of table -->


    </div> <!-- end of box body -->




    </div> <!-- end of box -->
    </section>
</div>
</div>

@endsection
