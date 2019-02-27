<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div style="margin:0px">
    <table width="600" border="1" cellspacing="10" cellpadding="10" align="center" style="background-color:#2959a0">
        <tbody><tr>
            <td>
                <table border="0"  cellspacing="1" cellpadding="5" align="center" style="padding:10px;">
                    <tbody>
                    <tr>
                        <td style="height:8px"></td>
                    </tr>
                    <tr style="    text-align: center;">
                        <td colspan="2" ><img src="https://d1uk2dy2wzh6ws.cloudfront.net/images/Omaxe-Logo.jpg" style="    width: 210px;" class="CToWUd"></td>

                    </tr>
                    <tr>
                        <td colspan="2" style="    font-weight: bolder; font-size: 18px;text-align:center;color:#ffffff;height:8px">Investor Contact Us</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data->name))

                                {{$data->name}}

                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Email:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff !important;">
                            <a href="" style="color: #ffffff;
    text-decoration: none;">
                                @if(isset($data->email))
                                    <a href="" style="color: #ffffff;">
                                    {{$data->email}}
                                    </a>

                                @endif
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Phone:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data->phone))

                                {{$data->phone}}

                            @endif
                        </td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Type of query:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data->query_type))--}}

                                {{--{{$data->query_type}}--}}

                            {{--@endif--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Address:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data->address))

                                {{$data->address}}

                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Query:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data->query))

                                {{$data->query}}

                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody></table></div>
<p></p>
</body>
</html>