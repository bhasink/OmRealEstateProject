<div id="load">
        @foreach($faq as $index=>$faqs)

        <button class="accordion">{{$faqs->data}}</button>
        <div class="panel">

        <p>{{$faqs->description}}</p>

        </div>

        @endforeach

</div>

                <div class="text-center fdfaq">
                    {{$faq->links()}}
                </div>




<script>
    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('.pagination span').addClass('page-link');
</script>


