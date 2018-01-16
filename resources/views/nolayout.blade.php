<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="Mahmoud Khalil">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <title>{{ setting('site_name') }} | @yield('title', 'Something') </title>

    <link href="{{ url('plugins/semantic/dist/semantic.rtl.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/buttons.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{url('css/jquery.dataTables.min.css')}}" rel="stylesheet">

<?php
$bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg'); // array of filenames
$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

@yield('css')

<!-- Main styles for this application -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">

    <style type="text/css">
        body{
            background: url({{ url('images/' .  $selectedBg) }}) no-repeat;
            background-size:100%;

        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

{{--oncontextmenu="return false"--}}
<body  dir="rtl" >


<div class="ui container">



</div>


<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/plugins/semantic/dist/semantic.js') }}"></script>
<script src="{{ url('js/chart.min.js') }}"></script>
<script src="{{ url('js/pace.min.js') }}"></script>
<script src="{{ url('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('js/datatable/buttons.flash.min.js') }}"></script>
<script src="{{ url('js/datatable/jszip.min.js') }}"></script>
<script src="{{ url('js/datatable/pdfmake.min.js') }}"></script>
<script src="{{ url('js/datatable/vfs_fonts.js') }}"></script>
<script src="{{ url('js/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ url('js/datatable/buttons.print.min.js') }}"></script>
<script src="{{ url('js/datatable/buttons.colVis.min.js') }}"></script>


<script>

    @if(Session::has('msg'))

    $.Notify({
        content: '{!! session('msg') !!}',
        type: 'success',
        icon: "<span class='mif-checkmark'></span>",
    });

    @endif

</script>


<!-- CoreUI main scripts -->
<script src="{{ url('js/app.js') }}"></script>


</body>

</html>