@include('content.fixed-deposit.header')

    <nav class="navbar navbar-expand-lg  main-nav sticky-top" id="main-nav">
        <button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <i class="fas fa-bars"></i>
        </button>

        <span class="visible-xs hidden-sm hidden-md hidden-sm hidden-lg"><a href=""><img src="/fd/img/Omaxe-Logo.jpg"  class="logo" alt=""></a></span>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link active" href="/fixed-deposit">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="/fixed-deposit/downloads">Downloads</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/idbi-cms-branches">IDBI Bank Branches</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#calculator" aria-expanded="false">Calculator</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/faq">FAQ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/compliance">Compliance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/fd-contact-us">Contact Us</a>
                </li>

                {{--<li class="nav-item ">--}}
                    {{--<a class="nav-link " href="#deposit-highlights">Deposit Highlight</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#schemes">Schemes</a>--}}
                {{--</li>--}}





                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#branches">Bank Branches for Deposits</a>--}}
                {{--</li>--}}

            </ul>
        </div>
    </nav>
</header>


<!--==============================================================
Slider
==================================================================-->
<section class="slider" id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            {{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        </ol>
        <div class="carousel-inner">
            {{--<div class="carousel-item active">--}}
                {{--<img class="d-block w-100" src="/fd/img/slider/slider1.jpg" alt="First slide">--}}
                {{--<div class="top-content">--}}
                    {{--<h2 class="top-con-text">Your savings, earn more, so you can relax more!</h2>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="carousel-item active">
                <img class="d-block w-100"  src="/fd/img/slider/slider2.jpg" alt="Second slide">
                <div class="top-content">
                    {{--<h2 class="top-con-text">Only INR 50,000 as minimum deposit amount. </h2>--}}
                </div>
            </div>


            <div class="carousel-item">
                <img class="d-block w-100" src="/fd/img/slider/slider3.jpg" alt="Third slide">
                <div class="top-content">
                    {{--<h2 class="top-con-text"> Earn up to 13.66% returns per annum</h2>--}}
                </div>
            </div>
        </div>


        {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}

        {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    </div>
</section>


<!--==============================================================
FD Highlights
==================================================================-->

<section class="fd-highlights" id="deposit-highlights">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Highlights of</span> <br>
                        Omaxe Fixed Deposit Scheme</h1>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-md-12">
                <ul class="highlight-points">
                    <li>
                        <figure>
                            <p>
                                Minimum deposit amount <br>
                                Rs. 50,000/-
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                Maximum <br>
                                ROI of <b>11.50%</b> p.a. & Yield <br>
                                up to <b>13.66%</b> p.a. in 3 Years
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                Interest to be <br>
                                compounded monthly on deposits
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                PDC of Principal amount will <br>
                                be given along with FD Receipt
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                Credit Rating BBB (FD) from <br>
                                CARE
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                Interest payable on quarterly/ <br>
                                on maturity.
                            </p>
                        </figure>
                    </li>
                </ul>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>
                        <span>About</span> <br>
                        Omaxe Limited
                    </h2>
                </div>

                <p class="text-center about-us">
                    Omaxe Limited is one of India’s leading real estate development companies. Founded in 1987, the company has fast spread its footprints in 8 States across 27 cities.
                    Today, the company has in its kitty a diversified product portfolio that includes Integrated Townships, Hi-Tech Townships,
                    Group Housing projects, Shopping Malls,  Office Spaces, SCOs and Hotel projects.

                With approx 112.4 million sq. ft. of delivered space in both real estate and construction contracting, the company is currently undertaking 36 real estate projects - 11 Group Housing, 16 Townships, 9 Commercial Malls/Hotels/ SCO. A BSE
                    & NSE listed company, Omaxe has presence in States like Uttar Pradesh, Madhya Pradesh, Punjab, Haryana, Uttarakhand, Rajasthan,
                     Delhi, Himachal Pradesh to name a few and has immensely contributed in the socio-economic development of these cities.

                </p>
            </div>
        </div><!--end row-->
    </div> <!--end container-->
</section>






<!--==============================================================
Benefits of FD
==================================================================-->

<section class="fd-benefits" id="fd-benefits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>
                        Benefits <br>
                        of Fixed Deposit
                    </h2>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-md-12">
                <ul class="fd-benefit-list">
                    <li>
                        <figure>
                            <p>
                                Easy and <br>
                                simple documentation
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                Higher Rate of <br>
                                interest in comparison of Banks &  NBFC's
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <p>
                                No adverse effect of market fluctuation

                            </p>
                        </figure>
                    </li>


                    <li>
                        <figure>
                            <p>
                                Fixed Rate of Interest & higher Yield on deposits
                            </p>
                        </figure>
                    </li>

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--Higher Yield on Deposits--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div><!--end container-->
</section>




<!--==============================================================
Achievement
==================================================================-->
<section class="achievement" id="achievement">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="white">
                        Achievements
                    </h2>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-md-12">
                <ul class="achievement-points">
                    <li>
                        <figure>
                            <div class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 480.006 480.006">
                                    <path d="M.003 464.006h480v16h-480zM463.163 68.43l-32-64a8 8 0 0 0-10.73-3.587l-.006.003-64 32a8.004 8.004 0 0 0 7.152 14.32l46.352-23.16-12.648 36.112C341.69 218.446 198.501 329.522 31.323 344.006l1.36 16C206.16 344.978 354.737 229.701 412.395 65.398l12.912-36.896 23.536 47.08a8.004 8.004 0 0 0 14.32-7.152zM96.003 384.006h-56a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h56a8 8 0 0 0 8-8v-48a8 8 0 0 0-8-8zm-8 48h-40v-32h40v32zM184.003 360.006h-56a8 8 0 0 0-8 8v72a8 8 0 0 0 8 8h56a8 8 0 0 0 8-8v-72a8 8 0 0 0-8-8zm-8 72h-40v-56h40v56zM272.003 320.006h-56a8 8 0 0 0-8 8v112a8 8 0 0 0 8 8h56a8 8 0 0 0 8-8v-112a8 8 0 0 0-8-8zm-8 112h-40v-96h40v96z"/>
                                    <path d="M360.003 264.006h-56a8 8 0 0 0-8 8v168a8 8 0 0 0 8 8h56a8 8 0 0 0 8-8v-168a8 8 0 0 0-8-8zm-8 168h-40v-152h40v152zM448.003 152.006h-56a8 8 0 0 0-8 8v280a8 8 0 0 0 8 8h56a8 8 0 0 0 8-8v-280a8 8 0 0 0-8-8zm-8 280h-40v-264h40v264z"/>
                                </svg>

                            </div>
                            <p>
                                More than 5 years in FD Mobilization
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <div class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 489.9 489.9">
                                    <path d="M340.6 209.05v37.7c0 7.1 2.8 13.7 7.6 18.7v12.8c0 5.5 4.4 9.9 9.9 9.9s9.9-4.4 9.9-9.9v-17.4c0-3.3-1.7-6.4-4.4-8.2-2-1.3-3.2-3.5-3.2-5.9v-37.7c0-13.2 10.8-24 24-24h8.1c13.2 0 24 10.8 24 24v37.7c0 2.4-1.2 4.6-3.2 5.9-2.8 1.8-4.4 4.9-4.4 8.2v36.3c0 4.4 2.6 8.5 6.5 10.4 4.7 2.3 29.1 14.6 51.7 33.1 1.9 1.6 3 3.9 3 6.5v15.9h-69.4c-5.5 0-9.9 4.4-9.9 9.9s4.4 9.9 9.9 9.9H480c5.5 0 9.9-4.4 9.9-9.9v-25.8c0-8.5-3.7-16.4-10.3-21.8-19.9-16.3-41.2-28.2-50.9-33.3v-26.7c4.8-5 7.6-11.6 7.6-18.7v-37.7c0-24.2-19.7-43.8-43.8-43.8h-8.1c-24.1.1-43.8 19.7-43.8 43.9zM9.9 382.85h80.5c5.5 0 9.9-4.4 9.9-9.9s-4.4-9.9-9.9-9.9H19.8v-15.9c0-2.5 1.1-4.9 3-6.5 22.5-18.5 47-30.9 51.7-33.1 4-1.9 6.5-6 6.5-10.4v-36.3c0-3.3-1.7-6.4-4.4-8.2-2-1.3-3.2-3.5-3.2-5.9v-37.7c0-13.2 10.8-24 24-24h8.1c13.2 0 24 10.8 24 24v37.7c0 2.4-1.2 4.6-3.2 5.9-2.8 1.8-4.4 4.9-4.4 8.2v18.2c0 5.5 4.4 9.9 9.9 9.9s9.9-4.4 9.9-9.9v-13.6c4.8-5 7.6-11.6 7.6-18.7v-37.7c0-24.2-19.7-43.8-43.8-43.8h-8.1c-24.2 0-43.8 19.7-43.8 43.8v37.7c0 7.1 2.8 13.7 7.6 18.7v26.7c-9.8 5.1-31 16.9-50.9 33.3-6.5 5.4-10.3 13.3-10.3 21.8v25.7c0 5.5 4.4 9.9 9.9 9.9z" fill="#2c2f33"/>
                                    <path d="M304.4 209.55v-48.7c0-29.7-24.1-53.8-53.8-53.8h-10.5c-29.7 0-53.8 24.1-53.8 53.8v48.7c0 8.8 3.6 17 9.8 23v37.5c-11.7 6-40.3 21.6-67 43.6-7.8 6.4-12.2 15.8-12.2 25.9v33.4c0 5.5 4.4 9.9 9.9 9.9h237c5.5 0 9.9-4.4 9.9-9.9v-33.4c0-10.1-4.4-19.5-12.2-25.9-26.7-21.9-55.3-37.6-67-43.6v-37.5c6.3-5.9 9.9-14.2 9.9-23zm44.6 119.4c3.2 2.6 5 6.5 5 10.6v23.5H136.8v-23.5c0-4.1 1.8-8 5-10.6 29.4-24.2 61.3-40.3 67.4-43.3 4.1-2 6.8-6.3 6.8-10.8v-47c0-3.3-1.7-6.4-4.4-8.2-3.4-2.3-5.4-6-5.4-10v-48.7c0-18.8 15.3-34 34-34h10.5c18.8 0 34 15.3 34 34v48.7c0 4-2 7.8-5.4 10-2.8 1.8-4.4 4.9-4.4 8.2v47c0 4.6 2.7 8.8 6.8 10.8 6 3 37.9 19.2 67.3 43.3z" fill="#2c2f34"/>
                                </svg>
                            </div>
                            <p>
                                More than 12500 customers <br>
                                have parked their surplus funds in Omaxe FD Schemes
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <div class="svg-icon">
                                <svg width="50px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M473.5 267.5c-5.7 0-10.9 1.4-15.5 3.5-7-9-18-14.8-30.3-14.8-6.4 0-12.2 1.7-17.2 4.2l-.5.3-15.7 9.3c-7-8.4-17.6-13.8-29.4-13.8-6.4 0-12.2 1.7-17.2 4.2l-.6.4-60.2 36.9c-13.6-4-28.7-8.4-43.3-12.6-15.4-4.4-30.2-8.4-42-11.4-5.9-1.5-11.1-2.7-15.4-3.6-2.1-.4-4-.8-5.7-1-1.7-.3-3.1-.4-4.7-.4-1.2 0-2.3.1-3.5.3-4.4.6-10.7 1.9-18.2 3.7-15.2 3.6-34.6 8.8-45.3 11.7V266c0-12.6-10.3-22.9-22.9-22.9h-63C10.3 243.2 0 253.4 0 266v177.3c0 12.6 10.3 22.9 22.9 22.9h62.9c12.6 0 22.9-10.3 22.9-22.9v-13.8c13.6 3 43.7 9.5 75.5 16 21.5 4.4 43.7 8.8 62.1 12.2 9.2 1.7 17.4 3.1 24.1 4 6.8 1 11.8 1.6 15.7 1.6 3 0 5.8-.6 8.9-1.4 5.7-1.6 12.2-4.3 19.6-7.9 25.9-12.6 63-36.2 98-59.6 35-23.3 67.7-46.4 83.7-57.4 10-6.9 15.7-18.6 15.7-31 0-21.2-17.2-38.4-38.5-38.5zm-382 175.9c0 3.1-2.6 5.7-5.7 5.7H22.9c-3.1 0-5.7-2.6-5.7-5.7V266c0-3.1 2.6-5.7 5.7-5.7h62.9c3.1 0 5.7 2.6 5.7 5.7v177.4zm395.1-120.5c-19.7 13.6-63.8 44.7-106.5 72.5-21.3 13.9-42.3 26.8-59.5 36.3-8.6 4.7-16.3 8.5-22.4 11.1-3.1 1.3-5.7 2.2-7.9 2.8-2.1.6-3.7.8-4.3.8-1.9 0-6.8-.5-13.2-1.4-22.5-3.3-64.7-11.7-101.1-19.3-18.2-3.8-34.9-7.4-47.1-10-7.1-1.5-12.6-2.7-16-3.5V302c1.7-.5 3.9-1.1 6.5-1.8 9-2.5 22.8-6.1 35.2-9.2 6.2-1.5 12-2.9 16.7-3.9 2.3-.5 4.3-.9 5.9-1.1 1.5-.3 2.7-.3 2.7-.3s.9.1 2.2.2c4.7.7 14.4 3 26.3 6.1 35.6 9.3 91.8 26.1 114.5 33 7.9 2.4 15 5.9 19.6 10.3 2.3 2.2 4.1 4.5 5.3 7 1.2 2.5 1.9 5.2 1.9 8.6 0 6.7-2.7 12.8-7.1 17.2-4.4 4.4-10.3 7-17 7.1l-22.1-2.2-75.6-9.7c-4.7-.6-9 2.7-9.6 7.4-.6 4.7 2.7 9 7.4 9.6l75.8 9.7 23.5 2.3h.4c22.9 0 41.4-18.6 41.5-41.5 0-5.8-1.3-11.2-3.5-15.9-3.4-7.1-8.9-12.7-15.1-16.9-6.2-4.2-13.2-7.2-20.4-9.4-4-1.2-9-2.7-14.7-4.5l46.6-28.5c3-1.5 6.1-2.3 9.4-2.3 5.5 0 10.6 2.1 14.3 5.6l-23 13.6c-4.1 2.4-5.4 7.7-3 11.8 2.4 4.1 7.7 5.4 11.8 3l53.4-31.7c3-1.5 6.1-2.4 9.4-2.4 5.9 0 11.2 2.5 15.1 6.4l-62.2 36.9c-4.1 2.4-5.4 7.7-3 11.8 2.4 4.1 7.7 5.4 11.8 3l67.2-39.9c.7-.1 1.3-.3 2-.5 1.4-.6 2.5-1.5 3.4-2.6l2.1-1.2c3-1.5 6.1-2.4 9.4-2.4 5.9 0 11.2 2.4 15.1 6.2 3.9 3.9 6.2 9.2 6.2 15.1-.1 7.2-3.4 13.5-8.3 16.9zM309.5 151.4c-11.2-11.2-24.4-19.4-38.9-24.4 15.5-10.7 25.7-28.6 25.7-48.8 0-32.7-26.6-59.2-59.2-59.2s-59.2 26.6-59.2 59.2c0 20.2 10.2 38.1 25.7 48.8-14.5 5-27.8 13.3-38.9 24.4-19.4 19.4-30 45.1-30 72.5h16c0-47.7 38.8-86.5 86.5-86.5s86.5 38.8 86.5 86.5h16c-.2-27.4-10.8-53.2-30.2-72.5zM237 121.3c-23.8 0-43.2-19.4-43.2-43.2s19.4-43.2 43.2-43.2 43.2 19.4 43.2 43.2-19.3 43.2-43.2 43.2z"/>
                                    <path stroke="#000" stroke-width="13" stroke-miterlimit="10" d="M134.6 223.8h204.9"/>
                                </svg>
                            </div>
                            <p>
                                More than 24000 FDR issued and timely repayment of more than 17000 FDR
                            </p>
                        </figure>
                    </li>
                </ul>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section>




<!--==============================================================
Why Omaxe
==================================================================-->
{{--<section class="fd-schemes" id="fd-schemes">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="title">--}}
                    {{--<h2>--}}
                        {{--<span>Why</span> <br>--}}
                        {{--Omaxe FD Scheme--}}
                    {{--</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-12 text-center">--}}
                {{--<p>--}}
                    {{--Omaxe Limited is one of India’s leading real estate development companies. Founded in 1987, the company has fast spread its footprints in 8 States across 27 cities. Today, the company has in its kitty a diversified product portfolio that includes Integrated Townships, Hi-Tech Townships, Group Housing projects, Shopping Malls, Office Spaces, SCOs and Hotel projects. With approx.</p>--}}

                {{--<p> 108.7 million sq. ft. of delivered space in both real estate and construction contracting, the company is currently undertaking 36 real estate projects - 11 Group Housing, 16 Townships, 9 Commercial Malls/Hotels/ SCO. A BSE--}}
                    {{--& NSE listed company, Omaxehas presence in States like Uttar Pradesh, Madhya Pradesh, Punjab, Haryana, Uttarakhand, Rajasthan, Delhi, Himachal Pradesh to name a few and has immensely contributed in the socio-economic development of these cities.--}}

                {{--</p>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}
    {{--</div><!--end container-->--}}
{{--</section>--}}


<!--==============================================================
Why Omaxe new
==================================================================-->

{{--<section class="fd-highlights" id="deposit-highlights">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="title">--}}
                    {{--<h1><span>Why </span> <br>--}}
                        {{--Omaxe FD Scheme</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<ul class="highlight-points">--}}
                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--Trust of 30 years for Investors--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--Presence of omaxe in 8 state and 27 cities--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--15 regional offices.--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--Pan india doorstep services y 6 national distributors--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--More than 1 lakh exsisting HNI investors.--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<figure>--}}
                            {{--<p>--}}
                                {{--Timely repayment record.--}}
                            {{--</p>--}}
                        {{--</figure>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}


        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="title">--}}
                    {{--<h2>--}}
                        {{--<span>About</span> <br>--}}
                        {{--Omaxe Limited--}}
                    {{--</h2>--}}
                {{--</div>--}}

                {{--<p class="text-center about-us">--}}
                    {{--Omaxe Limited is one of India’s leading real estate development companies. Founded in 1987, the company has fast spread its footprints in 8 States across 27 cities. Today, the company has in its kitty a diversified product portfolio that includes Integrated Townships, Hi-Tech Townships, Group Housing projects, Shopping Malls, Office Spaces, SCOs and Hotel projects. With approx.</p>--}}

                {{--<p> 108.7 million sq. ft. of delivered space in both real estate and construction contracting, the company is currently undertaking 36 real estate projects - 11 Group Housing, 16 Townships, 9 Commercial Malls/Hotels/ SCO. A BSE--}}
                    {{--& NSE listed company, Omaxehas presence in States like Uttar Pradesh, Madhya Pradesh, Punjab, Haryana, Uttarakhand, Rajasthan, Delhi, Himachal Pradesh to name a few and has immensely contributed in the socio-economic development of these cities.--}}

                {{--</p>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}
    {{--</div> <!--end container-->--}}
{{--</section>--}}






<!--==============================================================
Schemes
==================================================================-->
<section class="schemes" id="schemes">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>
                        Type of Scheme
                    </h2>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-md-6">
                <div class="radius-border">
                    <p class="scheme-title">CUMULATIVE SCHEME*</p>
                    {{--<div class="horizontal-scroll">--}}
                        <table class="table table-bordered" cellspacing="0" cellpadding="0" border="1">
                            <thead class="">
                            <tr>
                                <th scope="col">Period</th>
                                <th scope="col">Minimum Amount (Rs.)</th>
                                <th scope="col">Rate of Interest (%p.a.)</th>
                                <th scope="col">Payable on Maturity (Rs.)</th>
                                <th scope="col">Yield (%p.a.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1 year</th>
                                <td>50,000/-</td>
                                <td>10.50%</td>
                                <td>55,510/-</td>
                                <td>11.02%</td>
                            </tr>
                            <tr>
                                <th>2 year</th>
                                <td>50,000/-</td>
                                <td>11.0%</td>
                                <td>62,241/-</td>
                                <td>12.24%</td>
                            </tr>
                            <tr>
                                <th>3 year</th>
                                <td>50,000/-</td>
                                <td>11.50%</td>
                                <td>70,484/-</td>
                                <td>13.66%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                {{--</div>--}}

                <div class="schemes-des">
                    <p>*Interest is compounded monthly and payable on maturity</p>
                    <p>*Additional amount in multiples of Rs. 1000/-</p>
                </div>



            </div>

            <div class="col-md-6">
                <div class="radius-border">
                    <p class="scheme-title">NON CUMULATIVE SCHEME*</p>
                    {{--<div class="horizontal-scroll">--}}
                        <table class="table table-bordered">
                            <thead class="">
                            <tr>
                                <th scope="col">Period</th>
                                <th scope="col">Minimum <br> Amount (Rs.)</th>
                                <th scope="col">Rate of <br> Interest (%p.a.)</th>
                                <th scope="col">Yield (%p.a.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1 year</th>
                                <td>50,000/-</td>
                                <td>10.50%</td>
                                <td>10.59%</td>
                            </tr>
                            <tr>
                                <th>2 year</th>
                                <td>50,000/-</td>
                                <td>11.0%</td>
                                <td>11.10%</td>
                            </tr>
                            <tr>
                                <th>3 year</th>
                                <td>50,000/-</td>
                                <td>11.50%</td>
                                <td>11.61%</td>
                            </tr>
                            </tbody>
                        </table>


                    {{--</div>--}}

                </div>

                <div class="schemes-des">
                    <p>*Interest is compounded monthly and payable on quarterly basis</p>
                    <p>*Additional amount in multiples of Rs. 1000/-</p>
                </div>


            </div>

        </div>

    </div><!--end container-->
</section>



<!--==============================================================
Financial Calculator
==================================================================-->
<section class="calculator" id="calculator">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="white">
                        <span>financial</span> <br>
                        Calculator
                    </h2>
                </div>
            </div>
        </div><!--end row-->


        <form action="" class="financial-calculator">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Principal Amount / Deposit  Amount [In Rs.]</label>
                        <input type="text" class="form-control" id="depositAmount" name="depositAmount"  placeholder="Rs.">
                    </div>

                </div>

                <div class="col-md-6">
                    <label for="">Total Interest Receivable</label>
                    <input type="text" class="form-control" id="totalInterest1" readonly placeholder="Rs.">

                </div>

            </div><!--end row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Type of Scheme*</label>
                        {{--<select name="" id="">--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--</select>--}}

                        <select name="depositScheme" id="depositScheme"  class="form-control" onchange="return showTD(this.value)">
                            <option value="">-- Select--</option>
                            <option value="A"> Non Cumulative</option>
                            <option value="B"> Cumulative</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="">Total Maturity Amount</label>
                    <input type="text" class="form-control" id="totalMaturity1" readonly placeholder="Rs.">

                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Period of Deposit in Years*</label>
                        {{--<select name="" id="" class="form-control">--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--<option value="">Select</option>--}}
                        {{--</select>--}}


                        <div class="pT5" id="nonCum">
                            <select name="schemeAPeriod" id="schemeAPeriod" class="form-control">
                                <option value="">-- Select--</option>
                                <option value="10.50|1|4">1 Year</option>
                                <option value="11.00|2|8">2 Years</option>
                                <option value="11.50|3|12">3 Years</option>
                            </select>
                        </div>
                        <div class="pT5" id="Cum" style="display:none;">
                            <select name="schemeBPeriod" id="schemeBPeriod" class="form-control">
                                <option value="0">-- Select--</option>
                                <option value="10.50|1">1 Year</option>
                                <option value="11.00|2">2 Years</option>
                                <option value="11.50|3">3 Years</option>
                            </select>
                        </div>




                    </div>
                </div>

                <div class="col-md-6">
                    <label for="">Effective yield</label>
                    <input type="text" class="form-control" id="effectiveYield1" readonly placeholder="Rs.">
                    {{--<h3 style="color:red;" id="emsg"></h3>--}}
                    {{--<h3 style="color:red;" id="smsg"></h3>--}}
                </div>
            </div><!--end row-->


            {{--$("#totalInterest").append(TotalInterest);--}}
            {{--$("#totalMaturity").append(TotalMaturity);--}}
            {{--$("#effectiveYield").append(EffectiveYield+'%');--}}
            {{----}}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="button" onclick="return CalculateFD()" class="btn btn-primary">Calculate</button>



                    </div>
                </div>

                <div class="col-md-6">
                    <button type="button" onclick="return ClearFD()" class="btn btn-primary">Reset</button>
                </div>



            </div><!--end row-->
        </form>
    </div><!--end container-->
</section>





<!--==============================================================
Distributors
==================================================================-->
<section class="distributor" id="distributor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>
                        <span>Our</span>  <br>
                        National Distributors
                    </h2>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-md-12">
                <ul class="distributors-list">
                    <li>
                        <figure>
                            <img src="/fd/img/smc-logo.jpg" alt="">
                            <p>
                                SMC Global <br>
                                Securities Limited
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="/fd/img/investors.jpg" alt="">
                            <p>
                                RR Investors <br>
                                Capital Services Private Limited
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="/fd/img/iifl.jpg" alt="">

                            <p>
                                India Infoline <br>
                                Limited
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="/fd/img/karvy.jpg" alt="">
                            <p>
                                Karvy Stock Broking <br>
                                Limited
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="/fd/img/almondz.jpg" alt="">

                            <p>
                                Almondz Global Securities <br>
                                Limited
                            </p>
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img src="/fd/img/security.jpg" alt="">
                            <p>
                                Security <br>
                                Investments Limited
                            </p>
                        </figure>
                    </li>
                </ul>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section>



<!--==============================================================
Contact us
==================================================================-->
{{--<section class="contact" id="contact">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="title">--}}
                    {{--<h2>--}}
                        {{--CONTACT US--}}
                    {{--</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}





        {{--<div class="contact-card">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="address-card">--}}
                        {{--<div class="address-block">--}}
                            {{--<p class="title"><i class="fa fa-map-marker-alt"></i></p>--}}
                            {{--<p>--}}
                                {{--Omaxe  Limited.--}}
                                {{--Shop No. 19 B, First Floor, Omaxe Celebration--}}
                                {{--Mall,Sohna Road, Gurgaon – 122 001. Haryana--}}
                            {{--</p>--}}
                        {{--</div>--}}


                        {{--<div class="address-block">--}}
                            {{--<p class="title">--}}
                                {{--<i class="fas fa-phone-volume">--}}

                                {{--</i>--}}

                            {{--</p>--}}

                            {{--<p><a href="">1800 1028 989</a></p>--}}
                        {{--</div>--}}

                        {{--<div class="address-block">--}}
                            {{--<p class="title"><i class="far fa-envelope"></i></p>--}}

                            {{--<p><a href="mailto:support@fdomaxe.com">support@fdomaxe.com</a></p>--}}
                        {{--</div>--}}



                    {{--</div>--}}

                {{--</div>--}}

                {{--<div class="col-md-6">--}}



                    {{--<form>--}}

                        {{--<div class="alert alert-danger print-error-msg" style="display:none">--}}
                            {{--<ul></ul>--}}
                        {{--</div>--}}

                        {{--{{csrf_field()}}--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="input-group ">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="far fa-user input-icon"></i></span>--}}

                                {{--</div>--}}
                                {{--<input type="text" name="name" placeholder="Name" class="form-control" aria-label="Amount (to the nearest dollar)">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="far fa-envelope input-icon"></i></span>--}}

                                {{--</div>--}}
                                {{--<input type="text" name="email" placeholder="Email" class="form-control" aria-label="Amount (to the nearest dollar)">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<button type="submit" class="btn btn-primary btn-submit">Send</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--end row-->--}}
    {{--</div><!--end container-->--}}
{{--</section>--}}


<!--==============================================================
Footer
==================================================================-->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a href="/fixed-deposit">Home <span>|</span></a>
                    <a href="/fixed-deposit/downloads">Downloads    <span>|</span></a>
                    <a href="/fixed-deposit/idbi-cms-branches">IDBI Bank Branches  <span>|</span></a>

                    <a href="#calculator">Calculator <span>|</span></a>
                    <a href="/fixed-deposit/faq">FAQ <span>|</span> </a>
                    <a href="/fixed-deposit/compliance">Compliance <span>|</span></a>
                    <a href="/fixed-deposit/fd-contact-us">Contact us</a>
                </p>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</footer>

<section class="hidden-lg hidden-sm hidden-md">
    <div class="button-wrap">
        <a href="tel:01140554199"  class="trigger  btn request-callback"><i class="fa fa-phone" style="transform: rotate(90deg)"></i>&nbsp;&nbsp; Call Now
        </a>
    </div>
</section>

<a href="#0" class="cd-top js-cd-top">Top</a>


<script src="/js/fdjs.js"></script>


<script src="/fd/js/vendor/jquery-3.3.1.min.js"></script>




<script src="/fd/js/vendor/bootstrap.min.js"></script>


<script src="/fd/js/main.js"></script>
<script src="/fd/js/vendor/intlTelInput.min.js"></script>


<script type="text/javascript">

    //Smooth section  scroll//

    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });


</script>



<script>
    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('.pagination span').addClass('page-link');
</script>


<script type="text/javascript">

    $(function() {
        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();

            $('#load a').css('color', '#dfecf6');
            $('#load').append('<img style=" position:absolute;top:0; margin-top:100px; margin-left: auto;margin-right: auto;left: 0; right: 0;z-index: 999;" src="{{cdn()}}/images/static/loading.gif" />');


            var url = $(this).attr('href');
            getArticles(url);
            window.history.pushState("", "", url);
        });

        function getArticles(url) {
            $.ajax({
                url : url
            }).done(function (data) {
                $('.faqq').html(data);
            }).fail(function () {
                alert('faq could not be loaded.');
            });
        }
    });

</script>

<script>
    $(document).ready(function(){
        $('.btn-submit').click(function(e){

            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var message = $("textarea[name='message']").val();

            $.ajax({

                url:"/fixed-deposit",
                type: "POST",
                data:{_token:_token,name:name,email:email,message:message},
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }
                    else{
                        printErrorMsg(data.error);
                    }
                }

            });

        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

    });



    function ClearFD(){
        $("#depositAmount").val("");
        $("#depositScheme").val("");
        $("#schemeBPeriod").val("");

    }
</script>








</body>
</html>
