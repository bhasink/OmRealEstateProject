<!-- jQuery -->
<script src="{{asset('../admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('../admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>


<script src="{{url('/')}}/admin/js/multiple-select.js"></script>

<script>
    jQuery(document).ready(function($) {

        $('#ms').change(function() {

//            $('#ms').multipleSelect('refresh');
//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });

//        $('#ms').multipleSelect('rebuild');

        $('#ms2').change(function() {

//            $('#ms').multipleSelect('refresh');

//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });

//        $('#ms2').multipleSelect('rebuild');
//
        $('#ms3').change(function() {

//            $('#ms').multipleSelect('refresh');

//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });

        $('#ms9').change(function() {

//            $('#ms').multipleSelect('refresh');

//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });

        $('#ms10').change(function() {

//            $('#ms').multipleSelect('refresh');

//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });


        $('#ms11').change(function() {

//            $('#ms').multipleSelect('refresh');

//            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            enableFiltering: true
        });
//        $('#ms3').multipleSelect('rebuild');


    });
</script>







{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>--}}

{{--<script src=" {{asset('../admin/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>--}}

<script src=" {{asset('../admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('../admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('../admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
{{--<script src="{{asset('../admin/vendors/nprogress/nprogress.js')}}"></script>--}}
<!-- Chart.js -->
{{--<script src="{{asset('../admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>--}}
<!-- gauge.js -->
{{--<script src="{{asset('../admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>--}}
<!-- bootstrap-progressbar -->
<script src="{{asset('../admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
{{--<script src="{{asset('../admin/vendors/iCheck/icheck.min.js')}}"></script>--}}
<!-- Skycons -->
{{--<script src="{{asset('../admin/vendors/skycons/skycons.js')}}"></script>--}}
<!-- Flot -->
{{--<script src="{{asset('../admin/vendors/Flot/jquery.flot.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/Flot/jquery.flot.pie.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/Flot/jquery.flot.time.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/Flot/jquery.flot.stack.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/Flot/jquery.flot.resize.js')}}"></script>--}}
<!-- Flot plugins -->
{{--<script src="{{asset('../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>--}}
<!-- DateJS -->
{{--<script src="{{asset('../admin/vendors/DateJS/build/date.js')}}"></script>--}}
<!-- JQVMap -->
{{--<script src="{{asset('../admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>--}}
<!-- bootstrap-daterangepicker -->
{{--<script src="{{asset('../admin/vendors/moment/min/moment.min.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>--}}

<!-- Custom Theme Scripts -->
<script src=" {{asset('../admin/js/custom.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script>


//    var myDropzoneTheFirst = new Dropzone(
//        //id of drop zone element 1
//        '#d1', {
//            url : "https://www.omaxe.com/omaxeadmin/projects/create/multiple-file-store",
//            addRemoveLinks: true,
//            acceptedFiles: ".jpeg,.jpg,.png,.gif",
////            paramName: "file1",
//
////            success: function(file, response)
////            {
////                console.log(response);
////            },
////            error: function(file, response)
////            {
////                return false;
////            }
//
//        }
//    );
//
//    var myDropzoneTheSecond = new Dropzone(
//        //id of drop zone element 2
//        '#d2', {
//            url : "https://www.omaxe.com/omaxeadmin/projects/create/multiple-file-store",
//            addRemoveLinks: true,
//            acceptedFiles: ".jpeg,.jpg,.png,.gif",
////            paramName: "file2",
//
////            success: function(file, response)
////            {
////                console.log(response);
////            },
////            error: function(file, response)
////            {
////                return false;
////            }
//
//        }
//    );
//
//    var myDropzoneTheFirst = new Dropzone(
//        //id of drop zone element 1
//        '#d3', {
//            url : "https://www.omaxe.com/omaxeadmin/projects/create/multiple-file-store",
//            addRemoveLinks: true,
//            acceptedFiles: ".jpeg,.jpg,.png,.gif",
////            paramName: "file3",
//
////            success: function(file, response)
////            {
////                console.log(response);
////            },
////            error: function(file, response)
////            {
////                return false;
////            }
//
//        }
//    );
//
//    var myDropzoneTheSecond = new Dropzone(
//        //id of drop zone element 2
//        '#d4', {
//            url : "https://www.omaxe.com/omaxeadmin/projects/create/multiple-file-store",
//            addRemoveLinks: true,
//            acceptedFiles: ".jpeg,.jpg,.png,.gif",
////            paramName: "file4",
//
////            success: function(file, response)
////            {
////                console.log(response);
////            },
////            error: function(file, response)
////            {
////                return false;
////            }
//
//        }
//    );
//
//    var myDropzoneTheFirst = new Dropzone(
//        //id of drop zone element 1
//        '#d5', {
//            url : "https://www.omaxe.com/omaxeadmin/projects/create/multiple-file-store",
//            addRemoveLinks: true,
//            acceptedFiles: ".jpeg,.jpg,.png,.gif",
//            paramName: "file11",
//
////            success: function(file, response)
////            {
////                console.log(response);
////            },
////            error: function(file, response)
////            {
////                return false;
////            }
//
//        }
//    );








</script>




<script type="text/javascript">
    var baseUrl = "{{ url('/') }}";
    var token = "{{ Session::token() }}";
    Dropzone.autoDiscover = false;

    var myDropzone6 = new Dropzone("div#d6", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store1",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },

        init: function() {
            this.on('success', function(file, response) {

                $("#project_brand_images").append($('<input type="hidden" ' +
                    'name="project_brand_images[]" ' +
                    'value="' + response.fileName + '">'));
            });
        }
    });

    var myDropzone5 = new Dropzone("div#d5", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store2",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },
        init: function(){
            this.on('success',function(file,response){

                $("#project_gallery_images").append($('<input type="hidden" ' +
                    'name="project_gallery_images[]" ' +
                    'value="' + response.fileName + '">'));

            });
        }
    });

    var myDropzone4 = new Dropzone("div#d4", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store3",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },
        init: function(){
            this.on('success',function(file,response){

                $("#construction_updates_images").append($('<input type="hidden" ' +
                    'name="construction_updates_images[]" ' +
                    'value="' + response.fileName + '">'));

            });
        }
    });

    var myDropzone3 = new Dropzone("div#d3", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store4",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },
        init: function(){
            this.on('success',function(file,response){

                $("#layout_images").append($('<input type="hidden" ' +
                    'name="layout_images[]" ' +
                    'value="' + response.fileName + '">'));

            });
        }
    });

    var myDropzone2 = new Dropzone("div#d2", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store5",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },
        init: function(){
            this.on('success',function(file,response){

                $("#location_map_images").append($('<input type="hidden" ' +
                    'name="location_map_images[]" ' +
                    'value="' + response.fileName + '">'));

            });
        }
    });


    var myDropzone1 = new Dropzone("div#d1", {
        url: baseUrl+"/omaxeadmin/projects/create/multiple-file-store6",
        addRemoveLinks: true,
//        uploadMultiple: true,
//        parallelUploads: 2,
        params: {
            _token: token
        },
        init: function(){
            this.on('success',function(file,response){

                $("#sample_flat_images").append($('<input type="hidden" ' +
                    'name="sample_flat_images[]" ' +
                    'value="' + response.fileName + '">'));

            });
        }
    });

  

    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        uploadMultiple: true,
        parallelUploads: 2,
        accept: function(file, done) {

        },
    };


//    $('#datatable-buttons').dataTable({
//        "order": [[ 1, 'asc' ]]
//    });

 
</script>





{{--<script src="{{asset('../admin/vendors/jszip/dist/jszip.min.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>--}}
{{--<script src="{{asset('../admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>--}}
</body>
</html>
