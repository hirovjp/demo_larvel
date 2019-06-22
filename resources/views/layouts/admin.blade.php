<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('admin/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

@include('admin.index.header')

<div id="wrapper">

    <!-- Slidebar -->
    @include('admin.index.slidebar')

    <div id="content-wrapper">

        <div class="container-fluid">

        @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include ('admin.index.footer')

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('admin/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('admin/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('admin/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/datatables/dataTables.bootstrap4.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin.min.js') }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

@yield('scripts')

</body>

</html>