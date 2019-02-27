<div class="col-md-12">
    <div class="row" id="reports-div">
        @if($data['annual_reports'])
            @foreach($data['annual_reports'] as $key =>$annual_report)
                <div class="col-md-3 rep">
                    <figure style="text-align: center; background: #f5f5f5;padding: 10px;">
                        <a href="/investor/prospectus/download/{{$annual_report->inv_pdf}}"> <img src="{{cdn()}}/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p>{{ucwords($annual_report->investors_title)}}</p>
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