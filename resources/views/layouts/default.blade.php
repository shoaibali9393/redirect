<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.head')
</head>
<style>
    @media only screen and (max-width: 1260px) {
        #cont{
            padding-left: 0px!important;
            padding-right: 0px!important;

        }

    }
    @media only screen and (min-width: 1200px) {
        #cont{
        padding-left: 150px!important;
        padding-right: 150px!important;
        }

    }
</style>
<body>

    @include('includes.header')
    <div class="" id="cont" >
    @yield('content')
    </div>
    @include('includes.footer')



<script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>


@yield('js');
</body>
</html>
