@extends('admin.layouts.layout')

@section('content')
    <style>
        .x_content.tana img {
            width: 440px !important;
            height: 200px !important;
        }
    </style>


    <div class="">
        <div class="page-title">

        </div>

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Seo  <small>Dashboard</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row tile_count">
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top">Omaxe Global Ranking</span>
                                <div class="count">

                                        @if(isset($data['globalrank_alexa']))
                                        {{$data['globalrank_alexa']}}
                                        @endif

                                </div>
                                {{--<span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i>Omaxe India Rank</span>
                                <div class="count green">
                                    @if(isset($data['indian_rank_alexa']))
                                        {{$data['indian_rank_alexa']['rank']}}
                                    @endif


                                </div>
                                {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>--}}
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"> Back Links</span>
                                <div class="count ">

                                    @if(isset($data['backlinks_alexa']))
                                        {{$data['backlinks_alexa']}}
                                    @endif



                                </div>
                     
                            </div>

                            </div>

                        </div>
                    </div>
                </div>



            </div>




        </div>




        {{--shdjgfjhsgfdjhkgjskfd--}}




        <div class="row">


            <div class="col-md-6 col-sm-4 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>Traffic Analysis</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Settings 1</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#">Settings 2</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                            {{--</li>--}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content tana">
                        @if(isset($data['getTrafficGraph']))
                            {!! $data['getTrafficGraph'] !!}
                        @endif
                    </div>
                </div>
            </div>



        </div>

    </div>







@endsection




