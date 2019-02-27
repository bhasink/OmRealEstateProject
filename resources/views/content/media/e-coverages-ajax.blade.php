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
    <div class="container" id="doc_container">

        <div class="col-md-12">


            <div class="row e-coverage " id="reports-div">
                @if($data['ad_campaigns'])
                    @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)
                        <div class="col-md-3 rep">
                            <figure>
                                <a target="_blank" href="{{$ad_campaigns->e_coverage_links}}">
                                    <img  src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" height="200" width="100%" alt="">

                                    <div class="repdata e-description">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>{{$ad_campaigns->media_title}}</h4>

                                                <p>{{$ad_campaigns->report_year}}</p>

                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </figure>


                        </div>
                    @endforeach
                @endif


            </div>


            <div class="text-right">
                {{$data['ad_campaigns']->links()}}
            </div>

        </div>
    </div>
</section>