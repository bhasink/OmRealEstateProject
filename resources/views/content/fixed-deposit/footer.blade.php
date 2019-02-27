
<!--==============================================================
Footer
==================================================================-->
<footer class="footer fixed-bottom" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a href="/fixed-deposit">Home <span>|</span></a>
                    <a target="_blank" href="/fixed-deposit/downloads">Downloads    <span>|</span></a>
                    <a href="/fixed-deposit/idbi-cms-branches">IDBI Bank Branches  <span>|</span></a>

                    <a href="/fixed-deposit">Calculator <span>|</span></a>
                    <a target="_blank" href="/fixed-deposit/faq">FAQ <span>|</span> </a>
                    <a target="_blank" href="/fixed-deposit/compliance">Compliance <span>|</span></a>
                    <a href="/fixed-deposit/fd-contact-us">Contact us</a>
                </p>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</footer>


<section class="hidden-lg hidden-sm hidden-md">
    <div class="button-wrap">
        <a href="tel:01140554199" data-toggle="modal" data-target="#request-a-callback" class="trigger  btn request-callback"><i class="fa fa-phone"></i>&nbsp;&nbsp; Call Now
        </a>
    </div>
</section>

<a href="#0" class="cd-top js-cd-top">Top</a>


<script src="/js/fdjs.js"></script>


<script src="/fd/js/vendor/jquery-3.3.1.min.js"></script>




<script src="/fd/js/vendor/bootstrap.min.js"></script>


<script src="/fd/js/main.js"></script>
<script src="/fd/js/vendor/intlTelInput.min.js"></script>

<script>
    $("#demo").intlTelInput({
        formatOnDisplay: false,
        geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        hiddenInput: "full_number",
        nationalMode: false,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['cn', 'jp'],
        separateDialCode: true,
    });

</script>