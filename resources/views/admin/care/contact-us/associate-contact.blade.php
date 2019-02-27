@extends('admin.layouts.layout')



@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Associate Contact Us <small></small></h3>
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
                        <h2>Associate  <small>Contact Us</small></h2>
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
                        {{--<p class="text-muted font-13 m-b-30">--}}
                        {{--The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.--}}
                        {{--</p>--}}
                        <table  id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Company&nbsp;Name</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>State</th>
                                {{--<th>Year of formation</th>--}}
                                {{--<th>Pan card</th>--}}
                                {{--<th>Gstin no</th>--}}
                                {{--<th>Rera no</th>--}}
                                {{--<th>No of employee</th>--}}
                                {{--<th>Client list</th>--}}
                                <th>Address</th>

                                <th>Pincode</th>
                                {{--<th>Landine no</th>--}}
                                <th>Phone</th>
                                {{--<th>Fax no</th>--}}
                                <th>Email id</th>
                                <th>Website if any:</th>
                                {{--<th>Associate with other builders</th>--}}
                                {{--<th>Name of builders</th>--}}
                                {{--<th>Since how long</th>--}}
                                {{--<th>Name of project</th>--}}
                                {{--<th>No of booking given</th>--}}
                                {{--<th>Promoters name</th>--}}
                                {{--<th>Promoters city</th>--}}
                                {{--<th>Promoters edu qualifiication</th>--}}
                                {{--<th>Promoters mobile no</th>--}}
                                {{--<th>Promoters fax no</th>--}}
                                {{--<th>Promoters nationality</th>--}}
                                {{--<th>Promoters address</th>--}}
                                {{--<th>Promoters pincode</th>--}}
                                {{--<th>Promoters country</th>--}}
                                {{--<th>Promoters email</th>--}}
                                {{--<th>Promoters core competence</th>--}}
                                <th>&nbsp;&nbsp;&nbsp;Date&nbsp;&&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($contact_details)
                                @foreach($contact_details as $contact_detail)
                                    <tr>
                                        <td>{{$contact_detail->id}}</td>
                                        <td>{{$contact_detail->company_name}}</td>
                                        <td>{{$contact_detail->name}}</td>
                                        <td>{{$contact_detail->city}}</td>
                                        <td>{{$contact_detail->country}}</td>
                                        <td>{{$contact_detail->state}}</td>



{{--                                        <td>{{$contact_detail->year_of_formation}}</td>--}}
                                        {{--<td>{{$contact_detail->pan_card}}</td>--}}

                                        {{--<td>{{$contact_detail->gstin_no}}</td>--}}


                                        {{--<td>{{$contact_detail->rera_no}}</td>--}}
{{--                                        <td>{{$contact_detail->no_of_employee}}</td>--}}
{{--                                        <td>{{$contact_detail->client_list}}</td>--}}








                                        <td>{{$contact_detail->address}}</td>

                                        <td>{{$contact_detail->pincode}}</td>
{{--                                        <td>{{$contact_detail->landine_no}}</td>--}}
                                        <td>{{$contact_detail->phone}}</td>




{{--                                        <td>{{$contact_detail->fax_no}}</td>--}}
                                        <td>{{$contact_detail->email_id}}</td>

                                        <td>{{$contact_detail->website}}</td>


                                        {{--<td>{{$contact_detail->associate_with_other_builders}}</td>--}}
                                        {{--<td>{{$contact_detail->builders_name_of_builders}}</td>--}}
                                        {{--<td>{{$contact_detail->builders_since_how_long}}</td>--}}










                                        {{--<td>{{$contact_detail->builders_name_of_project}}</td>--}}

                                        {{--<td>{{$contact_detail->builders_no_of_booking_given}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_name}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_city}}</td>--}}




                                        {{--<td>{{$contact_detail->promoters_edu_qualifiication}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_mobile_no}}</td>--}}

                                        {{--<td>{{$contact_detail->promoters_fax_no}}</td>--}}


                                        {{--<td>{{$contact_detail->promoters_nationality}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_address}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_pincode}}</td>--}}






                                        {{--<td>{{$contact_detail->promoters_country}}</td>--}}

                                        {{--<td>{{$contact_detail->promoters_email}}</td>--}}
                                        {{--<td>{{$contact_detail->promoters_core_competence}}</td>--}}




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








