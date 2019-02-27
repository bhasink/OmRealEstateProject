@extends('admin.layouts.layout')



@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Common Contact Us <small></small></h3>
            </div>

            {{--<div class="title_right">--}}
            {{--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
            {{--<div class="input-group">--}}
            {{--<input type="text" class="form-control" placeholder="Search for...">--}}
            {{--<span class="input-group-btn">--}}
            {{--<button class="btn btn-default" type="button">Go!</button>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects  <small>Contact Us</small></h2>
                        {{--<ul class="nav navbar-right panel_toolbox">--}}
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
                        {{--</ul>--}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Zipcode</th>
                                <th>Address</th>
                                <th>Query</th>
                                <th>&nbsp;&nbsp;&nbsp;Date&nbsp;&&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($contact_details)
                                @foreach($contact_details as $contact_detail)

                                    <tr>
                                        <td>{{$contact_detail->id}}</td>

                                        <td>{{$contact_detail->name}}</td>

                                        <td>{{$contact_detail->email}}</td>

                                        <td>{{$contact_detail->phone}}</td>

                                        <td>{{$contact_detail->country}}</td>

                                        <td>{{$contact_detail->city}}</td>

                                        <td>{{$contact_detail->zipcode}}</td>

                                        <td>{{$contact_detail->address}}</td>

                                        <td>{{$contact_detail->project_query}}</td>

                                        <td>{{$contact_detail->created_at->format('d-m-Y H:i:s')}}</td>
                                    </tr>

                                @endforeach
                            @endif

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>




@endsection