<section class="inv">
    <form action="#">
        <div class="text-center ">
            <?php if(isset($data['years']) && count($data['years'])) { ?>
            <select name="year" id="year" class="invest-select" onchange="return applyYear();">
                <option value="0" >Select Year</option>
                <?php foreach($data['years'] as $year) { ?>
                <?php if($data['selected_year'] == $year->report_year) { ?>
                <option  value="<?php echo $year->report_year;?>" selected><?php echo $year->report_year;?></option>
                <?php } else { ?>
                <option  value="<?php echo $year->report_year;?>" ><?php echo $year->report_year;?></option>
                <?php } } ?>
            </select>
            <?php } ?>
        </div>

        <!-- Quarter dropdown, design and place this as you please -->
        <div class="text-center ">
            <?php if(isset($data['quarters']) && count($data['quarters']))  { ?>
            <select name="qtr" id="qtr" class="invest-select" onchange="return applyYear();">
                <option value="0" >Select Month</option>
                <?php foreach($data['quarters'] as $qtr) { ?>
                <?php if($data['selected_qtr'] == $qtr->report_qtr) { ?>
                <option  value="<?php echo $qtr->report_qtr;?>" selected ><?php echo $qtr->report_qtr;?></option>


                <?php } else { ?>

                <option  value="<?php echo $qtr->report_qtr;?>" ><?php echo $qtr->report_qtr;?></option>
                <?php } } ?>
            </select>
            <?php } ?>
        </div>
        <!-- end of quarter dropdown -->
    </form>
</section>



<section class="invcon">
    <div class="container" id="doc_container" style="margin-bottom: 120px;">

        <div class="col-md-12">


            <div class="row events" id="reports-div">
                @if($data['ad_campaigns'])
                    @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)
                        <div class="col-md-3 rep demo-gallery" id="event">
                            <figure data-src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}">
                                <a target="_blank" href="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}">
                                    <img height="200" width="100%" src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" alt="">

                                </a>

                                <figcaption class="repdata">
                                    <div class="row">
                                        <div class="col-9">
                                            <p class="p-10">{{ucwords($ad_campaigns->media_title)}}</p>

                                        </div>
                                    </div>

                                </figcaption>

                            </figure>

                            {{--<div class="repdata">--}}
                            {{--<span class="one">--}}
                            {{--<p>{{ucwords($ad_campaigns->media_title)}}</p>--}}
                            {{--                                <p>{{ucwords($ad_campaigns->report_year)}}-{{$ad_campaigns->report_year+1}}</p>--}}
                            {{--</span>--}}
                            {{--<span class="two">--}}
                            {{--<a href="/investor/prospectus/download/{{$ad_campaigns->inv_pdf}}"> <img src="/images/static/PDF2.png" alt=""></a>--}}
                            {{--</span>--}}
                            {{--</div>--}}
                        </div>
                    @endforeach
                @endif


            </div>


            <div style="float: right;" id="page-links">
                {{$data['ad_campaigns']->links()}}
            </div>

        </div>
    </div>
</section>