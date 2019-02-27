@include('admin.layouts.header')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('omaxeadmin')}}" class="site_title">
                        <img src="{{asset('/images/favicon.ico')}}" width="30" height="30" alt="">
                        <span>Omaxe Admin</span>
                    </a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('admin/images/user.png')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>@if(Auth::user()->role=="MainAdmin")

                                Main

                            @endif

                            @if(Auth::user()->role=="SuperAdmin")

                                Master

                            @endif

                            @if(Auth::user()->role=="LeadsAdmin")

                                Leads

                            @endif

                            @if(Auth::user()->role=="SeoAdmin")

                                Seo

                            @endif

                            Admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br>

                <!-- sidebar menu -->
                     @include('admin.sidebar')
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
    @include('admin.layouts.nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Omaxe Admin
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
@include('admin.layouts.footer')