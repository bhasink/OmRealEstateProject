@include('content.fixed-deposit.header')


    <nav class="navbar navbar-expand-lg  main-nav sticky-top" id="main-nav">
        <button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <i class="fas fa-bars"></i>
        </button>

        <span class="visible-xs hidden-sm hidden-md hidden-sm hidden-lg"><a href=""><img src="/fd/img/Omaxe-Logo.jpg"  class="logo" alt=""></a></span>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link active" href="/fixed-deposit">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a target="_blank" class="nav-link " href="/fixed-deposit/downloads">Downloads</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/idbi-cms-branches">IDBI Bank Branches</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit" aria-expanded="false">Calculator</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/faq">FAQ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/compliance">Compliance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fixed-deposit/fd-contact-us">Contact Us</a>
                </li>

                {{--<li class="nav-item ">--}}
                {{--<a class="nav-link " href="#deposit-highlights">Deposit Highlight</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#schemes">Schemes</a>--}}
                {{--</li>--}}





                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#branches">Bank Branches for Deposits</a>--}}
                {{--</li>--}}

            </ul>
        </div>
    </nav>
</header>


<div class="clearfix"></div>

<section class="fd-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                @if(count($faq) > 0)
                    <div class="faqq">
                        @include('content.fixed-deposit.fd-ajax')
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

<!--==============================================================
Footer
==================================================================-->
<footer class="footer " id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a href="/fixed-deposit">Home <span>|</span></a>
                    <a href="/fixed-deposit/downloads">Downloads    <span>|</span></a>
                    <a href="/fixed-deposit/idbi-cms-branches">IDBI Bank Branches  <span>|</span></a>

                    <a href="/fixed-deposit">Calculator <span>|</span></a>
                    <a href="/fixed-deposit/faq">FAQ <span>|</span> </a>
                    <a href="/fixed-deposit/compliance">Compliance <span>|</span></a>
                    <a href="/fixed-deposit/fd-contact-us">Contact us</a>
                </p>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</footer>

<section class="hidden-lg hidden-sm hidden-md">
    <div class="button-wrap">
        <a href="tel:01140554199" data-toggle="modal" data-target="#request-a-callback" class="trigger  btn request-callback"><i class="fa fa-phone" style="transform: rotate(90deg)"></i>&nbsp;&nbsp; Call Now
        </a>
    </div>
</section>

<a href="#0" class="cd-top js-cd-top">Top</a>


<script src="/js/fdjs.js"></script>


<script src="/fd/js/vendor/jquery-3.3.1.min.js"></script>




<script src="/fd/js/vendor/bootstrap.min.js"></script>


<script src="/fd/js/main.js"></script>


<script type="text/javascript">

    //Smooth section  scroll//

    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });


</script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("fd-active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>


