@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>


    <div class="top-content">

        <div class="content-cover" style="height: 515px;"></div>

    </div>




    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="row">

                </div>



            </div>

        </div>
    </section>
    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
@endsection
