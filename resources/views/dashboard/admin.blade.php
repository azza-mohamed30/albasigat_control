<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> @yield('title') </title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/SansPro/SansPro.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/mycustomstyle.css') }}">
      {{--noty--}}
      <link rel="stylesheet" href="{{ asset('admin/noty/noty.css') }}">
      <script src="{{ asset('admin/noty/noty.min.js') }}"></script>

  @yield('css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/index" class="brand-link">
      <img src="{{ asset('admin/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">الباسقـــات</span>
    </a>

    <!-- Sidebar -->
  @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 @include('layouts.content')
  <!-- /.content-wrapper -->
  @include('partials._session')


  <!-- Main Footer -->
@include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('admin/js/General.js') }}"></script>
<script src="{{ asset('admin/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin/js/some.js') }}"></script>


<script>
    $(document).ready(function () {

        $('.sidebar-menu').tree();

        //icheck
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "تأكيد الحذف",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("نعم", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("لا", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        $(".image").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            }

        });

        CKEDITOR.config.language =  "{{ app()->getLocale() }}";

    });//end of ready

</script>
@stack('scripts')

@yield('script')



</body>
</html>
