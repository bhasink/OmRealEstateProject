@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content ">


    </div>


    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}


    <section class="invcon">
        <div class="container">

            <div class="row buyers-guide">
                <div class="col-md-12">
                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Definitions-and-Interpretation.pdf"> Definitions and Interpretations. </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/points.pdf"> Documents Required for Booking a Property. </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Downloads_14_Change-Correspondence-Address.pdf"> Documents Required for change of Correspondence Address .  </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Downloads_15_Change-permanent-Address-before-execution-of-Agreement.pdf"> Documents Required for change of Permanent Address, before Execution of Agreement.  </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Downloads_16_Correction-of-Name-before-Execution-of-Agreement.pdf"> Documents Required for Correction of Name (say, spelling) before Execution of Agreement.  </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Downloads_9_Home-Loan-documents.pdf"> Home Loan documents.  </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/points.pdf"> Registry and Endorsement.  </a></p>

                    <p><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="{{cdn()}}/images/buyers-guide/Downloads_13_Registry-Endorsement.pdf"> Documents Required for Booking a Property. </a></p>

                </div>
            </div>
        </div>

    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>

    @include('layouts.footer')


@endsection
