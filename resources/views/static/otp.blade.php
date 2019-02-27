@extends('layouts.layout')
@section('content')
    @include('layouts.header')


    {{--@if(Session::has('project_session'))--}}
        {{--{{ Session::get('project_session')->$input}}--}}
    {{--@endif--}}


    <style>
        body{
            padding-top: 70px;
        }
        .otp{
            /*height: 100vh;*/
            /*display: flex;*/
            /*justify-content: center;*/
            /*align-items: center;*/
            /*flex-direction: column;*/
            text-align: center;
            margin-top: 100px;
        }

        .otp form h4{
            margin: 20px 0;
        }

        .otp .form-group input{
            width: 150px;
            max-width: 100%;
            padding: 20px 10px;
            border: 1px solid #eee;
            font-size: 18px;
            color: #999;
        }

        .otp .form-group a{
            font-size: 16px;
            text-decoration: underline;
        }

        .otp .form-group button{
            border-radius: 0;
            width: 200px;
            max-width: 100%;
            padding: 15px 0;
            font-size: 20px;
            box-sizing: border-box;
            font-weight: bold;
        }

        .otp svg{
            fill: #565a5c;
        }

    </style>

<div class="container otp">
    <div class="row">
        <div class="col-md-12">
            <svg width="100px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px"><g data-name="Go to Web - Orange"><path d="M21.87,100l-1.31-.32a11.38,11.38,0,0,1-9-11.21q-0.1-19.24,0-38.47A11.4,11.4,0,0,1,23.37,38.5q26.61,0,53.22,0a11.44,11.44,0,0,1,11.7,9.78,3.91,3.91,0,0,0,.18.55V89.65a5.76,5.76,0,0,0-.2.64,11.32,11.32,0,0,1-7.73,9.08c-0.78.29-1.62,0.43-2.43,0.63H21.87ZM46.11,76.62c0,1.3,0,2.6,0,3.91a3.89,3.89,0,1,0,7.78.14c0.05-2.57,0-5.14,0-7.71a1.56,1.56,0,0,1,.71-1.44,7.38,7.38,0,0,0,3-7.66A7.69,7.69,0,0,0,43.11,62c-1.46,2.8-1.11,6.54,1.36,8.61A4.64,4.64,0,0,1,46.11,75C46.08,75.51,46.11,76.06,46.11,76.62Z"/><path d="M51.75,0c2.13,0.39,4.31.62,6.4,1.19A23.21,23.21,0,0,1,72.22,11.91c3.5,5.73,4.61,12.08,4.69,18.68,0,1.27,0,2.53,0,3.89H65.43c0-.39,0-0.83,0-1.27a36.26,36.26,0,0,0-1-10.55C63.1,18,60.7,14,55.79,12.49c-5.66-1.79-11.16-1.54-15.87,2.6-2.83,2.49-4.16,5.88-4.75,9.5-0.38,2.33-.43,4.72-0.59,7.09-0.06.91,0,1.82,0,2.81H23.1c0-1.13,0-2.29,0-3.45,0-5.71.79-11.29,3.31-16.5,3.88-8,10.2-12.79,19-14.14L48.23,0h3.52Z"/></g>
            </svg>

            <form>
                <h4>Please enter the OTP sent to

                    @if(isset($data['project_ses']))

                        {{$data['project_ses']['phone']}}

                    @endif

                    @if(isset($data['project_ses_nri']))

                        {{$data['project_ses_nri']['email']}}

                    @endif




                    to validate</h4>

                <div class="form-group">

                    {{csrf_field()}}

                    <input type="text" name="otp" placeholder="Enter Code">
                </div>

                <div class="form-group">
                    <p><a  class=" resendotp" style="cursor: pointer;">Resend code</a></p>


                </div>

                <div class="form-group">
                <button class="btn btn-primary btn-submit">Confirm</button>
                </div>



            </form>



        </div>
    </div>
</div>


    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>


    <script>
        $(document).ready(function(){

            $('.resendotp').click(function(e){
                e.preventDefault();
                var _token = $("input[name='_token']").val();

                $.ajax({

                    url:"/otpresend",
                    type: "POST",
                    data:{_token:_token},
                    success: function(data){

                        if($.isEmptyObject(data.error)){
                            alert('OTP has been resend successfully.');
                        }
                        else{
                            alert('Problem while sending OTP.')
                        }

                    }



                });
            });


            $('.btn-submit').click(function(e){

                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var otp = $("input[name='otp']").val();


                $.ajax({

                    url:"/otpcheck",
                    type: "POST",
                    data:{_token:_token,otp:otp},
                    success: function(data){

                        if($.isEmptyObject(data.error)){
                            console.log(data.error);
                            createLead();
                            window.location.href = "https://www.omaxe.com/thankyou";
                        }
                        else{
                            alert('Wrong Otp. Please try again.');
                            location.reload();

                        }

                    }
                });

                function createLead() {
                    $.ajax({

                        url:"/createlead",
                        type: "POST",
                        data:{_token:_token},
                        success: function(data){
                            if($.isEmptyObject(data.error)){

                                console.log("success");
                            }
                        }
                    });
                }

            });

            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }

        });
    </script>


    <script>
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });
    </script>

@endsection