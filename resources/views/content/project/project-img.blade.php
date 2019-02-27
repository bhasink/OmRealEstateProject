<style type="text/css">
        .amenities-div {
                padding-bottom: 20px;
                padding-top: 0px
        }
        .landmark-list { padding-top: 30px }
        .landmark-list li {
                display: inline-block;
                vertical-align: top;
                width: 32%;
                text-align: left;
                padding: 20px 10px
        }
        .landmark-list li img {
                display: inline-block;
                vertical-align: middle;
                -webkit-filter: grayscale(100%);
                -ms-filter: grayscale(100%);
                -moz-filter: grayscale(100%);
                filter: grayscale(100%);
                -webkit-transition: .3s ease-in-out;
                -ms-transition: .3s ease-in-out;
                -moz-transition: .3s ease-in-out;
                transition: .3s ease-in-out
        }
        .landmark-list li:hover > img {
                -webkit-filter: grayscale(0);
                -ms-filter: grayscale(0);
                -moz-filter: grayscale(0);
                filter: grayscale(0)
        }
        .landmark-list li span {
                display: inline-block;
                vertical-align: middle;
                font-size: 1.8em;
                padding-left: 20px;
                max-width: 73%;
                text-align: left
        }
        .overview-list {
                padding: 0;
                text-align: center;/*margin: 0 -30px*/

        }
        .overview-list li {
                display: inline-block;
                vertical-align: top;
                width: 33%;
                text-align: left;
                padding: 20px 30px
        }
        .view-box h3 {
                font-size: 1.8em;
                text-transform: capitalize;
                font-weight: 400;
                padding: 10px 0;
                margin: 0;
                border-bottom: 1px solid #e4e4e4;
                text-align: left;
        }
        .view-box h3 span { font-size: .85em }
        .view-box p {
                font-size: 1.4em;
                text-align: justify
        }
        .view-box h4 {
                font-size: 1.6em;
                padding: 10px 0 0;
                line-height: normal;
                font-weight: 400
        }
        .view-box h4 strong { font-size: 1.1em }
        .otherProj-list {
                padding: 0;
                text-align: center;
                margin: 0 -10px
        }
        .otherProj-list li {
                display: inline-block;
                vertical-align: top;
                width: 23%;
                text-align: left;
                padding: 10px
        }
        .otherProj-list a { color: #000 }
        .amenities-carousel {
                padding-top: 20px;
                padding-left: 40px;
                padding-right: 40px
        }
        .amenities-carousel.owl-carousel .owl-stage { margin: 0 auto; }
        .amenities-carousel .item { padding: 0 20px }
        .amenities-carousel .owl-nav { padding: 0 }
        .amenities-carousel .owl-nav .owl-prev, .amenities-carousel .owl-nav .owl-next {
                position: absolute;
                color: #525254;
                font-size: 2.2em;
                height: auto;
                margin: 0;
                top: 38%;
                border: none;
                transition: all ease .4s
        }
        .amenities-carousel .owl-nav .owl-prev { left: 0 }
        .amenities-carousel .owl-nav .owl-next { right: 0 }
        .amenities-carousel .owl-nav i {
                padding: 0;
                font-size: 1.4em;
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-prev:hover {
                /*border: none;*/
                background: none;
                color: #525254;
                /*transform: scale(1.4);*/
                padding-right: 10px
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-next:hover {
                /*border: none;*/
                background: none;
                color: #525254;
                /*transform: scale(1.4);*/
                padding-left: 10px
        }
        .comn-carousel { padding: 0 60px; }
        .comn-carousel .owl-nav { padding: 0 }
        .comn-carousel .owl-nav .owl-prev, .comn-carousel .owl-nav .owl-next {
                position: absolute;
                color: #525254;
                font-size: 2.2em;
                height: auto;
                margin: 0;
                top: 38%;
                border: none;
                transition: all ease .4s
        }
        .comn-carousel .owl-nav .owl-prev { left: 0 }
        .comn-carousel .owl-nav .owl-next { right: 0 }
        .comn-carousel .owl-nav i {
                padding: 0;
                font-size: 1.4em;
        }
        .owl-carousel.comn-carousel .owl-nav .owl-prev:hover {
                border: none;
                background: none;
                color: #525254;
                transform: scale(1.4);
                padding-right: 10px
        }
        .owl-carousel.comn-carousel .owl-nav .owl-next:hover {
                border: none;
                background: none;
                color: #525254;
                transform: scale(1.4);
                padding-left: 10px
        }
        .amenities-box {
                text-align: left;
                max-width: 300px;
                margin: 0 auto
        }
        .amenities-box h4 {
                font-size: 2.2em;
                text-transform: capitalize;
                font-weight: 300;
                padding-bottom: 5px;
                padding-top: 10px;
                margin: 0;
                border-bottom: 1px solid #e4e4e4
        }

        .amenities-box p {
                font-size: 1.6em;
                line-height: 1.8em;
                padding: 10px 0;
        }
        .form-GIT {
                padding-top: 45px;
                width: 80%;
                margin: 0 auto
        }
        .form-GIT .form-field {
                padding-bottom: 20px;
                text-align: left
        }
        .form-GIT .form-field label {
                display: block;
                font-weight: 400;
                font-size: 14px
        }
        .form-GIT .form-control { background-color: #f2f2f2 }
        .form-GIT .btn {
                background: #d9dae1;
                border: 1px solid #000;
                margin-top: 25px
        }
        .form-GIT .btn:hover, .form-GIT .btn:focus {
                background: #000;
                color: #fff
        }
        .form-cntUs .form-control { background-color: #f2f2f2 }
        .office-div {
                text-align: center;
                padding-top: 60px;
                padding-bottom: 100px
        }
        .office-div .col-of-1 {
                display: inline-block;
                vertical-align: top;
                width: 29%;
                padding-top: 25px
        }
        .office-div .col-of-2 {
                display: inline-block;
                vertical-align: top;
                width: 39%;
                padding-top: 20px
        }
        .office-div .cont_add1 {
                display: inline-block;
                vertical-align: top;
                border-right: 1px solid #ccc;
                margin-top: 40px
        }
        .office-div .cont_add2 {
                display: inline-block;
                vertical-align: top;
                border-right: 1px solid #ccc;
                margin-top: 40px
        }
        .office-div .cont_add1:last-child { border-right: 0 }
        .office-filter {
                margin: 0;
                position: relative;
                border-left: 1px solid #ccc;
                border-right: 1px solid #ccc;
                padding: 0 15px
        }
        .office-filter .office-tab {
                padding-top: 10px;
                max-width: 350px;
                margin: 0 auto
        }
        .office-tab h3 {
                font-weight: 400;
                font-size: 2.4em;
                padding-bottom: 10px
        }
        .office-filter .office-content {
                padding-top: 25px;
                padding-bottom: 60px
        }
        .office-content p { padding: 0 }
        .office-content p strong {
                padding-bottom: 5px;
                font-size: 1.2em;
                display: inline-block
        }
        .office-div .office-rhs {
                float: right;
                width: 50%;
                padding-left: 15px
        }
        .office-div .office-rhs img {
                display: block;
                width: 100%
        }
</style>

<style>
        .wrapper {
                /*background-color: #ff4f38;*/
                color: #000;
                padding: 1px 15px;
        }

        .slider-container {
                width: 100%;
                max-width: 95%;
                margin: 0 auto;
                padding-top: 35px;
        }

        .slide-image {
                padding: 20px;
                width: 43%;
                display: inline-block;
        }

        .slick-slider {
                position: relative;
        }

        .slick-active {
                opacity: 1;
        }

        .slick-arrow {
                position: absolute;
                top: 10%;
                background-color: transparent;
                border: none;
                color: #fff;
                font-size: 30px;
                z-index: 5;
        }

        .slick-prev {
                left: -10px;
        }

        .slick-next {
                right: -10px;
        }
        /*.slick-track {*/
        /*width: auto !important;*/
        /*}*/

</style>
<style type="text/css">
        .ajax-load{
                background: #e1e1e1;
                padding: 10px 0px;
                width: 100%;
        }
        .ajax-load2{
                background: #e1e1e1;
                padding: 10px 0px;
                width: 100%;
        }
        .top-content{
                margin-bottom: 20px;
        }
        button.slick-next {
                background: #0162b4 !important;
                border-radius: 50%;
        }
        button.slick-prev {
                background: #0162b4 !important;
                border-radius: 50%;
        }
        .top-con-text{
                font-size: 5em;
                padding: 1em;
                background-color: #000000b8;
                color: #fff;
                text-align: center; width: 100%;text-transform: uppercase;
        }
        .top-content {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;


       

         @if(Request::path() =="projects/rudrapur")


background: url(/images/website_banner/Greenland-Villas.jpg ) no-repeat center;


            @endif

                     @if(Request::path() =="projects/ghaziabad")

                        background: url(/images/website_banner/Habitat-floors-GZB-1920-x-700-copy.jpg ) no-repeat center;


            @endif

            @if(Request::path() =="projects/palwal")


                background: url(/images/website_banner/Palwal-Heights.jpg) no-repeat center;
            @endif


                @if(Request::path() =="projects/delhi")

                          background: url(/images/website_banner/Delhi_desktop.jpg) no-repeat center;
                @endif


                 @if(Request::path() =="projects/punjab/residential")

                          background: url(/images/website_banner/celestia_grand_new_chandigarh_banner.png) no-repeat center;
                @endif

                 @if(Request::path() =="projects/punjab/commercial")

                          background: url(/images/website_banner/omaxe-plaza-ludhiana-dc-big-1-1.png) no-repeat center;
                @endif


                 @if(Request::path() =="projects/delhi-ncr/residential")

                          background: url(/images/website_banner/grand_omaxe_banner.png) no-repeat center;
            @endif

             @if(Request::path() =="projects/delhi-ncr/commercial")

                      background: url(/images/website_banner/omaxe_celebration_mall_gurgaon_banner.png) no-repeat center;
            @endif


             @if(Request::path() =="projects/haryana/residential")
                background: url(/images/website_banner/Omaxe-Hills-II-bg.png) no-repeat center;
            @endif
            @if(Request::path() =="projects/haryana/commercial")
                 background: url(/images/website_banner/Omaxe-Galleria-banner.png) no-repeat center;
            @endif

            @if(Request::path() =="projects/uttar-pradesh/residential")
                background: url(/images/website_banner/krishna_castle_virndavan_banner.png) no-repeat center;
            @endif
            @if(Request::path() =="projects/uttar-pradesh/commercial")
                 background: url(/images/website_banner/hazratganj-bg-1.png) no-repeat center;
            @endif

            @if(Request::path() =="projects/madhya-pradesh/residential")
                background: url(/images/website_banner/omaxe_city_villas_indore_banner.jpg) no-repeat center;
            @endif
            @if(Request::path() =="projects/madhya-pradesh/commercial")
                 background: url(/images/website_banner/omaxe_celebration_mall_gurgaon_banner.png) no-repeat center;
            @endif


            @if(Request::path() =="projects/rajasthan/residential")
                 background: url(/images/website_banner/Mid-Town-BWD-1920-x-700-copy.jpg) no-repeat center;
            @endif
            @if(Request::path() =="projects/rajasthan/commercial")
                 background: url(/images/website_banner/Mid-Town-BWD-1920-x-700-copy.jpg) no-repeat center;
            @endif

            @if(Request::path() =="projects/uttrakhand/residential")
                background: url(/images/website_banner/Riviera.jpg) no-repeat center;
            @endif
            @if(Request::path() =="projects/uttrakhand/commercial")
                background: url(/images/website_banner/Riviera.jpg) no-repeat center;
            @endif


     @if(Request::path() =="projects/prayagraj")

              background: url(/images/website_banner/Allahabad_desktop.jpg) no-repeat center;

                @endif


                   @if(Request::path() =="projects/baddi")

                        background: url(//images/website_banner/Baddi_desktop.jpg) no-repeat center;

                @endif


        @if(Request::path() =="projects/bahadurgarh")

                      background: url(/images/website_banner/Bahadurgarh_desktop.jpg) no-repeat center;

                @endif

                 @if(Request::path() =="projects/bhiwadi")

                              background: url(/images/website_banner/Bhiwadi_desktop.jpg) no-repeat center;

                @endif

                   @if(Request::path() =="projects/gurgaon")

                              background: url(/images/website_banner/Gurgaon_desktop.jpg) no-repeat center;

                @endif


                  @if(Request::path() =="projects/jaipur")

                          background: url(/images/website_banner/Jaipur_desktop.jpg) no-repeat center;

                @endif



                @if(Request::path() =="projects/lucknow")

                          background: url(/images/website_banner/Lucknow_desktop.jpg) no-repeat center;

                @endif


                 @if(Request::path() =="projects/ludhiana")

                          background: url(/images/website_banner/Ludhiana_desktop.jpg) no-repeat center;

                @endif



                 @if(Request::path() =="projects/new-chandigarh")

                          background: url(/images/website_banner/thelakebanner.jpg) no-repeat center;

                @endif


                @if(Request::path() =="projects/patiala")

                          background: url(/images/website_banner/Patiala_desktop.jpg) no-repeat center;

                @endif



             @if(Request::path() =="projects/rohtak")

                          background: url(/images/website_banner/Rohtak_desktop.jpg) no-repeat center;

                @endif



                 @if(Request::path() =="projects/vrindavan")

                              background: url(/images/website_banner/Vrindavan_desktop.jpg) no-repeat center;

                @endif

                  @if(Request::path() =="projects/yamuna-nagar")

                          background: url(/images/website_banner/Yamunanagar_desktop.jpg) no-repeat center;

                @endif


                     @if(Request::path() =="projects")

                          background: url(/images/website_banner/Projects_desktop.jpg) no-repeat center;

                @endif

                   @if(Request::path() =="exclusive-projects")

                          background: url(/images/website_banner/Projects_desktop.jpg) no-repeat center;

            @endif


                 @if(Request::path() =="projects/category/hot-selling-properties")

                          background: url(/images/website_banner/the_lake_new_chandigarh_banner.png) no-repeat center;

                @endif


                    @if(Request::path() =="projects/category/ready-to-move-in")

                     background: url(/images/website_banner/omaxe_cp_banner.png) no-repeat center;


                @endif


                 @if(Request::path() =="projects/category/delivered")

                     background: url(/images/website_banner/omaxegrand_banner.png) no-repeat center;


                @endif

                 @if(Request::path() =="projects/faridabad")

                 background: url(/images/website_banner/Faridabad_desktop.jpg) no-repeat center;


                @endif

                  @if(Request::path() =="projects/amristar")

                     background: url(/images/website_banner/Amritsar_desktop.jpg) no-repeat center;


                @endif



                  @if(Request::path() =="projects/bathinda")

                     background: url(/images/website_banner/Bathinda_desktop.jpg) no-repeat center;


                @endif

                @if(Request::path() =="projects/greater-noida")

                     background: url(/images/website_banner/Greater_noida_desktop.jpg) no-repeat center;


                @endif


                 @if(Request::path() =="projects/indore")

                     background: url(/images/website_banner/Indore_desktop.jpg) no-repeat center;


                @endif


                 @if(Request::path() =="projects/indirapuram")

                     background: url(/images/website_banner/Indrapuram_desktop.jpg) no-repeat center;


                @endif


                 @if(Request::path() =="projects/noida")

                     background: url(/images/website_banner/Noida_desktop.jpg) no-repeat center;


                @endif


                 @if(Request::path() =="projects/sonipat")

                     background: url(/images/website_banner/Sonepat_desktop.jpg) no-repeat center;


                @endif



                     @if(Request::path() =="projects/type/residential")

                            background: url(/images/website_banner/krishna_castle_virndavan_banner.png) no-repeat center;


                @endif


                     @if(Request::path() =="projects/type/commercial")

            background: url(/images/website_banner/WS-Web-Banner-1.jpg) no-repeat center;


                @endif


                         @if(Request::path() =="projects/amritsar")

            background: url(/images/website_banner/omaxe_value_mall_banner.png) no-repeat center;


                @endif


                 @if(Request::path() =="projects/derabassi")

            background: url(/images/website_banner/omaxegreens_banner.png) no-repeat center;


        @endif


              @if(Request::path() =="projects/agra")

            background: url(/images/website_banner/SRK-Mall.jpg) no-repeat center;


        @endif












    }


        @media screen and (max-width: 600px) {
                .top-content {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;

                        @if(Request::path() =="projects/delhi")




            background: url(/images/website_banner/Delhi_mobile.jpg) no-repeat center;
                        @endif


                         @if(Request::path() =="projects/prayagraj")

            background: url(/images/website_banner/Allahabad_mobile.jpg) no-repeat center;

                        @endif


                           @if(Request::path() =="projects/baddi")

            background: url(/images/website_banner/Baddi_mobile.jpg) no-repeat center;

                        @endif


                @if(Request::path() =="projects/bahadurgarh")

                              background: url(/images/website_banner/Bahadurgarh_mobile.jpg) no-repeat center;

                        @endif

                         @if(Request::path() =="projects/bhiwadi")

            background: url(/images/website_banner/Bhiwadi_mobile.jpg) no-repeat center;

                        @endif

                           @if(Request::path() =="projects/gurgaon")

            background: url(/images/website_banner/Gurgaon_mobile.jpg) no-repeat center;

                        @endif


                          @if(Request::path() =="projects/jaipur")

            background: url(/images/website_banner/Jaipur_mobile.jpg) no-repeat center;

                        @endif



                        @if(Request::path() =="projects/lucknow")

            background: url(/images/website_banner/Lucknow_mobile.jpg) no-repeat center;

                        @endif


                         @if(Request::path() =="projects/ludhiana")

            background: url(/images/website_banner/Ludhiana_mobile.jpg) no-repeat center;

                        @endif



                         @if(Request::path() =="projects/new-chandigarh")

            background: url(/images/website_banner/NewChandigarh_mobile.jpg) no-repeat center;

                        @endif


                        @if(Request::path() =="projects/patiala")

            background: url(/images/website_banner/Patiala_mobile.jpg) no-repeat center;

                        @endif



                     @if(Request::path() =="projects/rohtak")

            background: url(/images/website_banner/Rohtak_mobile.jpg) no-repeat center;

                        @endif



                         @if(Request::path() =="projects/vrindavan")

            background: url(/images/website_banner/Vrindavan_mobile.jpg) no-repeat center;

                        @endif

                          @if(Request::path() =="projects/yamuna-nagar")

            background: url(/images/website_banner/Yamunanagar_mobile.jpg) no-repeat center;

                        @endif


                             @if(Request::path() =="projects")

            background: url(/images/website_banner/Projects_mobile.jpg) no-repeat center;

                        @endif

                            @if(Request::path() =="exclusive-projects")

            background: url(/images/website_banner/Projects_mobile.jpg) no-repeat center;

                    @endif





                             @if(Request::path() =="projects/category/hot-selling-properties")

            background: url(/images/website_banner/the_lake_new_chandigarh_banner.png) no-repeat center;

                        @endif


                            @if(Request::path() =="projects/category/ready-to-move-in")

            background: url(/images/website_banner/omaxe_cp_banner.png) no-repeat center;


                        @endif


                         @if(Request::path() =="projects/category/delivered")

            background: url(/images/website_banner/omaxegrand_banner.png​) no-repeat center;


                        @endif


                         @if(Request::path() =="projects/faridabad")

            background: url(/images/website_banner/Faridabad_mobile.jpg) no-repeat center;


                        @endif


                         @if(Request::path() =="projects/amristar")

            background: url(/images/website_banner/Amrtisar_mobile.jpg) no-repeat center;


                        @endif


                          @if(Request::path() =="projects/bathinda")

            background: url(/images/website_banner/Bathinda_mobile.jpg) no-repeat center;


                        @endif


                         @if(Request::path() =="projects/greater-noida")

            background: url(/images/website_banner/Greater_noida_mobile.jpg) no-repeat center;


                        @endif


                          @if(Request::path() =="projects/indore")

            background: url(/images/website_banner/Indore_mobile.jpg) no-repeat center;


                        @endif


                        @if(Request::path() =="projects/indirapuram")

            background: url(/images/website_banner/Indrapuram_mobile.jpg) no-repeat center;


                        @endif


                        @if(Request::path() =="projects/noida")

            background: url(/images/website_banner/Noida_mobile.jpg) no-repeat center;


                        @endif



                        @if(Request::path() =="projects/sonipat")

            background: url(/images/website_banner/Sonepat_mobile.jpg) no-repeat center;


                        @endif

                               @if(Request::path() =="projects/sonipat")

                background: url(/images/website_banner/krishna_castle_virndavan_banner.png) no-repeat center;


                        @endif

                       @if(Request::path() =="projects/type/commercial")

            background: url(/images/website_banner/WS-Web-Banner-1.jpg) no-repeat center;


                        @endif


                                       @if(Request::path() =="projects/amritsar")

                background: url(/images/website_banner/omaxe_value_mall_banner.png) no-repeat center;


                @endif


                                @if(Request::path() =="projects/agra")

                background: url(/images/website_banner/SRK-Mall.jpg) no-repeat center;


                @endif




























        }



        }

</style>

<div class="top-content">
        @if(Request::path() =="projects/punjab/residential")
            <h1 class="top-con-text">Residential Properties in Punjab </h1>
        @endif
        @if(Request::path() =="projects/punjab/commercial")
            <h1 class="top-con-text">Commercial Properties in Punjab </h1>
        @endif

            @if(Request::path() =="projects/delhi-ncr/residential")
                <h1 class="top-con-text">Residential Properties in Delhi/Ncr </h1>
            @endif
            @if(Request::path() =="projects/delhi-ncr/commercial")
                <h1 class="top-con-text">Commercial Properties in Delhi/Ncr </h1>
            @endif


            @if(Request::path() =="projects/haryana/residential")
                <h1 class="top-con-text">Residential Properties in Haryana </h1>
            @endif
            @if(Request::path() =="projects/haryana/commercial")
                <h1 class="top-con-text">Commercial Properties in Haryana </h1>
            @endif

            @if(Request::path() =="projects/uttar-pradesh/residential")
                <h1 class="top-con-text">Residential Properties in Uttar Pradesh</h1>
            @endif
            @if(Request::path() =="projects/uttar-pradesh/commercial")
                <h1 class="top-con-text">Commercial Properties in Uttar Pradesh</h1>
            @endif

            @if(Request::path() =="projects/madhya-pradesh/residential")
                <h1 class="top-con-text">Residential Properties in Madhya Pradesh </h1>
            @endif
            @if(Request::path() =="projects/madhya-pradesh/commercial")
                <h1 class="top-con-text">Commercial Properties in Madhya Pradesh </h1>
            @endif


            @if(Request::path() =="projects/rajasthan/residential")
                <h1 class="top-con-text">Residential Properties in Rajasthan </h1>
            @endif
            @if(Request::path() =="projects/rajasthan/commercial")
                <h1 class="top-con-text">Commercial Properties in Rajasthan </h1>
            @endif

            @if(Request::path() =="projects/uttrakhand/residential")
                <h1 class="top-con-text">Residential Properties in Uttrakhand </h1>
            @endif
            @if(Request::path() =="projects/uttrakhand/commercial")
                <h1 class="top-con-text">Commercial Properties in Uttrakhand </h1>
            @endif



        @if(Request::path() =="projects/delhi")
                <h1 class="top-con-text">Properties in Delhi </h1>
        @endif

        @if(Request::path() =="projects/prayagraj")

                <h1 class="top-con-text">Properties in Prayagraj</h1>

        @endif

        @if(Request::path() =="projects/baddi")

                <h1 class="top-con-text">Properties in baddi </h1>
        @endif


            @if(Request::path() =="projects/palwal")


                <h1 class="top-con-text">Properties in Palwal </h1>
            @endif



        @if(Request::path() =="projects/bahadurgarh")

                <h1 class="top-con-text">Properties in bahadurgarh </h1>
        @endif

        @if(Request::path() =="projects/bhiwadi")

                <h1 class="top-con-text">Properties in bhiwadi </h1>
        @endif

        @if(Request::path() =="projects/gurgaon")

                <h1 class="top-con-text">Properties in gurgaon </h1>
        @endif



        @if(Request::path() =="projects/jaipur")

                <h1 class="top-con-text">Properties in jaipur </h1>
        @endif


        @if(Request::path() =="projects/lucknow")

                <h1 class="top-con-text">Properties in lucknow </h1>
        @endif


        @if(Request::path() =="projects/ludhiana")

                <h1 class="top-con-text">Properties in ludhiana </h1>
        @endif

        @if(Request::path() =="projects/new-chandigarh")

                <h1 class="top-con-text">Properties in new chandigarh </h1>
        @endif


        @if(Request::path() =="projects/patiala")

                <h1 class="top-con-text">Properties in patiala </h1>
        @endif


        @if(Request::path() =="projects/rohtak")

                <h1 class="top-con-text">Properties in rohtak </h1>
        @endif



        @if(Request::path() =="projects/vrindavan")

                <h1 class="top-con-text">vrindavan Properties</h1>
        @endif


        @if(Request::path() =="projects/yamuna-nagar")

                <h1 class="top-con-text">Properties in yamuna nagar</h1>
        @endif



        @if(Request::path() =="projects")

                <h1 class="top-con-text">All Properties</h1>
        @endif


            @if(Request::path() =="exclusive-projects")

                <h1 class="top-con-text">Exclusive Properties</h1>
            @endif



        @if(Request::path() =="projects/category/hot-selling-properties")

                <h1 class="top-con-text">hot selling properties India</h1>
        @endif


        @if(Request::path() =="projects/category/ready-to-move-in")

                <h1 class="top-con-text">ready to move in properties</h1>
        @endif


        @if(Request::path() =="projects/category/delivered")


                <h1 class="top-con-text">delivered properties</h1>
        @endif


        @if(Request::path() =="projects/faridabad")


                <h1 class="top-con-text">Faridabad properties</h1>
        @endif


        @if(Request::path() =="projects/amristar")


                <h1 class="top-con-text">Amritsar properties</h1>
        @endif

        @if(Request::path() =="projects/bathinda")


                <h1 class="top-con-text">Bathinda properties</h1>
        @endif


        @if(Request::path() =="projects/greater-noida")


                <h1 class="top-con-text">Greater Noida properties</h1>
        @endif


        @if(Request::path() =="projects/indore")


                <h1 class="top-con-text">Indore properties</h1>
        @endif


        @if(Request::path() =="projects/indirapuram")


                <h1 class="top-con-text">Indirapuram properties</h1>
        @endif


        @if(Request::path() =="projects/noida")


                <h1 class="top-con-text">Noida properties</h1>
        @endif



        @if(Request::path() =="projects/type/residential")


                <h1 class="top-con-text">Residential properties</h1>
        @endif



        @if(Request::path() =="projects/type/commercial")


                <h1 class="top-con-text">Commercial properties</h1>
        @endif


        @if(Request::path() =="projects/amritsar")


                <h1 class="top-con-text">Amritsar properties</h1>
        @endif


        @if(Request::path() =="projects/sonipat")


                <h1 class="top-con-text">Sonipat properties</h1>
        @endif

        @if(Request::path() =="projects/derabassi")


                <h1 class="top-con-text">Derabassi properties</h1>
            @endif

            @if(Request::path() =="projects/agra")


                <h1 class="top-con-text">Agra properties</h1>
            @endif




            @if(Request::path() =="projects/rudrapur")


                <h2 class="top-con-text">Rudrapur properties</h2>
            @endif

            @if(Request::path() =="projects/ghaziabad")


                <h2 class="top-con-text">Ghaziabad properties</h2>
            @endif
































</div>

















