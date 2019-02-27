<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}" type="image/ico" />

    <title>Omaxe | Admin </title>

    <!-- Bootstrap -->
    <link href="{{asset('../admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../admin/vendors/font-awesome/css/font-awesome.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- NProgress -->
    <link href="{{asset('../admin/vendors/nprogress/nprogress.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('../admin/vendors/iCheck/skins/flat/green.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('../admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('../admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet')}}?v={{rand(100,1000000)}}"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('../admin/css/custom.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">


    {{--<link href="{{asset('../admin/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">--}}


    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">--}}


    <link href="{{asset('../admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <link href="{{asset('../admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <link href="{{asset('../admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <link href="{{asset('../admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <link href="{{asset('../admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}?v={{rand(100,1000000)}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/admin/css/multiple-select.css?v={{rand(100,1000000)}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        #datatable-buttons{
            width: 100% !important;
        }
    </style>
{{--    <script src="{{asset('../admin/vendors/jquery/dist/jquery.min.js')}}"></script>--}}




</head>