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
					<option value="0" >Select Quarter</option>
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

            <div class="col-md-12" style="margin-bottom: 120px;">
                <div class="row" id="reports-div">
                    @if($data['annual_reports'])
                        @foreach($data['annual_reports'] as $key =>$annual_report)
                            <div class="col-md-3 rep">
                                <figure style="text-align: center; background: #f5f5f5;padding: 10px;">
                                    <a href="/investor/prospectus/download/{{$annual_report->inv_pdf}}"> <img src="{{cdn()}}/images/static/PDF.png" alt=""></a>

                                    <figcaption class="repdata">
                                        <p>
                                            {{ucwords( \Illuminate\Support\Str::limit($annual_report->investors_title, 68))}}
                                        </p>
                                    </figcaption>

                                </figure>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div style="float: right;" id="page-links">
                    {{$data['annual_reports']->links()}}
                </div>
            </div>
        </div>
    </section>