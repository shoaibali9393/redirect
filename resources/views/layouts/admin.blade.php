<!doctype html>
<html>
<head>
    @include('includes.admin.head')
</head>

<body class="sb-nav-fixed">

@include('includes.admin.header')
<div id="layoutSidenav">
    @include('includes.admin.sidebar')
    <div id="layoutSidenav_content">
        @yield('content')

{{--@include('includes.admin.footer')--}}

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/datatables-simple-demo.js')}}"></script>

</body>
</html>
