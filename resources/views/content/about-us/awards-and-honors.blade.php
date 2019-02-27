@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }


        .about-slider .carousel-item img{
            object-fit: cover;
            height: 400px;
            object-position: top;
        }

        .repdata button{
            background-color: #0066b2;
            border-radius: 0;
            color: #fff;
            border: none;
            padding: 4px 10px;
        }

        .tab-pane p{
            margin: 10px 0;
        }


    </style>


    <div class="top-content awards-honors-banner">


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
                <li class='active'><a href='/about-us/awards-and-honors'>AWARDS AND HONORS</a></li>
                <li><a href='/about-us/cmd-message'>CMD MESSSAGE</a></li>
                <li><a href='/about-us/leadership-team'>LEADERSHIP TEAM</a></li>
                <li><a href='/about-us/mission-and-vision'>MISSION AND VISION</a></li>
                <li><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li><a  href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>

    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Awards And Honors") }}




    <section class="invcon">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="main-content-heading" style="margin-bottom: 50px;">
                        <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">Awards and honors</h1>
                    </div>
                </div>
            </div>



            <div class="row about-us-page">


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards16">
                            <li data-src="/images/awards-image/the-award-for-Developer-of-the-Year-Township-Non-Metro.jpeg" data-sub-html="#caption6">
                                <a href=""><img src="/images/awards-image/the-award-for-Developer-of-the-Year-Township-Non-Metro.jpeg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption6" style="display: none;">
                            Omaxe Ltd. bagged the award for Developer of the Year - Township - Non Metro for its project Omaxe New Chandigarh at 10th Realty+ Excellence Awards 2018 held in New Delhi recently. The Award was received by Mr. Mohit Goel, CEO, Omaxe Ltd.
                        </div>

                        <div class="career-card-data">
                            <p>Omaxe Ltd. bagged the award for Developer of the Year - Township - Non Metro for its project Omaxe New Chandigarh at 10th Realty+ Excellence Awards 2018...</p>
                        </div>

                    </figure>

                </div>



                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards13">
                            <li data-src="{{cdn()}}/images/awards-image/Eminence-awards.jpeg" data-sub-html="#caption7">
                                <a href=""><img src="{{cdn()}}/images/awards-image/Eminence-awards.jpeg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption7" style="display: none;">
                            At Eminence Awards 2018  held on June 10, 2018 in Indore, Omaxe Ltd. was recognized for building Best Township 'Omaxe City-1'. The Award, which was organized by Dainik Bhaskar Group was received by Mr. Shravan Kumar Govil and Mr. Vineet Sharma, Business Head from the hands of Hon'ble Minister of State for Health and Family Welfare Mr. Ashwini Kumar Choubey.
                        </div>

                        <div class="career-card-data">
                            <p>At Eminence Awards 2018  held on June 10, 2018 in Indore, Omaxe Ltd. was recognized for building Best Township 'Omaxe City-1'....</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards14">
                            <li data-src="{{cdn()}}/images/awards-image/Brics.jpg" data-sub-html="#caption17">
                                <a href=""><img src="{{cdn()}}/images/awards-image/Brics.jpg" alt=""></a>
                            </li>


                        </ul>


                        <div id="caption17" style="display: none;">
                            Our CEO, awarded as Real Estate Most Enterprising CEO of the year at BRICS Business Forum Leadership Award held in New Delhi on May 23rd, 2018.
                        </div>

                        <div class="career-card-data">
                            <p>Our CEO, awarded as Real Estate Most Enterprising CEO of the year at BRICS Business Forum Leadership Award held in New Delhi on May 23rd, 2018.</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards">
                            <li data-src="{{cdn()}}/images/awards-image/Best-shopping-Complex-launch-of-the-year-2018.jpg" data-sub-html="#caption18">
                                <a href=""><img src="{{cdn()}}/images/awards-image/Best-shopping-Complex-launch-of-the-year-2018.jpg" alt=""></a>
                            </li>


                            <li data-src="{{cdn()}}/images/awards-image/4.jpg">
                                <a href=""><img src="{{cdn()}}/images/awards-image/4.jpg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption18" style="display: none;">
                            ISCA Award For Best shopping Complex launch of the year 2018.
                        </div>


                        <div class="career-card-data">
                            <p> ISCA Award For Best shopping Complex launch of the year 2018.</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards1">
                            <li data-src="{{cdn()}}/images/awards-image/1.jpg" data-sub-html="#caption19">
                                <a href=""><img src="{{cdn()}}/images/awards-image/1.jpg" alt=""></a>
                            </li>


                            <li data-src="{{cdn()}}/images/awards-image/4.jpg">
                                <a href=""><img src="{{cdn()}}/images/awards-image/4.jpg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption19" style="display: none;">
                            NDTV Award of Silver Birch.
                        </div>


                        <div class="career-card-data">
                            <p>NDTV Award of Silver Birch.</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards2">
                            <li data-src="{{cdn()}}/images/awards-image/2.jpg" data-sub-html="#caption20">
                                <a href=""><img src="{{cdn()}}/images/awards-image/2.jpg" alt=""></a>
                            </li>


                            <li data-src="{{cdn()}}/images/awards-image/Runner-Up.jpg">
                                <a href=""><img src="{{cdn()}}/images/awards-image/Runner-Up.jpg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption20" style="display: none;">
                            Oh!Max Theme Park was announced as the winner for new attraction introduced in 2017 and Runner-up for best HR practices.
                        </div>


                        <div class="career-card-data">
                            <p>Oh!Max Theme Park was announced as the winner for new attraction introduced in 2017 and Runner-up for best HR practices.</p>
                        </div>

                    </figure>

                </div>




            </div>


            <div class="row about-us-page">





                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards3">
                            <li data-src="{{cdn()}}/images/awards-image/3.jpg" data-sub-html="#caption21">
                                <a href=""><img src="{{cdn()}}/images/awards-image/3.jpg" alt=""></a>
                            </li>


                        </ul>


                        <div id="caption21" style="display: none;">
                            At the Golden Bricks Award for its innovation and outstanding contribution to the industry.
                        </div>


                        <div class="career-card-data">
                            <p>At the Golden Bricks Award for its innovation and outstanding contribution to the industry.</p>
                        </div>

                    </figure>

                </div>

                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards4">
                            <li data-src="{{cdn()}}/images/awards-image/DM_6xHzV4AIGTm2.jpg" data-sub-html="#caption22">
                                <a href=""><img src="{{cdn()}}/images/awards-image/DM_6xHzV4AIGTm2.jpg" alt=""></a>
                            </li>

                        </ul>

                        <div id="caption22" style="display: none;">
                            We're honored to receive the Realty Plus Excellence in Delivery Awards, 2017 & create a benchmark yet again.
                        </div>

                        <div class="career-card-data">
                            <p>We're honored to receive the Realty Plus Excellence in Delivery Awards, 2017 & create a benchmark yet again.</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards5">
                            <li data-src="{{cdn()}}/images/awards-image/yogi-award.jpg" data-sub-html="#caption24">
                                <a href=""><img src="{{cdn()}}/images/awards-image/yogi-award.jpg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption24" style="display: none;">
                            Best Builder award by the Honourable Chief Minister of Uttar Pradesh, Mr. Yogi Adityanath.
                        </div>

                        <div class="career-card-data">
                            <p>Best Builder award by the Honourable Chief Minister of Uttar Pradesh, Mr. Yogi Adityanath.</p>
                        </div>

                    </figure>

                </div>


            </div>


            <div class="row about-us-page">


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards6">
                            <li data-src="{{cdn()}}/images/awards-image/yoginath-award.jpeg" data-sub-html="#caption1">
                                <a href=""><img src="{{cdn()}}/images/awards-image/yoginath-award.jpeg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption1" style="display: none;">
                            Received felicitation by Chief Minister of Uttar Pradesh Shri Yogi Adityanath Ji for its remarkable contribution towards various aspects of the development of society.
                        </div>

                        <div class="career-card-data">
                            <p>Received felicitation by Chief Minister of Uttar Pradesh Shri Yogi Adityanath Ji for  its remarkable contribution...</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards8">
                            <li data-src="{{cdn()}}/images/awards-image/a-2.jpg" data-sub-html="#caption3">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-2.jpg" alt=""></a>
                            </li>

                        


                        </ul>

                        <div id="caption3" style="display: none;">
                            Our CEO, Mr. Mohit Goel received the award for ‘Young Male Entrepreneur of the Year’ from the Honorable Minister of Road Transport, Highways and Shipping, Mr. Nitin Gadkari at Infra & Realty Sutra Awards 2014.
                        </div>



                        <div class="career-card-data">
                            <p>Our CEO, Mr. Mohit Goel received the award for ‘Young Male Entrepreneur of the Year’ from the Honorable Minister of Road Transport...</p>
                        </div>


                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards9" >
                            <li data-src="{{cdn()}}/images/awards-image/a-1-2.jpg" data-sub-html="#caption4444">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-1-2.jpg" alt=""></a>
                            </li>




                        </ul>


                        <div id="caption4444" style="display: none;">
                            Our Company won the award for ‘Best Developer in Affordable Housing’ for its group housing project “Omaxe Height” at sector 86, Faridabad at the recently concluded Infra & Realty Sutra Awards 2014, presented by the Honourable Minister of Road Transport, Highways and Shipping, Mr. Nitin Gadkari to our Chairman & Managing Director, Mr. Rohtas Goel.
                        </div>

                        <div class="career-card-data">
                            <p>Our Company won the award for ‘Best Developer in Affordable Housing’ for its group housing project “Omaxe Height” at sector 86, Faridabad... </p>
                        </div>




                    </figure>

                </div>


            </div>


            <div class="row about-us-page">

                {{--<div class="col-md-4">--}}
                    {{--<figure class="career-card demo-gallery">--}}
                        {{--<ul class="img-stack" id="awards7">--}}
                            {{--<li data-src="{{cdn()}}/images/awards-image/Award1.jpg" data-sub-html="#caption2">--}}
                                {{--<a href=""><img src="{{cdn()}}/images/awards-image/Award1.jpg" alt=""></a>--}}
                            {{--</li>--}}

                            {{--<li data-src="{{cdn()}}/images/awards-image/Award2.jpg" data-sub-html="#caption2">--}}
                                {{--<a href=""><img src="{{cdn()}}/images/awards-image/Award2.jpg" alt=""></a>--}}
                            {{--</li>--}}

                            {{--<li data-src="{{cdn()}}/images/awards-image/Award3.jpg" data-sub-html="#caption2">--}}
                                {{--<a href=""><img src="{{cdn()}}/images/awards-image/Award3.jpg" alt=""></a>--}}
                            {{--</li>--}}



                        {{--</ul>--}}

                        {{--<div id="caption2" style="display: none">--}}
                            {{--Our company won a Special Jury Award for Excellent contribution to Real Estate in Tier 2 & Tier 3 Cities at the Property Awards 2015 which was presented by Honourable Minister of State for Housing & Urban Poverty Alleviation Mr. Babul Supriyo to our Joint Managing Director, Mr. Sunil Goel.--}}
                        {{--</div>--}}

                        {{--<div class="career-card-data">--}}
                            {{--<p>Our company won a Special Jury Award for Excellent contribution to Real Estate in Tier 2 & Tier 3 Cities at the Property Awards 2015...</p>--}}
                        {{--</div>--}}

                    {{--</figure>--}}

                {{--</div>--}}



                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards10">
                            <li data-src="{{cdn()}}/images/awards-image/a-3-2.jpg" data-sub-html="#caption53">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-3-2.jpg" alt=""></a>
                            </li>

                            <li data-src="{{cdn()}}/images/awards-image/a-3.jpg">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-3.jpg" alt=""></a>
                            </li>
                        </ul>

                        <div id="caption53" style="display: none;">
                            Our CEO, Mr. Mohit Goel won young Achiever's award by ABP real estate awards 2014.
                        </div>

                        <div class="career-card-data">
                            <p>Our CEO, Mr. Mohit Goel won young Achiever's award by ABP real estate awards 2014.</p>
                        </div>

                    </figure>

                </div>

                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards11">
                            <li data-src="{{cdn()}}/images/awards-image/a-4.jpg" data-sub-html="#caption5">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-4.jpg" alt=""></a>
                            </li>

                        </ul>

                        <div id="caption5" style="display: none;">
                            Our township project at Vrindavan, ‘Omaxe Eternity’, won the Best Project Award at the CREDAI-UPCON Real Estate Award 2014 at the hands of Shri. Akhilesh Yadav, Honourable Chief Minister of Uttar Pradesh.
                        </div>

                        <div class="career-card-data">
                            <p>Our township project at Vrindavan, ‘Omaxe Eternity’, won the Best Project Award at the CREDAI-UPCON Real Estate Award 2014...</p>
                        </div>

                    </figure>

                </div>


                <div class="col-md-4">
                    <figure class="career-card demo-gallery">
                        <ul class="img-stack" id="awards12">
                            <li data-src="{{cdn()}}/images/awards-image/a-5.jpg" data-sub-html="#caption6">
                                <a href=""><img src="{{cdn()}}/images/awards-image/a-5.jpg" alt=""></a>
                            </li>


                        </ul>

                        <div id="caption6" style="display: none;">
                            Our project ‘Omaxe Connaught Place’, Greater Noida, has been awarded The Best Upcoming Mall in India at Indian Retail Congress organized by Franchise India.
                        </div>

                        <div class="career-card-data">
                            <p>Our project ‘Omaxe Connaught Place’, Greater Noida, has been awarded The Best Upcoming in India at Indian Retail Congress organized by...</p>
                        </div>

                    </figure>

                </div>


            </div>


            <div class="row about-us-page">






            </div>


        </div>

        

    </section>


    @include('layouts.footer')
    <script>
        $(document).ready(function(){
            $(".expand-container").click(function(){
                $(this).next('.expand-content').slideToggle("slow");
                console.log($(this).children('.expand-content').slideToggle("slow"));
            });
        });
        
    </script>

    <script>
    </script>

    <script src="{{ asset('js/projectstatic.js') }}"></script>



    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);

        $(document).ready(function() {
            $('#awards').lightGallery({
                thumbnail: true
            });

            $('#awards1').lightGallery({
                thumbnail: true
            });

            $('#awards2').lightGallery({
                thumbnail: true
            });

            $('#awards3').lightGallery({
                thumbnail: true
            });

            $('#awards4').lightGallery({
                thumbnail: true
            });

            $('#awards5').lightGallery({
                thumbnail: true
            });

            $('#awards6').lightGallery({
                thumbnail: true
            });

            $('#awards7').lightGallery({
                thumbnail: true
            });

            $('#awards8').lightGallery({
                thumbnail: true
            });

            $('#awards9').lightGallery({
                thumbnail: true
            });

            $('#awards10').lightGallery({
                thumbnail: true
            });

            $('#awards11').lightGallery({
                thumbnail: true
            });

            $('#awards12').lightGallery({
                thumbnail: true
            });

            $('#awards13').lightGallery({
                thumbnail: true
            });

            $('#awards14').lightGallery({
                thumbnail: true
            });

            $('#awards16').lightGallery({
                thumbnail: true
            });



        });

    </script>
@endsection


@section('addlightgallery')

    <script src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>

@endsection
