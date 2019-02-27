@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .accordion_container .accordion_head h2{
            font-size: 1rem;
        }
    </style>


    <div class="top-content leadership-banner">


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
                <li><a href='/about-us/awards-and-honors'>AWARDS AND HONORS</a></li>
                <li><a href='/about-us/cmd-message'>CMD MESSSAGE</a></li>
                <li  class='active'><a href='/about-us/leadership-team'>LEADERSHIP TEAM</a></li>
                <li><a href='/about-us/mission-and-vision'>MISSION AND VISION</a></li>
                <li><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li><a href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>

    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Leadership Team") }}





    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="row">
                    <div class="col-md-12 m-b-30">
                        <h3 class="text-center brand-color">Board of Directors</h3>
                        <div class="accordion_container">

                            <div class="accordion_head">
                                <h2>Mr. ROHTAS GOEL Chairman and Managing Director</h2> <span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Mr. Rohtas Goel is the founder of Omaxe Group, a widely recognized and trusted name in the real estate industry in India. Nurturing it from a construction house to a renowned infrastructure conglomerate, Omaxe has grown by leaps and bounds under his dynamic leadership. Mr. Goel is a civil engineer who started his professional career with a private construction firm, but later undertook his own entrepreneurial journey.</p>
                                <p>
                                    A visionary that Mr. Goel is, he was amongst the first to diversify his business into Tier II & III cities where he saw huge potential to be tapped and a lot of demand-supply gap to bridge. The pace and growth in number of projects over the last few years proves the increasing confidence of the people in brand Omaxe. A true leader, Mr. Goel believes in direction than distance. Throughout his entrepreneurial journey, he has astutely led a strong and talented workforce that strives hard each day to build Omaxe into a bigger brand. Mr. Goel’s positive thinking and the ability to rise above mundane makes him a name to reckon with in the real estate industry.
                                </p>

                                <p>
                                    Mr. Goel has won several awards and accolades, been invited to national and international conferences, has had two terms as President of National Real Estate Development Council (NAREDCO) and has emerged as a prominent voice of the real estate industry.
                                </p>

                            </div>


                            {{--<div class="accordion_head">--}}
                                {{--<h2>Mr. JAI BHAGWAN GOEL Whole Time Director </h2><span class="plusminus">+</span></div>--}}
                            {{--<div class="accordion_body" style="display: none;">--}}
                                {{--<p>A founding member of Omaxe, Mr. J. B Goel is a graduate in Civil Engineering A.M.I.E. and has over twenty five years of experience in Civil Engineering, Construction & Real Estate and Infrastructure Development. He has made tremendous contribution to the growth and success of the company through his year long experience in the real estate industry.</p>--}}
                            {{--</div>--}}




                            <div class="accordion_head">
                                <h2>Mr. SUDHANGSHU S. BISWAL Whole Time Director</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>He is a qualified Chartered Accountant and Cost Accountant with over two decades of experience in various areas of Accounts, Finance & Treasury, Taxation, MIS & Budgeting, Business Development and Corporate Strategy in diversified business verticals/Industry such as Consulting, IT, ITES, Education, Aviation, Infrastructure and Real Estate. He has been a part of top management for more than 15 years with cross-functional experience of diversified business verticals. He joined Omaxe Limited in May 2010 as Vice President Corporate Finance and presently working as Whole Time Director of the Company.</p>
                            </div>

                            {{--<div class="accordion_head">--}}
                                {{--<h2>Mr. SRINIVAS KANAKAGIRI Non Executive and Independent Director</h2><span class="plusminus">+</span></div>--}}
                            {{--<div class="accordion_body" style="display: none;">--}}
                                {{--<p>Mr. Srinivas, CA, CWA has 25+ years of experience in financial services and capital markets. Mr. Srinivas was the former head of Investment Banking at UTI Securities Limited. Presently, he serves as the MD of Saffron Capital Advisors P Ltd, a SEBI registered Category I Merchant Banker and a boutique Investment Bank.</p>--}}
                            {{--</div>--}}


                            {{--<div class="accordion_head">--}}
                                {{--<h2>Ms. SHRUTI D. SODHI Non Excecutive and Independent Director</h2><span class="plusminus">+</span></div>--}}
                            {{--<div class="accordion_body" style="display: none;">--}}
                                {{--<p>Shruti is a lawyer with two decades of experience across leading law firms and multinationals in India. She is a subject matter expert in financial services and telecommunications with experience of dealing with various regulators. She has diverse experience in handling complex transactions.</p>--}}
                            {{--</div>--}}


                            <div class="accordion_head">
                                <h2>Mr. SUDIP BANDYOPADHYAY Non Executive and Independent Director</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Sudip Bandyopadhyay is currently the Group Chairman of Inditrade Capital (JRG) Group of Companies and is also the promoter/significant investor in Bima Direct (Online Insurance), Dining Plus (Rewards & Loyalty), Emotix (Robotics) and other Fintech startups. He sits on the Boards and guides a number of listed and unlisted domestic companies.</p>
                                <p>Sudip is a qualified Chartered Accountant and a Cost Accountant and has over 28 years of rich and diverse experience in various areas of finance and financial services. During Sudip’s 16 years stint with ITC as Head of Treasury and Strategic Investments, he managed investments in excess of $1.5 billion. Post ITC, he was the Managing Director of Reliance Securities (Reliance Money) and was also on the Board of several Reliance ADA Group companies. Afterwards Sudip was the Managing Director and CEO of Destimoney, a full service financial organization, promoted by New Silk Route – an Asia focused growth capital private equity firm with over $1.4 billion under management.</p>
                                <p>Sudip has significant presence in business media through his regular interaction on leading business channels, business newspapers and magazines.

                                </p>
                            </div>


                            <div class="accordion_head">
                                <h2>Ms. SEEMA AVASARALA Non Executive Director</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Ms. Seema Avasarala is a Sales and Marketing Professional and entrepreneur having more than 18 years of experience and currently serving as the Chief Operating Officer of OyeHelp Technologies. Earlier, she has served as President of Business Development and Strategic Alliances at Netway India, Sales and Business Development of Evologence for Europe and America.</p>

                            </div>




                        </div>
                    </div>


                    <div class="col-md-12 ">
                        <h3 class="text-center m-b-30 brand-color">KEY MANAGERIAL PERSONNEL(S) (KMPS)</h3>

                        <div class="accordion_container">
                            <div class="accordion_head">
                                <h2>Mr. Mohit Goel, Chief Executive Officer</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Mr. Mohit Goel is a Commerce graduate, has attended Summer School at London School of Economics and has also done executive program from IIM, Bangalore.He has 7 years of rich experience in Real Estate /Infrastructure in the areas of strategic & tactical planning, profit centre operations, marketing strategy and project management.
                                    He was working at Omaxe since September, 2010 to May, 2017 and has rejoined as CEO from February, 2018.Mr. Mohit Goel has also won several awards and recognitions, including Young Achiever’s Award by ABP’s Real Estate Awards in 2014 and the Young Male Entrepreneur of the Year Award by Infra & Realty Sutra Award, 2014.During his tenure as the Head of Youth CREDAI (North Zone) – illustrious body of real estate developers, from April, 2013 to March, 2015, Mr. Mohit Goel was credited with galvanizing the institution and stimulating industry leaders and influencers.</p>
                            </div>


                            <div class="accordion_head">
                                <h2>Ms. VIJAYALAXMI Chief Operating Officer</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Ms. Vijayalaxmi has over 21 years of experience in various industries including Construction and Real Estate companies. She is B.Sc. from JSS College, Karnataka. She is responsible for managing the day to day operations, planning, development, process and improvement of the systems. She is also ensuring that business operations are efficient, effective and proper management of resources. Prior to joining us she was working with Era Group, Continental Engineering Corpn, VPL Group of Companies etc.</p>
                            </div>


                            <div class="accordion_head">
                                <h2>Mr. VIMAL GUPTA Chief Financial Officer</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>He is an alumnus of Shri Ram College of Commerce and is fellow member of The Institute of Chartered Accountants of India and associate member of The Institute of Cost & Works Accountants of India. He has over 25 years of experience in Financial Planning & Control, Treasury Management, Accounting, Auditing, Taxation, MIS & Budgeting. He is associated with the Company for more than 11 years and has vast experience in Real Estate industry. He believes in discharging duties with strict discipline that motivate his collogues to follow the suit. He is also having rich experience in construction, manufacturing and service sector industries.</p>
                            </div>

                            <div class="accordion_head">
                                <h2>Ms. SHUBHA SINGH Company Secretary</h2><span class="plusminus">+</span></div>
                            <div class="accordion_body" style="display: none;">
                                <p>Ms. Shubha Singh is Company Secretary from ICSI, CFA (Chartered Financial Analyst), PGD in Financial Analysis from ICFAI, Hyderabad and MBA from IMT, Ghaziabad. Ms. Singh has over 16 years of rich experience in Secretarial work, Corporate Governance, Legal and Financial matters in the Corporate Sector.</p>
                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>
    </section>
    @include('layouts.footer')
    <script>
        $(document).ready(function(){
            //toggle the component with class accordion_body
            $(".accordion_head").click(function(){
                if ($('.accordion_body').is(':visible')) {
                    $(".accordion_body").slideUp(300);
                    $(".plusminus").text('+');
                }
                if( $(this).next(".accordion_body").is(':visible')){
                    $(this).next(".accordion_body").slideUp(300);
                    $(this).children(".plusminus").text('+');
                }else {
                    $(this).next(".accordion_body").slideDown(300);
                    $(this).children(".plusminus").text('-');
                }
            });
        });
    </script>
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>
@endsection
