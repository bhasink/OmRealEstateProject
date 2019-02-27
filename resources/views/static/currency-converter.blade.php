@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        #calculator_subscribe{
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>

    <div class="top-content currency-converter-banner">


    </div>


    {{ Breadcrumbs::render('currencyconvertor', "/currencyconvertor","currency convertor") }}


    <section  class="invcon">
        <div class="container">
            <div class="col-md-12" style="margin-bottom: 50px;">

                <div class="col-md-6" style="margin: 0 auto;">
        <div id="demo-rate-convert"><form method="get" action="https://www.transfermate.com/en/exchange_rates_api.asp" name="currency_converter" id="currency_converter" onsubmit="return ValidateForm_currency_converter(this)">
                <script type="text/javascript" defer="defer">


                    String.prototype.trim = function() {
                        return (this.replace(/^[s&nbsp;]+/, "").replace(/[s&nbsp;]+$/, ""));
                    }
                    function ValidateForm_currency_converter(theform)
                    {
                        if((theform['curr_amount'].checkValidity() === false) || ((theform['curr_amount'].value.trim() != '') && (theform['curr_amount'].value != parseFloat(theform['curr_amount'].value))))
                        {
                            if(theform['curr_amount'].type != 'hidden' && theform['curr_amount'].style.display  != 'none' && theform['curr_amount'].focus)
                                theform['curr_amount'].focus()
                            alert('Amount'+unescape('%u000A')+'Please enter correct information!')
                            return false;
                        }
                        if(theform['form_id'].value.trim()==''
                            || (theform['form_id'].value.search
                            && theform['form_id'].value.search(new RegExp('(^[0-9]+[0-9]$)','g'))<0) && (theform['form_id'].value.trim() != ''))
                        {
                            if(theform['form_id'].type != 'hidden' && theform['form_id'].style.display  != 'none' && theform['form_id'].focus)
                                theform['form_id'].focus()
                            alert(unescape('%u000A')+'Please enter correct information!')
                            return false;
                        }
                        if(theform['currency_calc_from'].selectedIndex==-1 || theform['currency_calc_from'].options[theform['currency_calc_from'].selectedIndex].value.trim()=='')
                        {
                            if(theform['currency_calc_from'].type != 'hidden' && theform['currency_calc_from'].style.display  != 'none' && theform['currency_calc_from'].focus)
                                theform['currency_calc_from'].focus()
                            alert('From*'+unescape('%u000A')+'Please enter correct information!')
                            return false;
                        }
                        if(theform['currency_calc_to'].selectedIndex==-1 || theform['currency_calc_to'].options[theform['currency_calc_to'].selectedIndex].value.trim()=='')
                        {
                            if(theform['currency_calc_to'].type != 'hidden' && theform['currency_calc_to'].style.display  != 'none' && theform['currency_calc_to'].focus)
                                theform['currency_calc_to'].focus()
                            alert('To*'+unescape('%u000A')+'Please enter correct information!')
                            return false;
                        }
                        if((theform['__csrf_csrf_protect'].value.length < 10 && theform['__csrf_csrf_protect'].value.trim() != '' )
                            || (theform['__csrf_csrf_protect'].value.length > 250 && theform['__csrf_csrf_protect'].value.trim() != '' ))
                        {
                            if(theform['__csrf_csrf_protect'].type != 'hidden' && theform['__csrf_csrf_protect'].style.display  != 'none' && theform['__csrf_csrf_protect'].focus)
                                theform['__csrf_csrf_protect'].focus()
                            alert('Protect: Cross Site Request Forgery (CSRF)'+unescape('%u000A')+'Invalid verification! Please try again!')
                            return false;
                        }
                        return true
                    }

                </script>

                <a href="#" name="frm_bookmark_currency_converter"></a><a href="#" name="frm_bookmark_26"></a>
                <div id="currency_converter" class="form_table_outframe form_table_outframe_26">

                    <div id="currency_converter_page_header text-center" class="page_header">Currency Converter</div>

                    <div id="currency_converter_form_table_frame" class="form_table_frame form_table_frame_26 ">
                        <div id="currency_converter_form_table" class="form_table">

                            <div id="currency_converter_curr_amount_row" class="form-group form_table_row curr_amount_row">



                                <div id="currency_converter_curr_amount_label_cell" class="form_label_cell curr_amount_label_cell"><label for="curr_amount" id="currency_converter_curr_amount" class="form_label">Amount</label></div>

                                <div id="currency_converter_curr_amount_input_cell" class="form_input_cell curr_amount_input_cell">


                                    <div id="currency_converter_curr_amount_form_input" class="form_input curr_amount_form_input number_type_input">
                                        <input type="number" name="curr_amount" value="" size="20" autocomplete="off" placeholder="Enter Amount" id="curr_amount" class="number_type_input form_currency_converter_field form_fields form-control" style="text-align: right" pattern="[0-9]*" step="any">                    </div>
                                </div>
                            </div><!-- form_table_row -->

                            <input type="hidden" name="doit" value="0" autocomplete="off" id="doit" class="hidden_type_input form_currency_converter_field form_fields form-control">
                            <input type="hidden" name="form_id" value="26" autocomplete="off" id="form_id" class="hidden_type_input form_currency_converter_field form_fields form-control">
                            <div id="currency_converter_currency_calc_from_row" class="form-group form_table_row currency_calc_from_row">



                                <div id="currency_converter_currency_calc_from_label_cell" class="form_label_cell currency_calc_from_label_cell"><label for="currency_calc_from" id="currency_converter_currency_calc_from" class="form_label">From<span class="required">*</span></label></div>

                                <div id="currency_converter_currency_calc_from_input_cell" class="form_input_cell currency_calc_from_input_cell">


                                    <div id="currency_converter_currency_calc_from_form_input" class="form_input currency_calc_from_form_input select_type_input">
                                        <select name="currency_calc_from" autocomplete="off" id="currency_calc_from" class="select_type_input form_currency_converter_field form_fields form-control">
                                            <option value="AED">AED United Arab Emirates Dirhams</option>
                                            <option value="AUD">AUD Australia Dollars</option>
                                            <option value="CAD">CAD Canada Dollars</option>
                                            <option value="EUR">EUR Euro</option>
                                            <option value="GBP">GBP United Kingdom Pounds</option>
                                            <option value="NZD">NZD New Zealand Dollars</option>
                                            <option value="USD" selected="selected">USD United States of America Dollars</option>
                                            <option value="">----------</option>
                                            <option value="ALL">ALL Albania Leke</option>
                                            <option value="AMD">AMD Armenia Drams</option>
                                            <option value="ARS">ARS Argentina Pesos</option>
                                            <option value="AWG">AWG Aruba Guilders (also called Florins)</option>
                                            <option value="AZN">AZN Azerbaijan New Manats</option>
                                            <option value="BAM">BAM Bosnia and Herzegovina Convertible Marka</option>
                                            <option value="BBD">BBD Barbados Dollars</option>
                                            <option value="BDT">BDT Bangladesh Taka</option>
                                            <option value="BGN">BGN Bulgaria Leva</option>
                                            <option value="BHD">BHD Bahrain Dinars</option>
                                            <option value="BIF">BIF Burundi Francs</option>
                                            <option value="BMD">BMD Bermuda Dollars</option>
                                            <option value="BND">BND Brunei Darussalam Dollars</option>
                                            <option value="BOB">BOB Bolivia Bolivianos</option>
                                            <option value="BRL">BRL Brazil Reals</option>
                                            <option value="BSD">BSD Bahamas Dollars</option>
                                            <option value="BWP">BWP Botswana Pulas</option>
                                            <option value="BYR">BYR Belarus Rubles</option>
                                            <option value="BZD">BZD Belize Dollars</option>
                                            <option value="CDF">CDF Congo/Kinshasa Congolese Francs</option>
                                            <option value="CHF">CHF Switzerland Francs</option>
                                            <option value="CLP">CLP Chile Pesos</option>
                                            <option value="CNH">CNH China Yuan Renminbi (off-shore market)</option>
                                            <option value="CNY">CNY China Yuan Renminbi</option>
                                            <option value="COP">COP Colombia Pesos</option>
                                            <option value="CRC">CRC Costa Rica Colón</option>
                                            <option value="CUP">CUP Cuba Pesos</option>
                                            <option value="CVE">CVE Cape Verde Escudos</option>
                                            <option value="CZK">CZK Czech Republic Koruny</option>
                                            <option value="DJF">DJF Djibouti Francs</option>
                                            <option value="DKK">DKK Denmark Kroner</option>
                                            <option value="DOP">DOP Dominican Republic Pesos</option>
                                            <option value="DZD">DZD Algeria Algeria Dinars</option>
                                            <option value="EGP">EGP Egypt Pounds</option>
                                            <option value="ETB">ETB Ethiopia Birr</option>
                                            <option value="FJD">FJD Fiji Dollars</option>
                                            <option value="GEL">GEL Georgia Lari</option>
                                            <option value="GHS">GHS Ghana Cedis</option>
                                            <option value="GMD">GMD Gambia Dalasi</option>
                                            <option value="GNF">GNF Guinea Francs</option>
                                            <option value="GTQ">GTQ Guatemala Quetzales</option>
                                            <option value="HKD">HKD Hong Kong Dollars</option>
                                            <option value="HNL">HNL Honduras Lempiras</option>
                                            <option value="HRK">HRK Croatia Kuna</option>
                                            <option value="HTG">HTG Haiti Gourdes</option>
                                            <option value="HUF">HUF Hungary Forint</option>
                                            <option value="IDR">IDR Indonesia Rupiahs</option>
                                            <option value="ILS">ILS Israel New Shekels</option>
                                            <option value="INR">INR India Rupees</option>
                                            <option value="IQD">IQD Iraq Dinars</option>
                                            <option value="IRR">IRR Iran Rials</option>
                                            <option value="ISK">ISK Iceland Kronur</option>
                                            <option value="JMD">JMD Jamaica Dollars</option>
                                            <option value="JOD">JOD Jordan Dinars</option>
                                            <option value="JPY">JPY Japan Yen</option>
                                            <option value="KES">KES Kenya Shillings</option>
                                            <option value="KHR">KHR Cambodia Riels</option>
                                            <option value="KMF">KMF Comoros Francs</option>
                                            <option value="KRW">KRW Korea (South) Won</option>
                                            <option value="KWD">KWD Kuwait Dinars</option>
                                            <option value="KYD">KYD Cayman Islands Dollars</option>
                                            <option value="KZT">KZT Kazakhstan Tenge</option>
                                            <option value="LAK">LAK Laos Kips</option>
                                            <option value="LBP">LBP Lebanon Pounds</option>
                                            <option value="LKR">LKR Sri Lanka Rupees</option>
                                            <option value="LRD">LRD Liberia Dollars</option>
                                            <option value="LSL">LSL Lesotho Maloti</option>
                                            <option value="LYD">LYD Libya Dinars</option>
                                            <option value="MAD">MAD Morocco Dirhams</option>
                                            <option value="MDL">MDL Moldova Lei</option>
                                            <option value="MGA">MGA Madagascar Ariary</option>
                                            <option value="MKD">MKD Macedonia Denars</option>
                                            <option value="MMK">MMK Myanmar (Burma) Kyats</option>
                                            <option value="MOP">MOP Macau Patacas</option>
                                            <option value="MRO">MRO Mauritania Ouguiyas</option>
                                            <option value="MUR">MUR Mauritius Rupees</option>
                                            <option value="MVR">MVR Maldives (Maldive Islands) Rufiyaa</option>
                                            <option value="MWK">MWK Malawi Kwachas</option>
                                            <option value="MXN">MXN Mexico Pesos</option>
                                            <option value="MYR">MYR Malaysia Ringgits</option>
                                            <option value="MZN">MZN Mozambique Meticais</option>
                                            <option value="NAD">NAD Namibia Dollars</option>
                                            <option value="NGN">NGN Nigeria Nairas</option>
                                            <option value="NIO">NIO Nicaragua Cordobas</option>
                                            <option value="NOK">NOK Norway Krone</option>
                                            <option value="NPR">NPR Nepal Rupees</option>
                                            <option value="OMR">OMR Oman Rials</option>
                                            <option value="PAB">PAB Panama Balboa</option>
                                            <option value="PEN">PEN Peru Nuevos Soles</option>
                                            <option value="PGK">PGK Papua New Guinea Kina</option>
                                            <option value="PHP">PHP Philippines Pesos</option>
                                            <option value="PKR">PKR Pakistan Rupees</option>
                                            <option value="PLN">PLN Poland Zlotych</option>
                                            <option value="PYG">PYG Paraguay Guarani</option>
                                            <option value="QAR">QAR Qatar Rials</option>
                                            <option value="RON">RON Romania New Lei</option>
                                            <option value="RSD">RSD Serbia Dinars</option>
                                            <option value="RUB">RUB Russia Rubles</option>
                                            <option value="RWF">RWF Rwanda Rwanda Francs</option>
                                            <option value="SAR">SAR Saudi Arabia Riyals</option>
                                            <option value="SCR">SCR Seychelles Rupees</option>
                                            <option value="SDD">SDD Sudanese Dinar</option>
                                            <option value="SDG">SDG Sudan Pounds</option>
                                            <option value="SEK">SEK Sweden Kronor</option>
                                            <option value="SGD">SGD Singapore Dollars</option>
                                            <option value="SHP">SHP Saint Helena Pounds</option>
                                            <option value="SLL">SLL Sierra Leone Leones</option>
                                            <option value="SOS">SOS Somalia Shillings</option>
                                            <option value="STD">STD Sao Tome and Principe Dobras</option>
                                            <option value="SVC">SVC El Salvador Colones</option>
                                            <option value="SYP">SYP Syria Pounds</option>
                                            <option value="SZL">SZL Swaziland Emalangeni</option>
                                            <option value="THB">THB Thailand Baht</option>
                                            <option value="TND">TND Tunisia Dinars</option>
                                            <option value="TRY">TRY Turkey New Lira</option>
                                            <option value="TTD">TTD Trinidad and Tobago Dollars</option>
                                            <option value="TWD">TWD Taiwan New Dollars</option>
                                            <option value="TZS">TZS Tanzania Shillings</option>
                                            <option value="UAH">UAH Ukraine Hryvnia</option>
                                            <option value="UGX">UGX Uganda Shillings</option>
                                            <option value="UYU">UYU Uruguay Pesos</option>
                                            <option value="UZS">UZS Uzbekistan Sums</option>
                                            <option value="VEF">VEF Venezuela Bolivares Fuertes</option>
                                            <option value="VND">VND Vietnam Dong</option>
                                            <option value="XAF">XAF Communaute Financiere Africaine BEAC Francs</option>
                                            <option value="XCD">XCD East Caribbean Dollars</option>
                                            <option value="XOF">XOF Communaute Financiere Africaine BCEAO Francs</option>
                                            <option value="XPF">XPF Comptoirs Francais du Pacifique Francs</option>
                                            <option value="YER">YER Yemen Rials</option>
                                            <option value="ZAR">ZAR South Africa Rand</option>
                                            <option value="ZMW">ZMW Zambia Kwacha</option>
                                        </select>                    </div>
                                </div>
                            </div><!-- form_table_row -->

                            <div id="currency_converter_currency_calc_to_row" class="form-group form_table_row currency_calc_to_row">



                                <div id="currency_converter_currency_calc_to_label_cell" class="form_label_cell currency_calc_to_label_cell"><label for="currency_calc_to" id="currency_converter_currency_calc_to" class="form_label">To<span class="required">*</span></label></div>

                                <div id="currency_converter_currency_calc_to_input_cell" class="form_input_cell currency_calc_to_input_cell">


                                    <div id="currency_converter_currency_calc_to_form_input" class="form_input currency_calc_to_form_input select_type_input">
                                        <select name="currency_calc_to" autocomplete="off" id="currency_calc_to" class="select_type_input form_currency_converter_field form_fields form-control">
                                            <option value="AED">AED United Arab Emirates Dirhams</option>
                                            <option value="AUD">AUD Australia Dollars</option>
                                            <option value="CAD">CAD Canada Dollars</option>
                                            <option value="EUR">EUR Euro</option>
                                            <option value="GBP">GBP United Kingdom Pounds</option>
                                            <option value="NZD">NZD New Zealand Dollars</option>
                                            <option value="USD">USD United States of America Dollars</option>
                                            <option value="">----------</option>
                                            <option value="ALL">ALL Albania Leke</option>
                                            <option value="AMD">AMD Armenia Drams</option>
                                            <option value="ARS">ARS Argentina Pesos</option>
                                            <option value="AWG">AWG Aruba Guilders (also called Florins)</option>
                                            <option value="AZN">AZN Azerbaijan New Manats</option>
                                            <option value="BAM">BAM Bosnia and Herzegovina Convertible Marka</option>
                                            <option value="BBD">BBD Barbados Dollars</option>
                                            <option value="BDT">BDT Bangladesh Taka</option>
                                            <option value="BGN">BGN Bulgaria Leva</option>
                                            <option value="BHD">BHD Bahrain Dinars</option>
                                            <option value="BIF">BIF Burundi Francs</option>
                                            <option value="BMD">BMD Bermuda Dollars</option>
                                            <option value="BND">BND Brunei Darussalam Dollars</option>
                                            <option value="BOB">BOB Bolivia Bolivianos</option>
                                            <option value="BRL">BRL Brazil Reals</option>
                                            <option value="BSD">BSD Bahamas Dollars</option>
                                            <option value="BWP">BWP Botswana Pulas</option>
                                            <option value="BYR">BYR Belarus Rubles</option>
                                            <option value="BZD">BZD Belize Dollars</option>
                                            <option value="CDF">CDF Congo/Kinshasa Congolese Francs</option>
                                            <option value="CHF">CHF Switzerland Francs</option>
                                            <option value="CLP">CLP Chile Pesos</option>
                                            <option value="CNH">CNH China Yuan Renminbi (off-shore market)</option>
                                            <option value="CNY">CNY China Yuan Renminbi</option>
                                            <option value="COP">COP Colombia Pesos</option>
                                            <option value="CRC">CRC Costa Rica Colón</option>
                                            <option value="CUP">CUP Cuba Pesos</option>
                                            <option value="CVE">CVE Cape Verde Escudos</option>
                                            <option value="CZK">CZK Czech Republic Koruny</option>
                                            <option value="DJF">DJF Djibouti Francs</option>
                                            <option value="DKK">DKK Denmark Kroner</option>
                                            <option value="DOP">DOP Dominican Republic Pesos</option>
                                            <option value="DZD">DZD Algeria Algeria Dinars</option>
                                            <option value="EGP">EGP Egypt Pounds</option>
                                            <option value="ETB">ETB Ethiopia Birr</option>
                                            <option value="FJD">FJD Fiji Dollars</option>
                                            <option value="GEL">GEL Georgia Lari</option>
                                            <option value="GHS">GHS Ghana Cedis</option>
                                            <option value="GMD">GMD Gambia Dalasi</option>
                                            <option value="GNF">GNF Guinea Francs</option>
                                            <option value="GTQ">GTQ Guatemala Quetzales</option>
                                            <option value="HKD">HKD Hong Kong Dollars</option>
                                            <option value="HNL">HNL Honduras Lempiras</option>
                                            <option value="HRK">HRK Croatia Kuna</option>
                                            <option value="HTG">HTG Haiti Gourdes</option>
                                            <option value="HUF">HUF Hungary Forint</option>
                                            <option value="IDR">IDR Indonesia Rupiahs</option>
                                            <option value="ILS">ILS Israel New Shekels</option>
                                            <option value="INR">INR India Rupees</option>
                                            <option value="IQD" selected="selected">IQD Iraq Dinars</option>
                                            <option value="IRR">IRR Iran Rials</option>
                                            <option value="ISK">ISK Iceland Kronur</option>
                                            <option value="JMD">JMD Jamaica Dollars</option>
                                            <option value="JOD">JOD Jordan Dinars</option>
                                            <option value="JPY">JPY Japan Yen</option>
                                            <option value="KES">KES Kenya Shillings</option>
                                            <option value="KHR">KHR Cambodia Riels</option>
                                            <option value="KMF">KMF Comoros Francs</option>
                                            <option value="KRW">KRW Korea (South) Won</option>
                                            <option value="KWD">KWD Kuwait Dinars</option>
                                            <option value="KYD">KYD Cayman Islands Dollars</option>
                                            <option value="KZT">KZT Kazakhstan Tenge</option>
                                            <option value="LAK">LAK Laos Kips</option>
                                            <option value="LBP">LBP Lebanon Pounds</option>
                                            <option value="LKR">LKR Sri Lanka Rupees</option>
                                            <option value="LRD">LRD Liberia Dollars</option>
                                            <option value="LSL">LSL Lesotho Maloti</option>
                                            <option value="LYD">LYD Libya Dinars</option>
                                            <option value="MAD">MAD Morocco Dirhams</option>
                                            <option value="MDL">MDL Moldova Lei</option>
                                            <option value="MGA">MGA Madagascar Ariary</option>
                                            <option value="MKD">MKD Macedonia Denars</option>
                                            <option value="MMK">MMK Myanmar (Burma) Kyats</option>
                                            <option value="MOP">MOP Macau Patacas</option>
                                            <option value="MRO">MRO Mauritania Ouguiyas</option>
                                            <option value="MUR">MUR Mauritius Rupees</option>
                                            <option value="MVR">MVR Maldives (Maldive Islands) Rufiyaa</option>
                                            <option value="MWK">MWK Malawi Kwachas</option>
                                            <option value="MXN">MXN Mexico Pesos</option>
                                            <option value="MYR">MYR Malaysia Ringgits</option>
                                            <option value="MZN">MZN Mozambique Meticais</option>
                                            <option value="NAD">NAD Namibia Dollars</option>
                                            <option value="NGN">NGN Nigeria Nairas</option>
                                            <option value="NIO">NIO Nicaragua Cordobas</option>
                                            <option value="NOK">NOK Norway Krone</option>
                                            <option value="NPR">NPR Nepal Rupees</option>
                                            <option value="OMR">OMR Oman Rials</option>
                                            <option value="PAB">PAB Panama Balboa</option>
                                            <option value="PEN">PEN Peru Nuevos Soles</option>
                                            <option value="PGK">PGK Papua New Guinea Kina</option>
                                            <option value="PHP">PHP Philippines Pesos</option>
                                            <option value="PKR">PKR Pakistan Rupees</option>
                                            <option value="PLN">PLN Poland Zlotych</option>
                                            <option value="PYG">PYG Paraguay Guarani</option>
                                            <option value="QAR">QAR Qatar Rials</option>
                                            <option value="RON">RON Romania New Lei</option>
                                            <option value="RSD">RSD Serbia Dinars</option>
                                            <option value="RUB">RUB Russia Rubles</option>
                                            <option value="RWF">RWF Rwanda Rwanda Francs</option>
                                            <option value="SAR">SAR Saudi Arabia Riyals</option>
                                            <option value="SCR">SCR Seychelles Rupees</option>
                                            <option value="SDD">SDD Sudanese Dinar</option>
                                            <option value="SDG">SDG Sudan Pounds</option>
                                            <option value="SEK">SEK Sweden Kronor</option>
                                            <option value="SGD">SGD Singapore Dollars</option>
                                            <option value="SHP">SHP Saint Helena Pounds</option>
                                            <option value="SLL">SLL Sierra Leone Leones</option>
                                            <option value="SOS">SOS Somalia Shillings</option>
                                            <option value="STD">STD Sao Tome and Principe Dobras</option>
                                            <option value="SVC">SVC El Salvador Colones</option>
                                            <option value="SYP">SYP Syria Pounds</option>
                                            <option value="SZL">SZL Swaziland Emalangeni</option>
                                            <option value="THB">THB Thailand Baht</option>
                                            <option value="TND">TND Tunisia Dinars</option>
                                            <option value="TRY">TRY Turkey New Lira</option>
                                            <option value="TTD">TTD Trinidad and Tobago Dollars</option>
                                            <option value="TWD">TWD Taiwan New Dollars</option>
                                            <option value="TZS">TZS Tanzania Shillings</option>
                                            <option value="UAH">UAH Ukraine Hryvnia</option>
                                            <option value="UGX">UGX Uganda Shillings</option>
                                            <option value="UYU">UYU Uruguay Pesos</option>
                                            <option value="UZS">UZS Uzbekistan Sums</option>
                                            <option value="VEF">VEF Venezuela Bolivares Fuertes</option>
                                            <option value="VND">VND Vietnam Dong</option>
                                            <option value="XAF">XAF Communaute Financiere Africaine BEAC Francs</option>
                                            <option value="XCD">XCD East Caribbean Dollars</option>
                                            <option value="XOF">XOF Communaute Financiere Africaine BCEAO Francs</option>
                                            <option value="XPF">XPF Comptoirs Francais du Pacifique Francs</option>
                                            <option value="YER">YER Yemen Rials</option>
                                            <option value="ZAR">ZAR South Africa Rand</option>
                                            <option value="ZMW">ZMW Zambia Kwacha</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- form_table_row -->

                            <div id="currency_converter_csrf_row" class="form-group form_table_row csrf_row">



                                <div id="currency_converter_csrf_label_cell" class="form_label_cell csrf_label_cell">

                                </div>

                                <div id="currency_converter_csrf_input_cell" class="form_input_cell csrf_input_cell">


                                    <div id="currency_converter_csrf_form_input" class="form_input csrf_form_input custom_type_input custom_class_crosssiterequestforgery">
                                        <input type="hidden" name="__csrf_csrf_protect" value="4c5febcbb9e043a847d9bf70c8a774c68f997a9f85cedddef9304f331fdc741a1d5b9998003466ab6a959ddb2e7b13008e5dc4dff6ddd53fd0f0a021acfbbb43" autocomplete="off" id="__csrf_csrf_protect" class="hidden_type_input form_currency_converter_field form_fields form-control">
                                    </div>
                                </div>
                            </div><!-- form_table_row -->

                            <div id="currency_converter_calculator_subscribe_row" class="form-group form_table_row calculator_subscribe_row">


                                <div id="currency_converter_calculator_subscribe_input_cell" class="form_input_cell calculator_subscribe_input_cell">


                                    <div id="currency_converter_calculator_subscribe_form_input" class="form_input calculator_subscribe_form_input submit_type_input">
                                        <input type="submit" name="calculator_subscribe" value="Convert" autocomplete="off" onclick="sub_form='' ; if (ValidateForm_currency_converter(this.form)) { remote_ajax_sack_frm_btn(this.form, 'currency_converter_calculator_subscribe_form_under_info'); } this.form.onsubmit=function(){ return false; } ; return true" id="calculator_subscribe" class="submit_type_input form_currency_converter_field form_fields form-control " formnovalidate="formnovalidate">                    </div>
                                    <div id="currency_converter_calculator_subscribe_form_under_info" class="form_under_info calculator_subscribe_form_under_info"><div class="calculator_subscribe_details"></div></div>                </div>
                            </div><!-- form_table_row -->
                            <div id="currency_converter_menu_links"><a class="uri110 " href="https://www.transfermate.com/en/about_this_indicative_rate.asp" target="newwindow_208" onclick="var i=window.open(this.href,this.target,'height=250,width=550,scrollbars=yes,toolbar=no,resizable=yes,status=yes,menubar=no'); return false;">About this indicative rate</a><a class="uri3431 " href="https://www.transfermate.com/en/free_currency_converter.asp" target="_blank">Add to your web site</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="currency_converter_form_bottom" class="form_bottom currency_converter_form_bottom"></div></form>
        </div>
        </div>
        </div>
        </div>
    </section>

    <script>


        String.prototype.trim = function() {
            return (this.replace(/^[s&nbsp;]+/, "").replace(/[s&nbsp;]+$/, ""));
        }
        function ValidateForm_currency_converter(theform)
        {
            if((theform['curr_amount'].checkValidity() === false) || ((theform['curr_amount'].value.trim() != '') && (theform['curr_amount'].value != parseFloat(theform['curr_amount'].value))))
            {
                if(theform['curr_amount'].type != 'hidden' && theform['curr_amount'].style.display  != 'none' && theform['curr_amount'].focus)
                    theform['curr_amount'].focus()
                alert('Amount'+unescape('%u000A')+'Please enter correct information!')
                return false;
            }
            if(theform['form_id'].value.trim()==''
                || (theform['form_id'].value.search
                && theform['form_id'].value.search(new RegExp('(^[0-9]+[0-9]$)','g'))<0) && (theform['form_id'].value.trim() != ''))
            {
                if(theform['form_id'].type != 'hidden' && theform['form_id'].style.display  != 'none' && theform['form_id'].focus)
                    theform['form_id'].focus()
                alert(unescape('%u000A')+'Please enter correct information!')
                return false;
            }
            if(theform['currency_calc_from'].selectedIndex==-1 || theform['currency_calc_from'].options[theform['currency_calc_from'].selectedIndex].value.trim()=='')
            {
                if(theform['currency_calc_from'].type != 'hidden' && theform['currency_calc_from'].style.display  != 'none' && theform['currency_calc_from'].focus)
                    theform['currency_calc_from'].focus()
                alert('From*'+unescape('%u000A')+'Please enter correct information!')
                return false;
            }
            if(theform['currency_calc_to'].selectedIndex==-1 || theform['currency_calc_to'].options[theform['currency_calc_to'].selectedIndex].value.trim()=='')
            {
                if(theform['currency_calc_to'].type != 'hidden' && theform['currency_calc_to'].style.display  != 'none' && theform['currency_calc_to'].focus)
                    theform['currency_calc_to'].focus()
                alert('To*'+unescape('%u000A')+'Please enter correct information!')
                return false;
            }
            if((theform['__csrf_csrf_protect'].value.length < 10 && theform['__csrf_csrf_protect'].value.trim() != '' )
                || (theform['__csrf_csrf_protect'].value.length > 250 && theform['__csrf_csrf_protect'].value.trim() != '' ))
            {
                if(theform['__csrf_csrf_protect'].type != 'hidden' && theform['__csrf_csrf_protect'].style.display  != 'none' && theform['__csrf_csrf_protect'].focus)
                    theform['__csrf_csrf_protect'].focus()
                alert('Protect: Cross Site Request Forgery (CSRF)'+unescape('%u000A')+'Invalid verification! Please try again!')
                return false;
            }
            return true
        }

    </script>
    <script>
        var apiTargetHtmlObj = document.getElementById("demo-rate-convert");
        var tmScript = document.createElement("script");
        tmScript.src = "https://www.transfermate.com/en/exchange_rates_api.asp?csel=USD,IND&cshort=AED";
        document.getElementsByTagName("head")[0].appendChild(tmScript);
    </script>

    <script>
        $('document').ready(function(){

           $('page_header').style.fontSize="16px";

        });

        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

    @include('layouts.footer')


@endsection
