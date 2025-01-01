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
العمليات علي الفرص المتاحة
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
            <th>تفاصيل الفرصة</th>
        </tr>
    </thead>

    <tbody>

        <tr>

            <td>
                عنوان الفرصة:
                <br>
                <br>
                {{$opportunities->title}}
            </td>
        </tr>

        <tr>
            <td>
                تمت الإضافة بواسطة :
                <br>
                <br>

                {{$opportunities->added->name}}
            </td>
        </tr>

         <tr>
            <td>
                الصورة  :
                <br>
                <br>

                <img src="{{asset($opportunities->image)}}" style="width: 300px" class="img-thumbnail" alt="">
            </td>

         </tr>



<tr>
    <td>
             <a href="{{ route('opportunity.edit',$opportunities->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('opportunity.destroy', $opportunities->id) }}" method="post" style="display: inline-block">
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
