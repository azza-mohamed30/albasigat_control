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
العمليات على الحوكمة
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
            <th>تفاصيل السياسات والوائح  </th>
        </tr>
    </thead>

    <tbody>

        <tr>

            <td>
                عنوان السياسة واللائحة :
                <br>
                <br>
                {{$policies->policies_title}}
            </td>
        </tr>

        <tr>
            <td>
                ملف التقرير  :
                <br>
                <br>

                <iframe src="{{asset($policies->policies)}}" style="width: 800px" alt=""></iframe>
            </td>

        </tr>

        <tr>
            <td>
                تمت الإضافة بواسطة :
                <br>
                <br>

                {{$policies->added->name}}
            </td>
        </tr>




<tr>
    <td>
             <a href="{{ route('policie.edit',$policies->id )}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل </a>


                <form action=" {{ route('policie.destroy', $policies->id) }}" method="post" style="display: inline-block">
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
