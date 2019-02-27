<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

        @if(Auth::user()->role=="SuperAdmin")

        <h3>Leads</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-table"></i> LEAD'S <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/projects/contact-us')}}">Project Contact Us</a></li>

                    <li><a href="{{url('/omaxeadmin/ebrochure-contact-us')}}">E-brochure Contact Us</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/contact-us')}}">Investor Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/media/contact-us')}}">Media Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/contact-us')}}">Common Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/media/nri-contact-us')}}">NRI Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/care/associate-contact-us')}}">Associate Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/care/vendors-contact-us')}}">Vendors Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/fd/contact-us')}}">Fd Contact Us</a></li>
                    <li><a href="{{url('/omaxeadmin/fd/app-contact-us')}}">Fd App Contact Us</a></li>

                    <li><a href="{{url('/omaxeadmin/projects/enquiry-now')}}">Enquiry Now Contact Us</a></li>

                </ul>
            </li>


            {{--<li><a href="{{url('/omaxeadmin/seo')}}"><i class="fa fa-table"></i> SEO MANAGER </a>--}}

            <h3>SEO MANAGER</h3>

            <li><a><i class="fa fa-table"></i>SEO MANAGER <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/seo')}}">SEO Dashboard</a></li>

                    <li><a href="{{url('/omaxeadmin/seo/create')}}">Create Meta Tag</a></li>


                </ul>
            </li>

            <h3>PROJECT</h3>
            <li><a><i class="fa fa-table"></i> PROJECT'S <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/projects/list')}}">Project List</a></li>

                    <li><a href="{{url('/omaxeadmin/projects/create')}}">Project Create</a></li>


                </ul>
            </li>

            <h3>ACHEIVEMENT PANEL</h3>
            <li><a><i class="fa fa-table"></i> ACHEIVEMENT PANEL <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/acheivement-panel/list')}}">Acheivement List</a></li>

                    <li><a href="{{url('/omaxeadmin/acheivement-panel/create')}}">Acheivement Create</a></li>
                </ul>
            </li>

            <h3>MEDIA</h3>
            <li><a><i class="fa fa-table"></i> MEDIA <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/media/list/ad-campaign')}}">Ad Campaign</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/e-coverages')}}">E Coverages</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/media-events')}}">Media Events</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/media-kit')}}">Media Kit</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/print-coverages')}}">Print Coverages</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/press-releases')}}">Press Releases</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/media-videos')}}">Media Videos</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/corporate-newsletter')}}">Corporate Newsletter</a></li>
                    <li><a href="{{url('/omaxeadmin/media/list/regional-newsletter')}}">Regional Newsletter</a></li>


                </ul>
            </li>

            <h3>INVESTORS</h3>
            <li><a><i class="fa fa-table"></i> INVESTORS <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/investor/list/annual-report')}}">Annual Report</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/balance-sheet')}}">Balance Sheet</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/certificate-of-incorporations')}}">Certificate of Incorporations</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/moa-and-aoa')}}">Moa & Aoa</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/prospectus')}}">Prospectus</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/corporate-governance')}}">Corporate Governance</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/committees-of-board-of-directors')}}">Committees of Board of Directors</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/appointment-letters')}}">Appointment Letters</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/resignation-letters')}}">Resignation Letters</a></li>


                    <li><a href="{{url('/omaxeadmin/investor/list/corporate-governance-reports')}}">Corporate Governance Reports</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/csr-event')}}">CSR Events</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/csr-policy')}}">CSR Policy</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/csr-project')}}">CSR Project</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/financials')}}"> Financials</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/shareholding-pattern')}}"> Shareholding Pattern</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/stakeholder-information')}}"> Stakeholder Information</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/notice-and-scrutinizers-report')}}"> Notice and Scrutinizer Report</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/record-date-notice-for-ncds')}}"> Record date notice for NCD's</a></li>

                    <li><a href="{{url('/omaxeadmin/investor/list/notice-payment-redemption')}}"> Notice Payment Redemption</a></li>


                    <li><a href="{{url('/omaxeadmin/investor/list/credit-rating')}}"> Credit Rating</a></li>
                    <li><a href="{{url('/omaxeadmin/investor/list/notice-and-information')}}"> Notice and Intimation</a></li>

                </ul>
            </li>


            <h3>TESTIMONIAL</h3>
            <li><a><i class="fa fa-table"></i>TESTIMONIAL<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/omaxeadmin/testimonial-panel/list')}}">Testimonial List</a></li>

                    <li><a href="{{url('/omaxeadmin/testimonial-panel/create')}}">Testimonial Create</a></li>
                </ul>
            </li>

        </ul>


            @endif



            @if(Auth::user()->role=="SeoAdmin")


                <ul class="nav side-menu">
                    <h3>SEO MANAGER</h3>

                    <li><a><i class="fa fa-table"></i>SEO MANAGER <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/seo')}}">SEO Dashboard</a></li>

                            <li><a href="{{url('/omaxeadmin/seo/create')}}">Create Meta Tag</a></li>


                        </ul>
                    </li>

                </ul>



            @endif




            @if(Auth::user()->role=="LeadsAdmin")

                <h3>Leads</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-table"></i> LEAD'S <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/projects/contact-us')}}">Project Contact Us</a></li>

                            <li><a href="{{url('/omaxeadmin/ebrochure-contact-us')}}">E-brochure Contact Us</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/contact-us')}}">Investor Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/media/contact-us')}}">Media Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/contact-us')}}">Common Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/media/nri-contact-us')}}">NRI Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/care/associate-contact-us')}}">Associate Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/care/vendors-contact-us')}}">Vendors Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/fd/contact-us')}}">Fd Contact Us</a></li>
                            <li><a href="{{url('/omaxeadmin/fd/app-contact-us')}}">Fd App Contact Us</a></li>

                            <li><a href="{{url('/omaxeadmin/projects/enquiry-now')}}">Enquiry Now Contact Us</a></li>

                        </ul>
                    </li>
                </ul>




            @endif





        @if(Auth::user()->role=="MainAdmin")



                        <ul class="nav side-menu">
                    {{--<li><a href="{{url('/omaxeadmin/seo')}}"><i class="fa fa-table"></i> SEO MANAGER </a>--}}

                    <h3>SEO MANAGER</h3>

                    <li><a><i class="fa fa-table"></i>SEO MANAGER <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/seo')}}">SEO Dashboard</a></li>

                            <li><a href="{{url('/omaxeadmin/seo/create')}}">Create Meta Tag</a></li>


                        </ul>
                    </li>

                    <h3>PROJECT</h3>
                    <li><a><i class="fa fa-table"></i> PROJECT'S <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/projects/list')}}?ref={{rand(1,10000000)}}">Project List</a></li>

                            <li><a href="{{url('/omaxeadmin/projects/create')}}">Project Create</a></li>


                        </ul>
                    </li>

                    <h3>ACHEIVEMENT PANEL</h3>
                    <li><a><i class="fa fa-table"></i> ACHEIVEMENT PANEL <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/acheivement-panel/list')}}">Acheivement List</a></li>

                            <li><a href="{{url('/omaxeadmin/acheivement-panel/create')}}">Acheivement Create</a></li>
                        </ul>
                    </li>

                    <h3>MEDIA</h3>
                    <li><a><i class="fa fa-table"></i> MEDIA <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/media/list/ad-campaign')}}">Ad Campaign</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/e-coverages')}}">E Coverages</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/media-events')}}">Media Events</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/media-kit')}}">Media Kit</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/print-coverages')}}">Print Coverages</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/press-releases')}}">Press Releases</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/media-videos')}}">Media Videos</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/corporate-newsletter')}}">Corporate Newsletter</a></li>
                            <li><a href="{{url('/omaxeadmin/media/list/regional-newsletter')}}">Regional Newsletter</a></li>


                        </ul>
                    </li>

                    <h3>INVESTORS</h3>
                    <li><a><i class="fa fa-table"></i> INVESTORS <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/investor/list/annual-report')}}">Annual Report</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/balance-sheet')}}">Balance Sheet</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/certificate-of-incorporations')}}">Certificate of Incorporations</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/moa-and-aoa')}}">Moa & Aoa</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/prospectus')}}">Prospectus</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/corporate-governance')}}">Corporate Governance</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/committees-of-board-of-directors')}}">Committees of Board of Directors</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/appointment-letters')}}">Appointment Letters</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/resignation-letters')}}">Resignation Letters</a></li>


                            <li><a href="{{url('/omaxeadmin/investor/list/corporate-governance-reports')}}">Corporate Governance Reports</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/csr-event')}}">CSR Events</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/csr-policy')}}">CSR Policy</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/csr-project')}}">CSR Project</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/financials')}}"> Financials</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/shareholding-pattern')}}"> Shareholding Pattern</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/stakeholder-information')}}"> Stakeholder Information</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/notice-and-scrutinizers-report')}}"> Notice and Scrutinizer Report</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/record-date-notice-for-ncds')}}"> Record date notice for NCD's</a></li>

                            <li><a href="{{url('/omaxeadmin/investor/list/notice-payment-redemption')}}"> Notice Payment Redemption</a></li>


                            <li><a href="{{url('/omaxeadmin/investor/list/credit-rating')}}"> Credit Rating</a></li>
                            <li><a href="{{url('/omaxeadmin/investor/list/notice-and-information')}}"> Notice and Intimation</a></li>

                        </ul>
                    </li>


                    <h3>TESTIMONIAL</h3>
                    <li><a><i class="fa fa-table"></i>TESTIMONIAL<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/omaxeadmin/testimonial-panel/list')}}">Testimonial List</a></li>

                            <li><a href="{{url('/omaxeadmin/testimonial-panel/create')}}">Testimonial Create</a></li>
                        </ul>
                    </li>

                </ul>


            @endif



    </div>

</div>


<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a  data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->