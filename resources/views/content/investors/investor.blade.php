@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>
        /* *{margin:0;padding:0;text-decoration:none}
body{background:#555;}
header{position:relative;width:100%;background:#333;}
.logo{position:relative;z-index:123;padding:10px;font:18px verdana;color:#6DDB07;float:left;width:15%}
.logo a{color:#6DDB07;}
nav{position:relative;width:980px;margin:0 auto;} */
        #cssmenu,#cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile{border:0;list-style:none;line-height:1;display:block;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
        #cssmenu:after,#cssmenu > ul:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}
        #cssmenu #head-mobile{display:none}
        #cssmenu{font-family:sans-serif;background:#333}
        #cssmenu > ul > li{float:left}
        #cssmenu > ul > li > a{padding:17px;font-size:12px;letter-spacing:1px;text-decoration:none;color:#ddd;font-weight:700;}
        #cssmenu > ul > li:hover > a,#cssmenu ul li.active a{color:#fff}
        #cssmenu > ul > li:hover,#cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover{background:#116dac !important;-webkit-transition:background .3s ease;-ms-transition:background .3s ease;transition:background .3s ease;}
        #cssmenu > ul > li.has-sub > a{padding-right:30px}
        #cssmenu > ul > li.has-sub > a:after{position:absolute;top:22px;right:11px;width:8px;height:2px;display:block;background:#ddd;content:''}
        #cssmenu > ul > li.has-sub > a:before{position:absolute;top:19px;right:14px;display:block;width:2px;height:8px;background:#ddd;content:'';-webkit-transition:all .25s ease;-ms-transition:all .25s ease;transition:all .25s ease}
        #cssmenu > ul > li.has-sub:hover > a:before{top:23px;height:0}
        #cssmenu ul ul{position:absolute;left:-9999px}
        #cssmenu ul ul li{height:0;-webkit-transition:all .25s ease;-ms-transition:all .25s ease;background:#333;transition:all .25s ease}
        #cssmenu ul ul li:hover{}
        #cssmenu li:hover > ul{left:auto}
        #cssmenu li:hover > ul > li{height:35px}
        #cssmenu ul ul ul{margin-left:100%;top:0}
        #cssmenu ul ul li a{border-bottom:1px solid rgba(150,150,150,0.15);padding:11px 15px;width:170px;font-size:12px;text-decoration:none;color:#ddd;font-weight:400;}
        #cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a{border-bottom:0}
        #cssmenu ul ul li:hover > a,#cssmenu ul ul li a:hover{color:#fff}
        #cssmenu ul ul li.has-sub > a:after{position:absolute;top:16px;right:11px;width:8px;height:2px;display:block;background:#ddd;content:''}
        #cssmenu ul ul li.has-sub > a:before{position:absolute;top:13px;right:14px;display:block;width:2px;height:8px;background:#ddd;content:'';-webkit-transition:all .25s ease;-ms-transition:all .25s ease;transition:all .25s ease}
        #cssmenu ul ul > li.has-sub:hover > a:before{top:17px;height:0}
        #cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover{background:#363636;}
        #cssmenu ul ul ul li.active a{border-left:1px solid #333}
        #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active> a{border-top:1px solid #333}

        @media screen and (max-width:1000px){
            .logo{position:absolute;top:0;left: 0;width:100%;height:46px;text-align:center;padding:10px 0 0 0 ;float:none}
            .logo2{display:none}
            nav{width:100%;}
            #cssmenu{width:100%}
            #cssmenu ul{width:100%;display:none}
            #cssmenu ul li{width:100%;border-top:1px solid #444}
            #cssmenu ul li:hover{background:#363636;}
            #cssmenu ul ul li,#cssmenu li:hover > ul > li{height:auto}
            #cssmenu ul li a,#cssmenu ul ul li a{width:100%;border-bottom:0}
            #cssmenu > ul > li{float:none}
            #cssmenu ul ul li a{padding-left:25px}
            #cssmenu ul ul li{background:#333!important;}
            #cssmenu ul ul li:hover{background:#363636!important}
            #cssmenu ul ul ul li a{padding-left:35px}
            #cssmenu ul ul li a{color:#ddd;background:none}
            #cssmenu ul ul li:hover > a,#cssmenu ul ul li.active > a{color:#fff}
            #cssmenu ul ul,#cssmenu ul ul ul{position:relative;left:0;width:100%;margin:0;text-align:left}
            #cssmenu > ul > li.has-sub > a:after,#cssmenu > ul > li.has-sub > a:before,#cssmenu ul ul > li.has-sub > a:after,#cssmenu ul ul > li.has-sub > a:before{display:none}
            #cssmenu #head-mobile{display:block;padding:23px;color:#ddd;font-size:12px;font-weight:700}
            .button{width:55px;height:46px;position:absolute;right:0;top:0;cursor:pointer;z-index: 12399994;}
            .button:after{position:absolute;top:22px;right:20px;display:block;height:4px;width:20px;border-top:2px solid #dddddd;border-bottom:2px solid #dddddd;content:''}
            .button:before{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;position:absolute;top:16px;right:20px;display:block;height:2px;width:20px;background:#ddd;content:''}
            .button.menu-opened:after{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;top:23px;border:0;height:2px;width:19px;background:#fff;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
            .button.menu-opened:before{top:23px;background:#fff;width:19px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}
            #cssmenu .submenu-button{position:absolute;z-index:99;right:0;top:0;display:block;border-left:1px solid #444;height:46px;width:46px;cursor:pointer}
            #cssmenu .submenu-button.submenu-opened{background:#262626}
            #cssmenu ul ul .submenu-button{height:34px;width:34px}
            #cssmenu .submenu-button:after{position:absolute;top:22px;right:19px;width:8px;height:2px;display:block;background:#ddd;content:''}
            #cssmenu ul ul .submenu-button:after{top:15px;right:13px}
            #cssmenu .submenu-button.submenu-opened:after{background:#fff}
            #cssmenu .submenu-button:before{position:absolute;top:19px;right:22px;display:block;width:2px;height:8px;background:#ddd;content:''}
            #cssmenu ul ul .submenu-button:before{top:12px;right:16px}
            #cssmenu .submenu-button.submenu-opened:before{display:none}
            #cssmenu ul ul ul li.active a{border-left:none}
            #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active > a{border-top:none}
        }



    </style>



    <div class="top-content invester-tab">

        <div class="content-cover"></div>

    </div>


    <header>
        <nav id='cssmenu'>
            <!-- <div class="logo"><a href="index.html">Responsive </a></div> -->
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li class='active'><a href='#'>ANNUAL REPORTS</a></li>
                <li><a href='#'>BALANCE SHEET OF SUBSIDIARIES</a></li>
                <li><a href='#'>CERTIFICATE OF INCORPORATIONS</a></li>
                <li><a href='#'>MOA &AMP; AOA</a></li>
                <li><a href='#'>PROSPECTUS</a></li>
                {{--<li><a href='#'>CONTACT</a></li>--}}
            </ul>
        </nav>
    </header>


    {{--<nav class="navbar navbar-default" role="navigation">--}}
        {{--<div class="container-fluid">--}}
            {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<a class="navbar-brand" href="#">Brand Logo</a>--}}
            {{--</div>--}}

            {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="pull-left"><a href="#">Dashboard</a></li>--}}
                    {{--<li class="active"><a href="#">Stories</a></li>--}}
                    {{--<li><a href="#">Videos</a></li>--}}
                    {{--<li><a href="#">Photos</a></li>--}}
                    {{--<li class="social pull-right"><a href="#">Social Links</a></li>--}}
                {{--</ul>--}}
            {{--</div><!-- /.navbar-collapse -->--}}
        {{--</div><!-- /.container-fluid -->--}}
    {{--</nav>--}}


    {{--<nav aria-label="breadcrumb">--}}
        {{--<ol class="breadcrumb" style="font-size: 15px;">--}}
            {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
            {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
            {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
        {{--</ol>--}}
    {{--</nav>--}}

    <section>
        <div class="container">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                       <div>

                       </div>
                    </div>
                    <div class="col-md-4">
                        dsfsf
                    </div>
                    <div class="col-md-4">
                        dsfsf
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>
    @include('layouts.footer')

@endsection

