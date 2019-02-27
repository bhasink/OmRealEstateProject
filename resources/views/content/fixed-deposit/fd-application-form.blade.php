
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Omaxe FD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/fd/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fd/css/main.css">
    <link rel="stylesheet" href="/fd/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
        .has-error{
            border: 1px solid red;
        }
        .nothas-error{
            border: 1px solid green;
        }

        .allow-dropdown {
            width: 91%;
        }

    </style>


    <style>

        @media only screen and (max-width: 768px){

            .g-recaptcha {
                transform:scale(0.55);
                transform-origin:0 0;
            }


        }

    </style>

</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="100">



<!--==============================================================
Header
==================================================================-->

<header id="header" >
    <div class="top-bar hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <span><a href="{{'/'}}"><img src="/fd/img/Omaxe-Logo.jpg" class="logo" alt=""></a></span>
                    <ul class="margin0 padding-0">
                        <li><a href=""><i class="fas fa-phone-volume"></i>&nbsp;011-40554199</a></li>
                        <li><a href="mailto:Fdcustomercare@omaxe.com"><i class="fa fa-envelope"></i> fdcustomercare@omaxe.com</a></li>

                        <!--<li><a href=""><i class="fa fa-user"></i> Login&nbsp;&nbsp;&nbsp;&nbsp; |</a></li>-->
                        <!--<li><a href="">Register</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>


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

<section class="fd-application contact">
    <div class="container">
        <div class="col-md-6" style="margin: 0 auto;">

                {!! Form::open(array('action' => 'MainController@fd_application_form_save', 'method' => 'post','class'=>'contact-card','enctype' => 'multipart/form-data')) !!}


                <h3>Register here</h3>


                <div class="form-group">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user input-icon"></i></span>

                        </div>
                        <input type="text" name="name" placeholder="Name*" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" value="{{ old('name') }}">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-envelope input-icon"></i></span>

                        </div>
                        <input type="email" name="email" placeholder="Email" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('email') }}">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt input-icon"></i></span>

                        </div>
                        <input id="demo" type="tel" name="phone_no" placeholder="Mobile Number*" class="form-control {{ $errors->has('phone_no') ? 'has-error' : '' }}" value="{{ old('phone_no') }}">
                        <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow input-icon"></i></span>

                        </div>
                        <select name="city" id="" class="form-control {{ $errors->has('city') ? 'has-error' : '' }}" value="{{ old('city') }}">
                            <option value="">Select City</option>
                            <option value="Abhayapuri">Abhayapuri</option>
                            <option value="Achabbal">Achabbal</option>
                            <option value="Achhnera">Achhnera</option>
                            <option value="Adalaj">Adalaj</option>
                            <option value="Adari">Adari</option>
                            <option value="Adilabad">Adilabad</option>
                            <option value="Adityana">Adityana</option>
                            <option value="Adoni">Adoni</option>
                            <option value="Adoor">Adoor</option>
                            <option value="Adra">Adra</option>
                            <option value="Agartala">Agartala</option>
                            <option value="Agra">Agra</option>
                            <option value="Ahiwara">Ahiwara</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Ahmedgarh">Ahmedgarh</option>
                            <option value="Ahmednagar">Ahmednagar</option>
                            <option value="Aizawl">Aizawl</option>
                            <option value="Ajmer">Ajmer</option>
                            <option value="Akaltara">Akaltara</option>
                            <option value="Akathiyoor">Akathiyoor</option>
                            <option value="Akhnoor">Akhnoor</option>
                            <option value="Akola">Akola</option>
                            <option value="Alang">Alang</option>
                            <option value="Alappuzha">Alappuzha</option>
                            <option value="Aldona">Aldona</option>
                            <option value="Aligarh">Aligarh</option>
                            <option value="Alipurduar">Alipurduar</option>
                            <option value="Allahabad">Allahabad</option>
                            <option value="Almora">Almora</option>
                            <option value="Along">Along</option>
                            <option value="Alwar">Alwar</option>
                            <option value="Amadalavalasa">Amadalavalasa</option>
                            <option value="Amalapuram">Amalapuram</option>
                            <option value="Amarpur">Amarpur</option>
                            <option value="Ambagarh Chowki">Ambagarh Chowki</option>
                            <option value="Ambaji">Ambaji</option>
                            <option value="Ambala">Ambala</option>
                            <option value="Ambaliyasan">Ambaliyasan</option>
                            <option value="Ambikapur">Ambikapur</option>
                            <option value="Amguri">Amguri</option>
                            <option value="Amlabad">Amlabad</option>
                            <option value="Amli">Amli</option>
                            <option value="Amravati">Amravati</option>
                            <option value="Amreli">Amreli</option>
                            <option value="Amritsar">Amritsar</option>
                            <option value="Amroha">Amroha</option>
                            <option value="Anakapalle">Anakapalle</option>
                            <option value="Anand">Anand</option>
                            <option value="Anandapur">Anandapur</option>
                            <option value="Anandnagaar">Anandnagaar</option>
                            <option value="Anantapur">Anantapur</option>
                            <option value="Anantnag">Anantnag</option>
                            <option value="Ancharakandy">Ancharakandy</option>
                            <option value="Andada">Andada</option>
                            <option value="Anjar">Anjar</option>
                            <option value="Anklav">Anklav</option>
                            <option value="Ankleshwar">Ankleshwar</option>
                            <option value="Antaliya">Antaliya</option>
                            <option value="Anugul">Anugul</option>
                            <option value="Ara">Ara</option>
                            <option value="Arakkonam">Arakkonam</option>
                            <option value="Arambagh">Arambagh</option>
                            <option value="Arambhada">Arambhada</option>
                            <option value="Arang">Arang</option>
                            <option value="Araria">Araria</option>
                            <option value="Arasikere">Arasikere</option>
                            <option value="Arcot">Arcot</option>
                            <option value="Areraj">Areraj</option>
                            <option value="Arki">Arki</option>
                            <option value="Arnia">Arnia</option>
                            <option value="Aroor">Aroor</option>
                            <option value="Arrah">Arrah</option>
                            <option value="Aruppukkottai">Aruppukkottai</option>
                            <option value="Asankhurd">Asankhurd</option>
                            <option value="Asansol">Asansol</option>
                            <option value="Asarganj">Asarganj</option>
                            <option value="Ashok Nagar">Ashok Nagar</option>
                            <option value="Ashtamichira">Ashtamichira</option>
                            <option value="Asika">Asika</option>
                            <option value="Asola">Asola</option>
                            <option value="Assandh">Assandh</option>
                            <option value="Ateli">Ateli</option>
                            <option value="Attingal">Attingal</option>
                            <option value="Atul">Atul</option>
                            <option value="Aurangabad">Aurangabad</option>
                            <option value="Avinissery">Avinissery</option>
                            <option value="Awantipora">Awantipora</option>
                            <option value="Azamgarh">Azamgarh</option>
                            <option value="Babiyal">Babiyal</option>
                            <option value="Baddi">Baddi</option>
                            <option value="Bade Bacheli">Bade Bacheli</option>
                            <option value="Badepalle">Badepalle</option>
                            <option value="Badharghat">Badharghat</option>
                            <option value="Bagaha">Bagaha</option>
                            <option value="Bahadurganj">Bahadurganj</option>
                            <option value="Bahadurgarh">Bahadurgarh</option>
                            <option value="Baharampur">Baharampur</option>
                            <option value="Bahraich">Bahraich</option>
                            <option value="Bairgania">Bairgania</option>
                            <option value="Bakhtiarpur">Bakhtiarpur</option>
                            <option value="Balaghat">Balaghat</option>
                            <option value="Balangir">Balangir</option>
                            <option value="Balasore">Balasore</option>
                            <option value="Baleshwar">Baleshwar</option>
                            <option value="Bali">Bali</option>
                            <option value="Ballabhgarh">Ballabhgarh</option>
                            <option value="Ballia">Ballia</option>
                            <option value="Bally">Bally</option>
                            <option value="Balod">Balod</option>
                            <option value="Baloda Bazar">Baloda Bazar</option>
                            <option value="Balrampur">Balrampur</option>
                            <option value="Balurghat">Balurghat</option>
                            <option value="Bamra">Bamra</option>
                            <option value="Banda">Banda</option>
                            <option value="Bandikui">Bandikui</option>
                            <option value="Bandipore">Bandipore</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Banganapalle">Banganapalle</option>
                            <option value="Banka">Banka</option>
                            <option value="Bankura">Bankura</option>
                            <option value="Banmankhi Bazar">Banmankhi Bazar</option>
                            <option value="Banswara">Banswara</option>
                            <option value="Bapatla">Bapatla</option>
                            <option value="Barahiya">Barahiya</option>
                            <option value="Barakar">Barakar</option>
                            <option value="Baramati">Baramati</option>
                            <option value="Baramula">Baramula</option>
                            <option value="Baran">Baran</option>
                            <option value="Barasat">Barasat</option>
                            <option value="Barauli">Barauli</option>
                            <option value="Barbigha">Barbigha</option>
                            <option value="Barbil">Barbil</option>
                            <option value="Bardhaman">Bardhaman</option>
                            <option value="Bareilly">Bareilly</option>
                            <option value="Bargarh">Bargarh</option>
                            <option value="Barh">Barh</option>
                            <option value="Baripada">Baripada</option>
                            <option value="Barmer">Barmer</option>
                            <option value="Barnala">Barnala</option>
                            <option value="Barpeta">Barpeta</option>
                            <option value="Barrackpur">Barrackpur</option>
                            <option value="Barughutu">Barughutu</option>
                            <option value="Barwala">Barwala</option>
                            <option value="Barwani">Barwani</option>
                            <option value="Basna">Basna</option>
                            <option value="Basudebpur">Basudebpur</option>
                            <option value="Batala">Batala</option>
                            <option value="Bathinda">Bathinda</option>
                            <option value="Bawal">Bawal</option>
                            <option value="Bazpur">Bazpur</option>
                            <option value="Beawar">Beawar</option>
                            <option value="Begusarai">Begusarai</option>
                            <option value="Behea">Behea</option>
                            <option value="Belgaum">Belgaum</option>
                            <option value="Bellampalle">Bellampalle</option>
                            <option value="Bellary">Bellary</option>
                            <option value="Belpahar">Belpahar</option>
                            <option value="Bemetra">Bemetra</option>
                            <option value="Berhampur">Berhampur</option>
                            <option value="Bethamcherla">Bethamcherla</option>
                            <option value="Bettiah">Bettiah</option>
                            <option value="Betul">Betul</option>
                            <option value="Bhabua">Bhabua</option>
                            <option value="Bhadrachalam">Bhadrachalam</option>
                            <option value="Bhadrak">Bhadrak</option>
                            <option value="Bhagalpur">Bhagalpur</option>
                            <option value="Bhagha Purana">Bhagha Purana</option>
                            <option value="Bhainsa">Bhainsa</option>
                            <option value="Bhajanpura">Bhajanpura</option>
                            <option value="Bhandara">Bhandara</option>
                            <option value="Bharatpur">Bharatpur</option>
                            <option value="Bharthana">Bharthana</option>
                            <option value="Bharuch">Bharuch</option>
                            <option value="Bhatapara">Bhatapara</option>
                            <option value="Bhavani">Bhavani</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Bhawanipatna">Bhawanipatna</option>
                            <option value="Bheemunipatnam">Bheemunipatnam</option>
                            <option value="Bhilai">Bhilai</option>
                            <option value="Bhilwara">Bhilwara</option>
                            <option value="Bhimavaram">Bhimavaram</option>
                            <option value="Bhinmal">Bhinmal</option>
                            <option value="Bhiwandi">Bhiwandi</option>
                            <option value="Bhiwani">Bhiwani</option>
                            <option value="Bhongir">Bhongir</option>
                            <option value="Bhopal">Bhopal</option>
                            <option value="Bhuban">Bhuban</option>
                            <option value="Bhubaneswar">Bhubaneswar</option>
                            <option value="Bhuj">Bhuj</option>
                            <option value="Bhusawal">Bhusawal</option>
                            <option value="Bidar">Bidar</option>
                            <option value="Bidhan Nagar">Bidhan Nagar</option>
                            <option value="Bihar Sharif">Bihar Sharif</option>
                            <option value="Bijnaur">Bijnaur</option>
                            <option value="Bikaner">Bikaner</option>
                            <option value="Bikramganj">Bikramganj</option>
                            <option value="Bilara">Bilara</option>
                            <option value="Bilasipara">Bilasipara</option>
                            <option value="Bilaspur">Bilaspur</option>
                            <option value="Biramitrapur">Biramitrapur</option>
                            <option value="Birgaon">Birgaon</option>
                            <option value="Bobbili">Bobbili</option>
                            <option value="Bodh Gaya">Bodh Gaya</option>
                            <option value="Bodhan">Bodhan</option>
                            <option value="Bokaro Steel City">Bokaro Steel City</option>
                            <option value="Bomdila">Bomdila</option>
                            <option value="Bongaigaon">Bongaigaon</option>
                            <option value="Brahmapur">Brahmapur</option>
                            <option value="Brajrajnagar">Brajrajnagar</option>
                            <option value="Budaun">Budaun</option>
                            <option value="Budhlada">Budhlada</option>
                            <option value="Bulandshahr">Bulandshahr</option>
                            <option value="Burhanpur">Burhanpur</option>
                            <option value="Burla">Burla</option>
                            <option value="Buxar">Buxar</option>
                            <option value="Byasanagar">Byasanagar</option>
                            <option value="Calcutta">Calcutta</option>
                            <option value="Cambay">Cambay</option>
                            <option value="Chaibasa">Chaibasa</option>
                            <option value="Chakeri">Chakeri</option>
                            <option value="Chakradharpur">Chakradharpur</option>
                            <option value="Chalakudy">Chalakudy</option>
                            <option value="Chalisgaon">Chalisgaon</option>
                            <option value="Chamba">Chamba</option>
                            <option value="Champa">Champa</option>
                            <option value="Champawat">Champawat</option>
                            <option value="Champhai">Champhai</option>
                            <option value="Chamrajnagar">Chamrajnagar</option>
                            <option value="Chandan Bara">Chandan Bara</option>
                            <option value="Chandausi">Chandausi</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chandil">Chandil</option>
                            <option value="Chandrapur">Chandrapur</option>
                            <option value="Chandrapura">Chandrapura</option>
                            <option value="Changanassery">Changanassery</option>
                            <option value="Chanpatia">Chanpatia</option>
                            <option value="Chapirevula">Chapirevula</option>
                            <option value="Charkhari">Charkhari</option>
                            <option value="Charkhi Dadri">Charkhi Dadri</option>
                            <option value="Chatra">Chatra</option>
                            <option value="Cheeka">Cheeka</option>
                            <option value="Chendamangalam">Chendamangalam</option>
                            <option value="Chengalpattu">Chengalpattu</option>
                            <option value="Chengannur">Chengannur</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Cherthala">Cherthala</option>
                            <option value="Cheruthazham">Cheruthazham</option>
                            <option value="Chhapra">Chhapra</option>
                            <option value="Chhatarpur">Chhatarpur</option>
                            <option value="Chhindwara">Chhindwara</option>
                            <option value="Chikkaballapur">Chikkaballapur</option>
                            <option value="Chikmagalur">Chikmagalur</option>
                            <option value="Chilakaluripet">Chilakaluripet</option>
                            <option value="Chinchani">Chinchani</option>
                            <option value="Chinna salem">Chinna salem</option>
                            <option value="Chinsura">Chinsura</option>
                            <option value="Chintamani">Chintamani</option>
                            <option value="Chiplun">Chiplun</option>
                            <option value="Chirala">Chirala</option>
                            <option value="Chirkunda">Chirkunda</option>
                            <option value="Chirmiri">Chirmiri</option>
                            <option value="Chitradurga">Chitradurga</option>
                            <option value="Chitrakoot">Chitrakoot</option>
                            <option value="Chittoor">Chittoor</option>
                            <option value="Chittur-Thathamangalam">Chittur-Thathamangalam</option>
                            <option value="Chockli">Chockli</option>
                            <option value="Churi">Churi</option>
                            <option value="Churu">Churu</option>
                            <option value="Coimbatore">Coimbatore</option>
                            <option value="Colgong">Colgong</option>
                            <option value="Contai">Contai</option>
                            <option value="Cooch Behar">Cooch Behar</option>
                            <option value="Coonoor">Coonoor</option>
                            <option value="Cuddalore">Cuddalore</option>
                            <option value="Cuddapah">Cuddapah</option>
                            <option value="Curchorem Cacora">Curchorem Cacora</option>
                            <option value="Cuttack">Cuttack</option>
                            <option value="Dabra">Dabra</option>
                            <option value="Dadri">Dadri</option>
                            <option value="Dahod">Dahod</option>
                            <option value="Dalhousie">Dalhousie</option>
                            <option value="Dalkhola">Dalkhola</option>
                            <option value="Dalli-Rajhara">Dalli-Rajhara</option>
                            <option value="Dalsinghsarai">Dalsinghsarai</option>
                            <option value="Daltonganj">Daltonganj</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Damoh">Damoh</option>
                            <option value="Darbhanga">Darbhanga</option>
                            <option value="Darjeeling">Darjeeling</option>
                            <option value="Dasua">Dasua</option>
                            <option value="Datia">Datia</option>
                            <option value="Daudnagar">Daudnagar</option>
                            <option value="Daund">Daund</option>
                            <option value="Davanagere">Davanagere</option>
                            <option value="Debagarh">Debagarh</option>
                            <option value="Deesa">Deesa</option>
                            <option value="Dehgam">Dehgam</option>
                            <option value="Dehradun">Dehradun</option>
                            <option value="Dehri-on-Sone">Dehri-on-Sone</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Deoghar">Deoghar</option>
                            <option value="Deoria">Deoria</option>
                            <option value="Devarakonda">Devarakonda</option>
                            <option value="Devgarh">Devgarh</option>
                            <option value="Dewas">Dewas</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Dhamtari">Dhamtari</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Dhar">Dhar</option>
                            <option value="Dharampur">Dharampur</option>
                            <option value="Dharamsala">Dharamsala</option>
                            <option value="Dharmanagar">Dharmanagar</option>
                            <option value="Dharmapuri">Dharmapuri</option>
                            <option value="Dharmavaram">Dharmavaram</option>
                            <option value="Dharwad">Dharwad</option>
                            <option value="Dhekiajuli">Dhekiajuli</option>
                            <option value="Dhenkanal">Dhenkanal</option>
                            <option value="Dholka">Dholka</option>
                            <option value="Dhubri">Dhubri</option>
                            <option value="Dhule">Dhule</option>
                            <option value="Dhulian">Dhulian</option>
                            <option value="Dhuri">Dhuri</option>
                            <option value="Dibrugarh">Dibrugarh</option>
                            <option value="Digboi">Digboi</option>
                            <option value="Dighwara">Dighwara</option>
                            <option value="Dimapur">Dimapur</option>
                            <option value="Dinanagar">Dinanagar</option>
                            <option value="Dindigul">Dindigul</option>
                            <option value="Diphu">Diphu</option>
                            <option value="Dipka">Dipka</option>
                            <option value="Dispur">Dispur</option>
                            <option value="Dombivli">Dombivli</option>
                            <option value="Dongargarh">Dongargarh</option>
                            <option value="Dumdum">Dumdum</option>
                            <option value="Dumka">Dumka</option>
                            <option value="Dumraon">Dumraon</option>
                            <option value="Durg-Bhilai Nagar">Durg-Bhilai Nagar</option>
                            <option value="Durgapur">Durgapur</option>
                            <option value="Dwarka">Dwarka</option>
                            <option value="Ellenabad">Ellenabad </option>
                            <option value="Eluru">Eluru</option>
                            <option value="Erattupetta">Erattupetta</option>
                            <option value="Erode">Erode</option>
                            <option value="Etah">Etah</option>
                            <option value="Etawah">Etawah</option>
                            <option value="Faizabad">Faizabad</option>
                            <option value="Falna">Falna</option>
                            <option value="Faridabad">Faridabad</option>
                            <option value="Faridkot">Faridkot</option>
                            <option value="Farooqnagar">Farooqnagar</option>
                            <option value="Farrukhabad">Farrukhabad</option>
                            <option value="Fatehabad">Fatehabad</option>
                            <option value="Fatehgarh">Fatehgarh</option>
                            <option value="Fatehpur">Fatehpur</option>
                            <option value="Fatehpur Chaurasi">Fatehpur Chaurasi</option>
                            <option value="Fatehpur Sikri">Fatehpur Sikri</option>
                            <option value="Fatwah">Fatwah</option>
                            <option value="Fazilka">Fazilka</option>
                            <option value="Firozabad">Firozabad</option>
                            <option value="Firozpur">Firozpur</option>
                            <option value="Firozpur Cantt.">Firozpur Cantt.</option>
                            <option value="Forbesganj">Forbesganj</option>
                            <option value="Gadag">Gadag</option>
                            <option value="Gadchiroli">Gadchiroli</option>
                            <option value="Gadwal">Gadwal</option>
                            <option value="Ganaur">Ganaur</option>
                            <option value="Gandhidham">Gandhidham</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Gangtok">Gangtok</option>
                            <option value="Ganjam">Ganjam</option>
                            <option value="Garhwa">Garhwa</option>
                            <option value="Gauripur">Gauripur</option>
                            <option value="Gaya">Gaya</option>
                            <option value="Gharaunda">Gharaunda</option>
                            <option value="Ghatampur">Ghatampur</option>
                            <option value="Ghatanji">Ghatanji</option>
                            <option value="Ghatshila">Ghatshila</option>
                            <option value="Ghaziabad">Ghaziabad</option>
                            <option value="Ghazipur">Ghazipur</option>
                            <option value="Giddarbaha">Giddarbaha</option>
                            <option value="Giridih">Giridih</option>
                            <option value="Goa Velha">Goa Velha</option>
                            <option value="Goalpara">Goalpara</option>
                            <option value="Gobindgarh">Gobindgarh</option>
                            <option value="Gobranawapara">Gobranawapara</option>
                            <option value="Godda">Godda</option>
                            <option value="Godhra">Godhra</option>
                            <option value="Gogri Jamalpur">Gogri Jamalpur</option>
                            <option value="Gohana">Gohana</option>
                            <option value="Gokak">Gokak</option>
                            <option value="Golaghat">Golaghat</option>
                            <option value="Gomoh">Gomoh</option>
                            <option value="Gondiya">Gondiya</option>
                            <option value="3Gooty0">Gooty</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Gorakhpur">Gorakhpur</option>
                            <option value="Greater Noida">Greater Noida</option>
                            <option value="Gudalur">Gudalur</option>
                            <option value="Gudivada">Gudivada</option>
                            <option value="Gudur">Gudur</option>
                            <option value="Gulbarga">Gulbarga</option>
                            <option value="Gumia">Gumia</option>
                            <option value="Gumla">Gumla</option>
                            <option value="Guna">Guna</option>
                            <option value="Gundlupet">Gundlupet</option>
                            <option value="Guntakal">Guntakal</option>
                            <option value="Guntur">Guntur</option>
                            <option value="Gunupur">Gunupur</option>
                            <option value="Gurdaspur">Gurdaspur</option>
                            <option value="Gurgaon">Gurgaon</option>
                            <option value="Guruvayoor">Guruvayoor</option>
                            <option value="Guwahati">Guwahati</option>
                            <option value="Gwalior">Gwalior</option>
                            <option value="Haflong">Haflong</option>
                            <option value="Haibat(Yamuna Nagar)">Haibat(Yamuna Nagar)</option>
                            <option value="Hailakandi">Hailakandi</option>
                            <option value="Hajipur">Hajipur</option>
                            <option value="Haldia">Haldia</option>
                            <option value="Haldwani">Haldwani</option>
                            <option value="Hamirpur">Hamirpur</option>
                            <option value="Hamirpur">Hamirpur</option>
                            <option value="Hansi">Hansi</option>
                            <option value="Hanuman Junction">Hanuman Junction</option>
                            <option value="Hanumangarh">Hanumangarh</option>
                            <option value="Harda">Harda</option>
                            <option value="Hardoi">Hardoi</option>
                            <option value="Haridwar">Haridwar</option>
                            <option value="Harsawa">Harsawa</option>
                            <option value="Hassan">Hassan</option>
                            <option value="Hastinapur">Hastinapur</option>
                            <option value="Hathras">Hathras</option>
                            <option value="Hazaribag">Hazaribag</option>
                            <option value="Hilsa">Hilsa</option>
                            <option value="Himatnagar">Himatnagar</option>
                            <option value="Hindupur">Hindupur</option>
                            <option value="Hinjilicut">Hinjilicut</option>
                            <option value="Hisar">Hisar</option>
                            <option value="Hisua">Hisua</option>
                            <option value="Hodal">Hodal</option>
                            <option value="Hojai">Hojai</option>
                            <option value="Hoshiarpur">Hoshiarpur</option>
                            <option value="Hospet">Hospet</option>
                            <option value="Howrah">Howrah</option>
                            <option value="Hubli">Hubli</option>
                            <option value="Hussainabad">Hussainabad</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Ichalkaranji">Ichalkaranji</option>
                            <option value="Ichchapuram">Ichchapuram</option>
                            <option value="Idar">Idar</option>
                            <option value="Imphal">Imphal</option>
                            <option value="Indore">Indore</option>
                            <option value="Indranagar">Indranagar</option>
                            <option value="Irinjalakuda">Irinjalakuda</option>
                            <option value="Islampur">Islampur</option>
                            <option value="Islampur">Islampur</option>
                            <option value="Itanagar">Itanagar</option>
                            <option value="Itarsi">Itarsi</option>
                            <option value="Jabalpur">Jabalpur</option>
                            <option value="Jagadhri">Jagadhri</option>
                            <option value="Jagatsinghapur">Jagatsinghapur</option>
                            <option value="Jagdalpur">Jagdalpur</option>
                            <option value="Jagdispur">Jagdispur</option>
                            <option value="Jaggaiahpet">Jaggaiahpet</option>
                            <option value="Jagraon">Jagraon</option>
                            <option value="Jagtial">Jagtial</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Jais">Jais</option>
                            <option value="Jaisalmer">Jaisalmer</option>
                            <option value="Jaitaran">Jaitaran</option>
                            <option value="Jaitu">Jaitu</option>
                            <option value="Jajapur">Jajapur</option>
                            <option value="Jajmau">Jajmau</option>
                            <option value="Jalalabad">Jalalabad</option>
                            <option value="Jalandhar">Jalandhar</option>
                            <option value="Jalandhar Cantt.">Jalandhar Cantt.</option>
                            <option value="Jaleswar">Jaleswar</option>
                            <option value="Jalgaon">Jalgaon</option>
                            <option value="Jalna">Jalna</option>
                            <option value="Jalore">Jalore</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Jammalamadugu">Jammalamadugu</option>
                            <option value="Jammu">Jammu</option>
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Jamtara">Jamtara</option>
                            <option value="Jamui">Jamui</option>
                            <option value="Jandiala">Jandiala</option>
                            <option value="Jangaon">Jangaon</option>
                            <option value="Janjgir">Janjgir</option>
                            <option value="Jashpurnagar">Jashpurnagar</option>
                            <option value="Jaspur">Jaspur</option>
                            <option value="Jatani">Jatani</option>
                            <option value="Jaunpur">Jaunpur</option>
                            <option value="Jehanabad">Jehanabad</option>
                            <option value="Jeypur">Jeypur</option>
                            <option value="Jhabua">Jhabua</option>
                            <option value="Jhajha">Jhajha</option>
                            <option value="Jhajjar">Jhajjar</option>
                            <option value="Jhalawar">Jhalawar</option>
                            <option value="Jhanjharpur">Jhanjharpur</option>
                            <option value="Jhansi">Jhansi</option>
                            <option value="Jhargram">Jhargram</option>
                            <option value="Jharsuguda">Jharsuguda</option>
                            <option value="Jhumri Tilaiya">Jhumri Tilaiya</option>
                            <option value="Jhunjhunu">Jhunjhunu</option>
                            <option value="Jind">Jind</option>
                            <option value="Joda">Joda</option>
                            <option value="Jodhpur">Jodhpur</option>
                            <option value="Jogabani">Jogabani</option>
                            <option value="Jogendranagar">Jogendranagar</option>
                            <option value="Jorhat">Jorhat</option>
                            <option value="Jowai">Jowai</option>
                            <option value="Junagadh">Junagadh</option>
                            <option value="Junnar">Junnar</option>
                            <option value="Kadapa">Kadapa</option>
                            <option value="Kadi">Kadi</option>
                            <option value="Kadiri">Kadiri</option>
                            <option value="Kadirur">Kadirur</option>
                            <option value="Kagaznagar">Kagaznagar</option>
                            <option value="Kailaras">Kailaras</option>
                            <option value="Kailasahar">Kailasahar</option>
                            <option value="Kaithal">Kaithal</option>
                            <option value="Kakching">Kakching</option>
                            <option value="Kakinada">Kakinada</option>
                            <option value="Kalan Wali">Kalan Wali</option>
                            <option value="Kalavad">Kalavad</option>
                            <option value="Kalburgi">Kalburgi</option>
                            <option value="Kalimpong">Kalimpong</option>
                            <option value="Kalka">Kalka</option>
                            <option value="Kalliasseri">Kalliasseri</option>
                            <option value="Kalol">Kalol</option>
                            <option value="Kalpetta">Kalpetta</option>
                            <option value="Kalpi">Kalpi</option>
                            <option value="Kalyan">Kalyan</option>
                            <option value="Kalyandurg">Kalyandurg</option>
                            <option value="Kamareddy">Kamareddy</option>
                            <option value="Kamthi">Kamthi</option>
                            <option value="Kanchipuram">Kanchipuram</option>
                            <option value="Kandukur">Kandukur</option>
                            <option value="Kanhangad">Kanhangad</option>
                            <option value="Kanjikkuzhi">Kanjikkuzhi</option>
                            <option value="Kanker">Kanker</option>
                            <option value="Kannur">Kannur</option>
                            <option value="Kanpur">Kanpur</option>
                            <option value="Kantabanji">Kantabanji</option>
                            <option value="Kanti">Kanti</option>
                            <option value="Kapadvanj">Kapadvanj</option>
                            <option value="Kapurthala">Kapurthala</option>
                            <option value="Karad">Karad</option>
                            <option value="Karaikal">Karaikal</option>
                            <option value="Karaikudi">Karaikudi</option>
                            <option value="Karanjia">Karanjia</option>
                            <option value="Karimganj">Karimganj</option>
                            <option value="Karimnagar">Karimnagar</option>
                            <option value="Karjan">Karjan</option>
                            <option value="Karkala">Karkala</option>
                            <option value="Karnal">Karnal</option>
                            <option value="Karoran">Karoran</option>
                            <option value="Kartarpur">Kartarpur</option>
                            <option value="Karungal">Karungal</option>
                            <option value="Karur">Karur</option>
                            <option value="Karwar">Karwar</option>
                            <option value="Kasaragod">Kasaragod</option>
                            <option value="Kashipur">Kashipur</option>
                            <option value="Kathua">Kathua</option>
                            <option value="Katihar">Katihar</option>
                            <option value="Katni">Katni</option>
                            <option value="Kavali">Kavali</option>
                            <option value="Kavaratti">Kavaratti</option>
                            <option value="Kawardha">Kawardha</option>
                            <option value="Kayamkulam">Kayamkulam</option>
                            <option value="Kendrapara">Kendrapara</option>
                            <option value="Kendujhar">Kendujhar</option>
                            <option value="Keshod">Keshod</option>
                            <option value="Keylong">Keylong</option>
                            <option value="Khagaria">Khagaria</option>
                            <option value="Khambhalia">Khambhalia</option>
                            <option value="Khambhat">Khambhat</option>
                            <option value="Khammam">Khammam</option>
                            <option value="Khanna">Khanna</option>
                            <option value="Kharagpur">Kharagpur</option>
                            <option value="Kharagpur">Kharagpur</option>
                            <option value="Kharar">Kharar</option>
                            <option value="Kheda">Kheda</option>
                            <option value="Khedbrahma">Khedbrahma</option>
                            <option value="Kheralu">Kheralu</option>
                            <option value="Kheri">Kheri</option>
                            <option value="Khordha">Khordha</option>
                            <option value="Khowai">Khowai</option>
                            <option value="Khunti">Khunti</option>
                            <option value="Khurai">Khurai</option>
                            <option value="kichha">kichha</option>
                            <option value="Kishanganj">Kishanganj</option>
                            <option value="Kochi">Kochi</option>
                            <option value="Kodad">Kodad</option>
                            <option value="Kodinar">Kodinar</option>
                            <option value="Kodungallur">Kodungallur</option>
                            <option value="Kohima">Kohima</option>
                            <option value="Kokrajhar">Kokrajhar</option>
                            <option value="Kolar">Kolar</option>
                            <option value="Kolhapur">Kolhapur</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Kollam">Kollam</option>
                            <option value="Kollankodu">Kollankodu</option>
                            <option value="Kondagaon">Kondagaon</option>
                            <option value="Konnagar">Konnagar</option>
                            <option value="Koothuparamba">Koothuparamba</option>
                            <option value="Koraput">Koraput</option>
                            <option value="Koratla">Koratla</option>
                            <option value="Korba">Korba</option>
                            <option value="Kot Kapura">Kot Kapura</option>
                            <option value="Kota">Kota</option>
                            <option value="Kotdwara">Kotdwara</option>
                            <option value="Kothagudem">Kothagudem</option>
                            <option value="Kothamangalam">Kothamangalam</option>
                            <option value="Kothapeta">Kothapeta</option>
                            <option value="Kotma">Kotma</option>
                            <option value="Kottayam">Kottayam</option>
                            <option value="Kovvur">Kovvur</option>
                            <option value="Kozhikode">Kozhikode</option>
                            <option value="Krishnanagar">Krishnanagar</option>
                            <option value="Kuchinda">Kuchinda</option>
                            <option value="Kunnamkulam">Kunnamkulam</option>
                            <option value="Kurali">Kurali</option>
                            <option value="Kurnool">Kurnool</option>
                            <option value="Kyathampalle">Kyathampalle</option>
                            <option value="Lachhmangarh">Lachhmangarh</option>
                            <option value="Ladnu">Ladnu</option>
                            <option value="Ladwa">Ladwa</option>
                            <option value="Lahar">Lahar</option>
                            <option value="Laharpur">Laharpur</option>
                            <option value="Lakheri">Lakheri</option>
                            <option value="Lakhimpur">Lakhimpur</option>
                            <option value="Lakhisarai">Lakhisarai</option>
                            <option value="Lakshmeshwar">Lakshmeshwar</option>
                            <option value="Lal Gopalganj Nindaura">Lal Gopalganj Nindaura</option>
                            <option value="Lalganj">Lalganj</option>
                            <option value="Lalgudi">Lalgudi</option>
                            <option value="Lalitpur">Lalitpur</option>
                            <option value="Lalsot">Lalsot</option>
                            <option value="Lanka">Lanka</option>
                            <option value="Lar">Lar</option>
                            <option value="Lathi">Lathi</option>
                            <option value="Latur">Latur</option>
                            <option value="Leh">Leh</option>
                            <option value="Lilong">Lilong</option>
                            <option value="Limbdi">Limbdi</option>
                            <option value="Lingsugur">Lingsugur</option>
                            <option value="Loha">Loha</option>
                            <option value="Lohardaga">Lohardaga</option>
                            <option value="Lonar">Lonar</option>
                            <option value="Lonavla">Lonavla</option>
                            <option value="Longowal">Longowal</option>
                            <option value="Loni">Loni</option>
                            <option value="Losal">Losal</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Ludhiana">Ludhiana</option>
                            <option value="Lumding">Lumding</option>
                            <option value="Lunawada">Lunawada</option>
                            <option value="Lundi">Lundi</option>
                            <option value="Lunglei">Lunglei</option>
                            <option value="Macherla">Macherla</option>
                            <option value="Machilipatnam">Machilipatnam</option>
                            <option value="Madanapalle">Madanapalle</option>
                            <option value="Maddur">Maddur</option>
                            <option value="Madgaon">Madgaon</option>
                            <option value="Madhepura">Madhepura</option>
                            <option value="Madhubani">Madhubani</option>
                            <option value="Madhugiri">Madhugiri</option>
                            <option value="Madhupur">Madhupur</option>
                            <option value="Madhyamgram">Madhyamgram</option>
                            <option value="Madikeri">Madikeri</option>
                            <option value="Madurai">Madurai</option>
                            <option value="Magadi">Magadi</option>
                            <option value="Mahabaleswar">Mahabaleswar</option>
                            <option value="Mahad">Mahad</option>
                            <option value="Mahalingpur">Mahalingpur</option>
                            <option value="Maharajganj">Maharajganj</option>
                            <option value="Maharajpur">Maharajpur</option>
                            <option value="Mahasamund">Mahasamund</option>
                            <option value="Mahbubnagar">Mahbubnagar</option>
                            <option value="Mahe">Mahe</option>
                            <option value="Mahendragarh">Mahendragarh</option>
                            <option value="Mahendragarh">Mahendragarh</option>
                            <option value="Mahesana">Mahesana</option>
                            <option value="Mahidpur">Mahidpur</option>
                            <option value="Mahnar Bazar">Mahnar Bazar</option>
                            <option value="Mahoba">Mahoba</option>
                            <option value="Mahuli">Mahuli</option>
                            <option value="Mahuva">Mahuva</option>
                            <option value="Mahwa">Mahwa</option>
                            <option value="Maihar">Maihar</option>
                            <option value="Mainaguri">Mainaguri</option>
                            <option value="Makhdumpur">Makhdumpur</option>
                            <option value="Makrana">Makrana</option>
                            <option value="Mal">Mal</option>
                            <option value="Malajkhand">Malajkhand</option>
                            <option value="Malappuram">Malappuram</option>
                            <option value="Malavalli">Malavalli</option>
                            <option value="Malegaon">Malegaon</option>
                            <option value="Malerkotla">Malerkotla</option>
                            <option value="Malkangiri">Malkangiri</option>
                            <option value="Malkapur">Malkapur</option>
                            <option value="Malout">Malout</option>
                            <option value="Malpura">Malpura</option>
                            <option value="Malur">Malur</option>
                            <option value="Manasa">Manasa</option>
                            <option value="Manavadar">Manavadar</option>
                            <option value="Manawar">Manawar</option>
                            <option value="Manchar">Manchar</option>
                            <option value="Mancherial">Mancherial</option>
                            <option value="Mandalgarh">Mandalgarh</option>
                            <option value="Mandamarri">Mandamarri</option>
                            <option value="Mandapeta">Mandapeta</option>
                            <option value="Mandawa">Mandawa</option>
                            <option value="Mandi">Mandi</option>
                            <option value="Mandi Dabwali">Mandi Dabwali</option>
                            <option value="Mandideep">Mandideep</option>
                            <option value="Mandla">Mandla</option>
                            <option value="Mandsaur">Mandsaur</option>
                            <option value="Mandvi">Mandvi</option>
                            <option value="Mandya">Mandya</option>
                            <option value="Maner">Maner</option>
                            <option value="Manesar">Manesar</option>
                            <option value="Mangalagiri">Mangalagiri</option>
                            <option value="Mangaldoi">Mangaldoi</option>
                            <option value="Mangalore">Mangalore</option>
                            <option value="Mangalvedhe">Mangalvedhe</option>
                            <option value="Manglaur">Manglaur</option>
                            <option value="Mangrol">Mangrol</option>
                            <option value="Mangrol">Mangrol</option>
                            <option value="Mangrulpir">Mangrulpir</option>
                            <option value="Manihari">Manihari</option>
                            <option value="Manjlegaon">Manjlegaon</option>
                            <option value="Mankachar">Mankachar</option>
                            <option value="Manmad">Manmad</option>
                            <option value="Mansa">Mansa</option>
                            <option value="Manuguru">Manuguru</option>
                            <option value="Manvi">Manvi</option>
                            <option value="Manwath">Manwath</option>
                            <option value="Mapusa">Mapusa</option>
                            <option value="Margao">Margao</option>
                            <option value="Margherita">Margherita</option>
                            <option value="Marhaura">Marhaura</option>
                            <option value="Mariani">Mariani</option>
                            <option value="Marigaon">Marigaon</option>
                            <option value="Markapur">Markapur</option>
                            <option value="Marmagao">Marmagao</option>
                            <option value="Masaurhi">Masaurhi</option>
                            <option value="Mathabhanga">Mathabhanga</option>
                            <option value="Mathura">Mathura</option>
                            <option value="Mattannur">Mattannur</option>
                            <option value="Mauganj">Mauganj</option>
                            <option value="Maur">Maur</option>
                            <option value="Mavelikkara">Mavelikkara</option>
                            <option value="Mavoor">Mavoor</option>
                            <option value="Mayang Imphal">Mayang Imphal</option>
                            <option value="Medak">Medak</option>
                            <option value="Medinipur">Medinipur</option>
                            <option value="Meerut">Meerut</option>
                            <option value="Mehkar">Mehkar</option>
                            <option value="Mehmedabad">Mehmedabad</option>
                            <option value="Memari">Memari</option>
                            <option value="Merta City">Merta City</option>
                            <option value="Mhaswad">Mhaswad</option>
                            <option value="Mhow Cantonment">Mhow Cantonment</option>
                            <option value="Mhowgaon">Mhowgaon</option>
                            <option value="Mihijam">Mihijam</option>
                            <option value="Mira-Bhayandar">Mira-Bhayandar</option>
                            <option value="Miraj">Miraj</option>
                            <option value="Mirganj">Mirganj</option>
                            <option value="Miryalaguda">Miryalaguda</option>
                            <option value="Mirzapur">Mirzapur</option>
                            <option value="Mithapur">Mithapur</option>
                            <option value="Modasa">Modasa</option>
                            <option value="Modinagar">Modinagar</option>
                            <option value="Moga">Moga</option>
                            <option value="Mogalthur">Mogalthur</option>
                            <option value="Mohali">Mohali</option>
                            <option value="Mohania">Mohania</option>
                            <option value="Mokama">Mokama</option>
                            <option value="Mokameh">Mokameh</option>
                            <option value="Mokokchung">Mokokchung</option>
                            <option value="Monoharpur">Monoharpur</option>
                            <option value="Moradabad">Moradabad</option>
                            <option value="Morena">Morena</option>
                            <option value="Morinda">Morinda</option>
                            <option value="Morshi">Morshi</option>
                            <option value="Morvi">Morvi</option>
                            <option value="Motihari">Motihari</option>
                            <option value="Motipur">Motipur</option>
                            <option value="Mount Abu">Mount Abu</option>
                            <option value="Mudalgi">Mudalgi</option>
                            <option value="Mudbidri">Mudbidri</option>
                            <option value="Muddebihal">Muddebihal</option>
                            <option value="Mudhol">Mudhol</option>
                            <option value="Mukatsar">Mukatsar</option>
                            <option value="Mukerian">Mukerian</option>
                            <option value="Mukhed">Mukhed</option>
                            <option value="Muktsar">Muktsar</option>
                            <option value="Mul">Mul</option>
                            <option value="Mulbagal">Mulbagal</option>
                            <option value="Multai">Multai</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Mundargi">Mundargi</option>
                            <option value="Mungeli">Mungeli</option>
                            <option value="Munger">Munger</option>
                            <option value="Muradnagar">Muradnagar</option>
                            <option value="Murliganj">Murliganj</option>
                            <option value="Murshidabad">Murshidabad</option>
                            <option value="Murtijapur">Murtijapur</option>
                            <option value="Murwara">Murwara</option>
                            <option value="Musabani">Musabani</option>
                            <option value="Mussoorie">Mussoorie</option>
                            <option value="Muvattupuzha">Muvattupuzha</option>
                            <option value="Muzaffarnagar">Muzaffarnagar</option>
                            <option value="Muzaffarpur">Muzaffarpur</option>
                            <option value="Mysore">Mysore</option>
                            <option value="Nabadwip">Nabadwip</option>
                            <option value="Nabarangapur">Nabarangapur</option>
                            <option value="Nabha">Nabha</option>
                            <option value="Nadbai">Nadbai</option>
                            <option value="Nadiad">Nadiad</option>
                            <option value="Nagalapuram">Nagalapuram</option>
                            <option value="Nagaon">Nagaon</option>
                            <option value="Nagapattinam">Nagapattinam</option>
                            <option value="Nagar">Nagar</option>
                            <option value="Nagari">Nagari</option>
                            <option value="Nagarkurnool">Nagarkurnool</option>
                            <option value="Nagaur">Nagaur</option>
                            <option value="Nagda">Nagda</option>
                            <option value="Nagercoil">Nagercoil</option>
                            <option value="Nagina">Nagina</option>
                            <option value="Nagla">Nagla</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Nahan">Nahan</option>
                            <option value="Naharlagun">Naharlagun</option>
                            <option value="Naihati">Naihati</option>
                            <option value="Naila Janjgir">Naila Janjgir</option>
                            <option value="Nainital">Nainital</option>
                            <option value="Nainpur">Nainpur</option>
                            <option value="Najibabad">Najibabad</option>
                            <option value="Nakodar">Nakodar</option>
                            <option value="Nakur">Nakur</option>
                            <option value="Nalasopara">Nalasopara</option>
                            <option value="Nalbari">Nalbari</option>
                            <option value="Namagiripettai">Namagiripettai</option>
                            <option value="Namakkal">Namakkal</option>
                            <option value="Nanded-Waghala">Nanded-Waghala</option>
                            <option value="Nandgaon">Nandgaon</option>
                            <option value="Nandivaram-Guduvancheri">Nandivaram-Guduvancheri</option>
                            <option value="Nandura">Nandura</option>
                            <option value="Nandurbar">Nandurbar</option>
                            <option value="Nandyal">Nandyal</option>
                            <option value="Nangal">Nangal</option>
                            <option value="Nanjangud">Nanjangud</option>
                            <option value="Nanjikottai">Nanjikottai</option>
                            <option value="Nanpara">Nanpara</option>
                            <option value="Narasapur">Narasapur</option>
                            <option value="Narasaraopet">Narasaraopet</option>
                            <option value="Naraura">Naraura</option>
                            <option value="Narayanpet">Narayanpet</option>
                            <option value="Nargund">Nargund</option>
                            <option value="Narkatiaganj">Narkatiaganj</option>
                            <option value="Narkhed">Narkhed</option>
                            <option value="Narnaul">Narnaul</option>
                            <option value="Narsinghgarh">Narsinghgarh</option>
                            <option value="Narsipatnam">Narsipatnam</option>
                            <option value="Narwana">Narwana</option>
                            <option value="Nashik">Nashik</option>
                            <option value="Nasirabad">Nasirabad</option>
                            <option value="Natham">Natham</option>
                            <option value="Nathdwara">Nathdwara</option>
                            <option value="Naugachhia">Naugachhia</option>
                            <option value="Naugawan Sadat">Naugawan Sadat</option>
                            <option value="Nautanwa">Nautanwa</option>
                            <option value="Navalgund">Navalgund</option>
                            <option value="Navi Mumbai">Navi Mumbai</option>
                            <option value="Navsari">Navsari</option>
                            <option value="Nawabganj">Nawabganj</option>
                            <option value="Nawada">Nawada</option>
                            <option value="Nawalgarh">Nawalgarh</option>
                            <option value="Nawanshahr">Nawanshahr</option>
                            <option value="Nawapur">Nawapur</option>
                            <option value="Nedumangad">Nedumangad</option>
                            <option value="Neem-Ka-Thana">Neem-Ka-Thana</option>
                            <option value="Neemuch">Neemuch</option>
                            <option value="Nehtaur">Nehtaur</option>
                            <option value="Nelamangala">Nelamangala</option>
                            <option value="Nellikuppam">Nellikuppam</option>
                            <option value="Nellore">Nellore</option>
                            <option value="Nepanagar">Nepanagar</option>
                            <option value="Neyveli">Neyveli</option>
                            <option value="Neyyattinkara">Neyyattinkara</option>
                            <option value="Nidadavole">Nidadavole</option>
                            <option value="Nilanga">Nilanga</option>
                            <option value="Nimbahera">Nimbahera</option>
                            <option value="Nipani">Nipani</option>
                            <option value="Nirmal">Nirmal</option>
                            <option value="Niwai">Niwai</option>
                            <option value="Niwari">Niwari</option>
                            <option value="Nizamabad">Nizamabad</option>
                            <option value="Nohar">Nohar</option>
                            <option value="NOIDA">NOIDA</option>
                            <option value="Nokha">Nokha</option>
                            <option value="Nokha">Nokha</option>
                            <option value="Nongstoin">Nongstoin</option>
                            <option value="Noorpur">Noorpur</option>
                            <option value="North Lakhimpur">North Lakhimpur</option>
                            <option value="Nowgong">Nowgong</option>
                            <option value="Nowrozabad">Nowrozabad</option>
                            <option value="Nuzvid">Nuzvid</option>
                            <option value="O' Valley">O' Valley</option>
                            <option value="Obra">Obra</option>
                            <option value="Oddanchatram">Oddanchatram</option>
                            <option value="Ongole">Ongole</option>
                            <option value="Orai">Orai</option>
                            <option value="Osmanabad">Osmanabad</option>
                            <option value="Ottappalam">Ottappalam</option>
                            <option value="Ozar">Ozar</option>
                            <option value="P.N.Patti">P.N.Patti</option>
                            <option value="Pachora">Pachora</option>
                            <option value="Pachore">Pachore</option>
                            <option value="Pacode">Pacode</option>
                            <option value="Padmanabhapuram">Padmanabhapuram</option>
                            <option value="Padra">Padra</option>
                            <option value="Padrauna">Padrauna</option>
                            <option value="Paithan">Paithan</option>
                            <option value="Pakaur">Pakaur</option>
                            <option value="Palacole">Palacole</option>
                            <option value="Palai">Palai</option>
                            <option value="Palakkad">Palakkad</option>
                            <option value="Palani">Palani</option>
                            <option value="Palanpur">Palanpur</option>
                            <option value="Palasa Kasibugga">Palasa Kasibugga</option>
                            <option value="Palghar">Palghar</option>
                            <option value="Pali">Pali</option>
                            <option value="Palia Kalan">Palia Kalan</option>
                            <option value="Palitana">Palitana</option>
                            <option value="Palladam">Palladam</option>
                            <option value="Pallapatti">Pallapatti</option>
                            <option value="Pallikonda">Pallikonda</option>
                            <option value="Palwal">Palwal</option>
                            <option value="Palwancha">Palwancha</option>
                            <option value="Panagar">Panagar</option>
                            <option value="Panagudi">Panagudi</option>
                            <option value="Panaji">Panaji</option>
                            <option value="Panchkula">Panchkula</option>
                            <option value="Panchla">Panchla</option>
                            <option value="Pandharkaoda">Pandharkaoda</option>
                            <option value="Pandharpur">Pandharpur</option>
                            <option value="Pandhurna">Pandhurna</option>
                            <option value="Pandua">Pandua</option>
                            <option value="Panipat">Panipat</option>
                            <option value="Panna">Panna</option>
                            <option value="Panniyannur">Panniyannur</option>
                            <option value="Panruti">Panruti</option>
                            <option value="Panvel">Panvel</option>
                            <option value="Pappinisseri">Pappinisseri</option>
                            <option value="Paradip">Paradip</option>
                            <option value="Paramakudi">Paramakudi</option>
                            <option value="Parangipettai">Parangipettai</option>
                            <option value="Parasi">Parasi</option>
                            <option value="Paravoor">Paravoor</option>
                            <option value="Parbhani">Parbhani</option>
                            <option value="Pardi">Pardi</option>
                            <option value="Parlakhemundi">Parlakhemundi</option>
                            <option value="Parli">Parli</option>
                            <option value="Parola">Parola</option>
                            <option value="Partur">Partur</option>
                            <option value="Parvathipuram">Parvathipuram</option>
                            <option value="Pasan">Pasan</option>
                            <option value="Paschim Punropara">Paschim Punropara</option>
                            <option value="Pasighat">Pasighat</option>
                            <option value="Patan">Patan</option>
                            <option value="Pathanamthitta">Pathanamthitta</option>
                            <option value="Pathankot">Pathankot</option>
                            <option value="Pathardi">Pathardi</option>
                            <option value="Pathri">Pathri</option>
                            <option value="Patiala">Patiala</option>
                            <option value="Patna">Patna</option>
                            <option value="Patran">Patran</option>
                            <option value="Patratu">Patratu</option>
                            <option value="Pattamundai">Pattamundai</option>
                            <option value="Patti">Patti</option>
                            <option value="Pattukkottai">Pattukkottai</option>
                            <option value="Patur">Patur</option>
                            <option value="Pauni">Pauni</option>
                            <option value="Pauri">Pauri</option>
                            <option value="Pavagada">Pavagada</option>
                            <option value="Payyannur">Payyannur</option>
                            <option value="Pedana">Pedana</option>
                            <option value="Peddapuram">Peddapuram</option>
                            <option value="Pehowa">Pehowa</option>
                            <option value="Pen">Pen</option>
                            <option value="Perambalur">Perambalur</option>
                            <option value="Peravurani">Peravurani</option>
                            <option value="Peringathur">Peringathur</option>
                            <option value="Perinthalmanna">Perinthalmanna</option>
                            <option value="Periyakulam">Periyakulam</option>
                            <option value="Periyasemur">Periyasemur</option>
                            <option value="Pernampattu">Pernampattu</option>
                            <option value="Perumbavoor">Perumbavoor</option>
                            <option value="Petlad">Petlad</option>
                            <option value="Phagwara">Phagwara</option>
                            <option value="Phalodi">Phalodi</option>
                            <option value="Phaltan">Phaltan</option>
                            <option value="Phillaur">Phillaur</option>
                            <option value="Phulabani">Phulabani</option>
                            <option value="Phulera">Phulera</option>
                            <option value="Phulpur">Phulpur</option>
                            <option value="Phusro">Phusro</option>
                            <option value="Pihani">Pihani</option>
                            <option value="Pilani">Pilani</option>
                            <option value="Pilibanga">Pilibanga</option>
                            <option value="Pilibhit">Pilibhit</option>
                            <option value="Pilkhuwa">Pilkhuwa</option>
                            <option value="Pindwara">Pindwara</option>
                            <option value="Pinjore">Pinjore</option>
                            <option value="Pipar City">Pipar City</option>
                            <option value="Pipariya">Pipariya</option>
                            <option value="Piro">Piro</option>
                            <option value="Pithampur">Pithampur</option>
                            <option value="Pithapuram">Pithapuram</option>
                            <option value="Pithoragarh">Pithoragarh</option>
                            <option value="Pollachi">Pollachi</option>
                            <option value="Polur">Polur</option>
                            <option value="Pondicherry">Pondicherry</option>
                            <option value="Pondur">Pondur</option>
                            <option value="Ponnani">Ponnani</option>
                            <option value="Ponneri">Ponneri</option>
                            <option value="Ponnur">Ponnur</option>
                            <option value="Porbandar">Porbandar</option>
                            <option value="Porsa">Porsa</option>
                            <option value="Port Blair">Port Blair</option>
                            <option value="Powayan">Powayan</option>
                            <option value="Prantij">Prantij</option>
                            <option value="Pratapgarh">Pratapgarh</option>
                            <option value="Pratapgarh">Pratapgarh</option>
                            <option value="Prithvipur">Prithvipur</option>
                            <option value="Proddatur">Proddatur</option>
                            <option value="Pudukkottai">Pudukkottai</option>
                            <option value="Pudupattinam">Pudupattinam</option>
                            <option value="Pukhrayan">Pukhrayan</option>
                            <option value="Pulgaon">Pulgaon</option>
                            <option value="Puliyankudi">Puliyankudi</option>
                            <option value="Punalur">Punalur</option>
                            <option value="Punch">Punch</option>
                            <option value="Pune">Pune</option>
                            <option value="Punganur">Punganur</option>
                            <option value="Punjaipugalur">Punjaipugalur</option>
                            <option value="Puranpur">Puranpur</option>
                            <option value="Puri">Puri</option>
                            <option value="Purna">Purna</option>
                            <option value="Purnia">Purnia</option>
                            <option value="Purquazi">Purquazi</option>
                            <option value="Purulia">Purulia</option>
                            <option value="Purwa">Purwa</option>
                            <option value="Pusad">Pusad</option>
                            <option value="Puttur">Puttur</option>
                            <option value="Puttur">Puttur</option>
                            <option value="Qadian">Qadian</option>
                            <option value="Quilandy">Quilandy</option>
                            <option value="Rabkavi Banhatti">Rabkavi Banhatti</option>
                            <option value="Radhanpur">Radhanpur</option>
                            <option value="Rae Bareli">Rae Bareli</option>
                            <option value="Rafiganj">Rafiganj</option>
                            <option value="Raghogarh-Vijaypur">Raghogarh-Vijaypur</option>
                            <option value="Raghunathpur">Raghunathpur</option>
                            <option value="Rahatgarh">Rahatgarh</option>
                            <option value="Rahuri">Rahuri</option>
                            <option value="Raichur">Raichur</option>
                            <option value="Raiganj">Raiganj</option>
                            <option value="Raigarh">Raigarh</option>
                            <option value="Raikot">Raikot</option>
                            <option value="Raipur">Raipur</option>
                            <option value="Rairangpur">Rairangpur</option>
                            <option value="Raisen">Raisen</option>
                            <option value="Raisinghnagar">Raisinghnagar</option>
                            <option value="Rajagangapur">Rajagangapur</option>
                            <option value="Rajahmundry">Rajahmundry</option>
                            <option value="Rajakhera">Rajakhera</option>
                            <option value="Rajaldesar">Rajaldesar</option>
                            <option value="Rajam">Rajam</option>
                            <option value="Rajampet">Rajampet</option>
                            <option value="Rajapalayam">Rajapalayam</option>
                            <option value="Rajauri">Rajauri</option>
                            <option value="Rajgarh">Rajgarh</option>
                            <option value="Rajgarh (Alwar)">Rajgarh (Alwar)</option>
                            <option value="Rajgarh (Churu)">Rajgarh (Churu)</option>
                            <option value="Rajgir">Rajgir</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Rajnandgaon">Rajnandgaon</option>
                            <option value="Rajpipla">Rajpipla</option>
                            <option value="Rajpura">Rajpura</option>
                            <option value="Rajsamand">Rajsamand</option>>
                            <option value="Rajura">Rajura</option>
                            <option value="Ramachandrapuram">Ramachandrapuram</option>
                            <option value="Ramagundam">Ramagundam</option>
                            <option value="Ramanagaram">Ramanagaram</option>
                            <option value="Ramanathapuram">Ramanathapuram</option>
                            <option value="Ramdurg">Ramdurg</option>
                            <option value="Rameshwaram">Rameshwaram</option>
                            <option value="Ramganj Mandi">Ramganj Mandi</option>
                            <option value="Ramnagar">Ramnagar</option>
                            <option value="Ramngarh">Ramngarh</option>
                            <option value="Ramngarh">Ramngarh</option>
                            <option value="Rampur">Rampur</option>
                            <option value="Rampur Maniharan">Rampur Maniharan</option>
                            <option value="Rampura Phul">Rampura Phul</option>
                            <option value="Rampurhat">Rampurhat</option>
                            <option value="Ramtek">Ramtek</option>
                            <option value="Ranaghat">Ranaghat</option>
                            <option value="Ranavav">Ranavav</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Rangia">Rangia</option>
                            <option value="Rania">Rania</option>
                            <option value="Ranibennur">Ranibennur</option>
                            <option value="Rapar">Rapar</option>
                            <option value="Rasipuram">Rasipuram</option>
                            <option value="Rasra">Rasra</option>
                            <option value="Ratangarh">Ratangarh</option>
                            <option value="Rath">Rath</option>
                            <option value="Ratia">Ratia</option>
                            <option value="Ratlam">Ratlam</option>
                            <option value="Ratnagiri">Ratnagiri</option>
                            <option value="Rau">Rau</option>
                            <option value="Raurkela">Raurkela</option>
                            <option value="Raver">Raver</option>
                            <option value="Rawatbhata">Rawatbhata</option>
                            <option value="Rawatsar">Rawatsar</option>
                            <option value="Raxaul Bazar">Raxaul Bazar</option>
                            <option value="Rayachoti">Rayachoti</option>
                            <option value="Rayadurg">Rayadurg</option>
                            <option value="Rayagada">Rayagada</option>
                            <option value="Reengus">Reengus</option>
                            <option value="Rehli">Rehli</option>
                            <option value="Renigunta">Renigunta</option>
                            <option value="Renukoot">Renukoot</option>
                            <option value="Reoti">Reoti</option>
                            <option value="Repalle">Repalle</option>
                            <option value="Revelganj">Revelganj</option>
                            <option value="Rewa">Rewa</option>
                            <option value="Rewari">Rewari</option>
                            <option value="Rishikesh">Rishikesh</option>
                            <option value="Risod">Risod</option>
                            <option value="Robertsganj">Robertsganj</option>
                            <option value="Robertson Pet">Robertson Pet</option>
                            <option value="Rohtak">Rohtak</option>
                            <option value="Ron">Ron</option>
                            <option value="Roorkee">Roorkee</option>
                            <option value="Rosera">Rosera</option>
                            <option value="Rudauli">Rudauli</option>
                            <option value="Rudrapur">Rudrapur</option>
                            <option value="Rupnagar">Rupnagar</option>
                            <option value="Sabalgarh">Sabalgarh</option>
                            <option value="Sadabad">Sadabad</option>
                            <option value="Sadalgi">Sadalgi</option>
                            <option value="Sadasivpet">Sadasivpet</option>
                            <option value="Sadri">Sadri</option>
                            <option value="Sadulshahar">Sadulshahar</option>
                            <option value="Safidon">Safidon</option>
                            <option value="Safipur">Safipur</option>
                            <option value="Sagar">Sagar</option>
                            <option value="Sagwara">Sagwara</option>
                            <option value="Saharanpur">Saharanpur</option>
                            <option value="Saharsa">Saharsa</option>
                            <option value="Sahaspur">Sahaspur</option>
                            <option value="Sahaswan">Sahaswan</option>
                            <option value="Sahawar">Sahawar</option>
                            <option value="Sahibganj">Sahibganj</option>
                            <option value="Sahjanwa">Sahjanwa</option>
                            <option value="Saidpur">Saidpur</option>
                            <option value="Saiha">Saiha</option>
                            <option value="Sailu">Sailu</option>
                            <option value="Sainthia">Sainthia</option>
                            <option value="Sakleshpur">Sakleshpur</option>
                            <option value="Sakti">Sakti</option>
                            <option value="Salaya">Salaya</option>
                            <option value="Salem">Salem</option>
                            <option value="Salur">Salur</option>
                            <option value="Samalkha">Samalkha</option>
                            <option value="Samalkot">Samalkot</option>
                            <option value="Samana">Samana</option>
                            <option value="Samastipur">Samastipur</option>
                            <option value="Sambalpur">Sambalpur</option>
                            <option value="Sambhal">Sambhal</option>
                            <option value="Sambhar">Sambhar</option>
                            <option value="Samdhan">Samdhan</option>
                            <option value="Samthar">Samthar</option>
                            <option value="Sanand">Sanand</option>
                            <option value="Sanawad">Sanawad</option>
                            <option value="Sanchore">Sanchore</option>
                            <option value="Sandi">Sandi</option>
                            <option value="Sandila">Sandila</option>
                            <option value="Sandur">Sandur</option>
                            <option value="Sangamner">Sangamner</option>
                            <option value="Sangareddy">Sangareddy</option>
                            <option value="Sangaria">Sangaria</option>
                            <option value="Sangli">Sangli</option>
                            <option value="Sangole">Sangole</option>
                            <option value="Sangrur">Sangrur</option>
                            <option value="Sankarankoil">Sankarankoil</option>
                            <option value="Sankari">Sankari</option>
                            <option value="Sankeshwar">Sankeshwar</option>
                            <option value="Santipur">Santipur</option>
                            <option value="Sarangpur">Sarangpur</option>
                            <option value="Sardarshahar">Sardarshahar</option>
                            <option value="Sardhana">Sardhana</option>
                            <option value="Sarni">Sarni</option>
                            <option value="Sasaram">Sasaram</option>
                            <option value="Sasvad">Sasvad</option>
                            <option value="Satana">Satana</option>
                            <option value="Satara">Satara</option>
                            <option value="Sathyamangalam">Sathyamangalam</option>
                            <option value="Satna">Satna</option>
                            <option value="Sattenapalle">Sattenapalle</option>
                            <option value="Sattur">Sattur</option>
                            <option value="Saunda">Saunda</option>
                            <option value="Saundatti-Yellamma">Saundatti-Yellamma</option>
                            <option value="Sausar">Sausar</option>
                            <option value="Savanur">Savanur</option>
                            <option value="Savarkundla">Savarkundla</option>
                            <option value="Savner">Savner</option>
                            <option value="Sawai Madhopur">Sawai Madhopur</option>
                            <option value="Sawantwadi">Sawantwadi</option>
                            <option value="Sedam">Sedam</option>
                            <option value="Sehore">Sehore</option>
                            <option value="Sendhwa">Sendhwa</option>
                            <option value="Seohara">Seohara</option>
                            <option value="Seoni">Seoni</option>
                            <option value="Seoni-Malwa">Seoni-Malwa</option>>
                            <option value="Shahade">Shahade</option>
                            <option value="Shahbad">Shahbad</option>
                            <option value="Shahdol">Shahdol</option>
                            <option value="Shahganj">Shahganj</option>
                            <option value="Shahjahanpur">Shahjahanpur</option>
                            <option value="Shahpur">Shahpur</option>
                            <option value="Shahpura">Shahpura</option>
                            <option value="Shajapur">Shajapur</option>
                            <option value="Shamgarh">Shamgarh</option>
                            <option value="Shamli">Shamli</option>
                            <option value="Shamsabad">Shamsabad</option>
                            <option value="Shegaon">Shegaon</option>
                            <option Shegaon="Sheikhpura">Sheikhpura</option>
                            <option value="Shendurjana">Shendurjana</option>
                            <option value="Shenkottai">Shenkottai</option>
                            <option value="Sheoganj">Sheoganj</option>
                            <option value="Sheohar">Sheohar</option>
                            <option value="Sheopur">Sheopur</option>
                            <option value="Sherghati">Sherghati</option>
                            <option value="Sherkot">Sherkot</option>
                            <option value="Shiggaon">Shiggaon</option>
                            <option value="Shikapur">Shikapur</option>
                            <option value="Shikarpur">Shikarpur</option>
                            <option value="Shikohabad">Shikohabad</option>
                            <option value="Shillong">Shillong</option>
                            <option value="Shimla">Shimla</option>
                            <option value="Shimoga">Shimoga</option>
                            <option value="Shirdi">Shirdi</option>
                            <option value="Shirpur-Warwade">Shirpur-Warwade</option>
                            <option value="Shirur">Shirur</option>
                            <option value="Shishgarh">Shishgarh</option>
                            <option value="Shivpuri">Shivpuri</option>
                            <option value="Sholavandan">Sholavandan</option>
                            <option value="Sholingur">Sholingur</option>
                            <option value="Shorapur">Shorapur</option>
                            <option value="Shrigonda">Shrigonda</option>
                            <option value="Shrirampur">Shrirampur</option>
                            <option value="Shrirangapattana">Shrirangapattana</option>
                            <option value="Shujalpur">Shujalpur</option>
                            <option value="Siana">Siana</option>
                            <option value="Sibsagar">Sibsagar</option>
                            <option value="Siddipet">Siddipet</option>
                            <option value="Sidhi">Sidhi</option>
                            <option value="Sidhpur">Sidhpur</option>
                            <option value="Sidlaghatta">Sidlaghatta</option>
                            <option value="Sihor">Sihor</option>
                            <option value="Sihora">Sihora</option>
                            <option value="Sikanderpur">Sikanderpur</option>
                            <option value="Sikandra Rao">Sikandra Rao</option>
                            <option value="Sikandrabad">Sikandrabad</option>
                            <option value="Sikar">Sikar</option>
                            <option value="Silao">Silao</option>
                            <option value="Silapathar">Silapathar</option>
                            <option value="Silchar">Silchar</option>
                            <option value="Siliguri">Siliguri</option>
                            <option value="Sillod">Sillod</option>
                            <option value="Silvassa">Silvassa</option>
                            <option value="Simdega">Simdega</option>
                            <option value="Sindgi">Sindgi</option>
                            <option value="Sindhnur">Sindhnur</option>
                            <option value="Singapur">Singapur</option>
                            <option value="Singrauli">Singrauli</option>
                            <option value="Sinnar">Sinnar</option>
                            <option value="Sira">Sira</option>
                            <option value="Sircilla">Sircilla</option>
                            <option value="Sirhind Fatehgarh Sahib">Sirhind Fatehgarh Sahib</option>
                            <option value="Sirkali">Sirkali</option>
                            <option value="Sirohi">Sirohi</option>
                            <option value="Sironj">Sironj</option>
                            <option value="Sirsa">Sirsa</option>
                            <option value="Sirsaganj">Sirsaganj</option>
                            <option value="Sirsi">Sirsi</option>
                            <option value="Siruguppa">Siruguppa</option>
                            <option value="Sitamarhi">Sitamarhi</option>
                            <option value="Sitapur">Sitapur</option>
                            <option value="Sitarganj">Sitarganj</option>
                            <option value="Sivaganga">Sivaganga</option>
                            <option value="Sivagiri">Sivagiri</option>
                            <option value="Sivakasi">Sivakasi</option>
                            <option value="Siwan">Siwan</option>
                            <option value="Sohagpur">Sohagpur</option>
                            <option value="Sohna">Sohna</option>
                            <option value="Sojat">Sojat</option>
                            <option value="Solan">Solan</option>
                            <option value="Solapur">Solapur</option>
                            <option value="Sonamukhi">Sonamukhi</option>
                            <option value="Sonepur">Sonepur</option>
                            <option value="Songadh">Songadh</option>
                            <option value="Sonipat">Sonipat</option>
                            <option value="Sopore">Sopore</option>
                            <option value="Soro">Soro</option>
                            <option value="Soron">Soron</option>
                            <option value="Soyagaon">Soyagaon</option>
                            <option value="Sri Madhopur">Sri Madhopur</option>
                            <option value="Srikakulam">Srikakulam</option>
                            <option value="Srikalahasti">Srikalahasti</option>
                            <option value="Srinagar">Srinagar</option>
                            <option value="Srinivaspur">Srinivaspur</option>
                            <option value="Srirampore">Srirampore</option>
                            <option value="Srivilliputhur">Srivilliputhur</option>
                            <option value="Suar">Suar</option>
                            <option value="Sugauli">Sugauli</option>
                            <option value="Sujangarh">Sujangarh</option>
                            <option value="Sujanpur">Sujanpur</option>
                            <option value="Sultanganj">Sultanganj</option>
                            <option value="Sultanpur">Sultanpur</option>
                            <option value="Sumerpur">Sumerpur</option>
                            <option value="Sunabeda">Sunabeda</option>
                            <option value="Sunam">Sunam</option>
                            <option value="Sundargarh">Sundargarh</option>
                            <option value="Sundarnagar">Sundarnagar</option>
                            <option value="Supaul">Supaul</option>
                            <option value="Surandai">Surandai</option>
                            <option value="Surat">Surat</option>
                            <option value="Suratgarh">Suratgarh</option>
                            <option value="Suri">Suri</option>
                            <option value="Suriyampalayam">Suriyampalayam</option>
                            <option value="Suryapet">Suryapet</option>
                            <option value="Tadepalligudem">Tadepalligudem</option>
                            <option value="Tadpatri">Tadpatri</option>
                            <option value="Taki">Taki</option>
                            <option value="Talaja">Talaja</option>
                            <option value="Talcher">Talcher</option>
                            <option value="Talegaon">Talegaon Dabhade</option>
                            <option value="Talikota">Talikota</option>
                            <option value="Taliparamba">Taliparamba</option>
                            <option value="Talode">Talode</option>
                            <option value="Talwara">Talwara</option>
                            <option value="Tamluk">Tamluk</option>
                            <option value="Tanda">Tanda</option>
                            <option value="Tandur">Tandur</option>
                            <option value="Tanuku">Tanuku</option>
                            <option value="Tarakeswar">Tarakeswar</option>
                            <option value="Tarana">Tarana</option>
                            <option value="Taranagar">Taranagar</option>
                            <option value="Taraori">Taraori</option>
                            <option value="Tarikere">Tarikere</option>
                            <option value="Tarn Taran">Tarn Taran</option>
                            <option value="Tasgaon">Tasgaon</option>
                            <option value="Tehri">Tehri</option>
                            <option value="Tekkalakota">Tekkalakota</option>
                            <option value="Tenali">Tenali</option>
                            <option value="Tenkasi">Tenkasi</option>
                            <option value="Tenu Dam-cum- Kathhara">Tenu Dam-cum- Kathhara</option>
                            <option value="Terdal">Terdal</option>
                            <option value="Tetri Bazar">Tetri Bazar</option>
                            <option value="Tezpur">Tezpur</option>
                            <option value="Thakurdwara">Thakurdwara</option>
                            <option value="Thammampatti">Thammampatti</option>
                            <option value="Thana Bhawan">Thana Bhawan</option>
                            <option value="Thanesar">Thanesar</option>
                            <option value="Thangadh">Thangadh</option>
                            <option value="Thanjavur">Thanjavur</option>
                            <option value="Tharad">Tharad</option>
                            <option value="Tharamangalam">Tharamangalam</option>
                            <option value="Tharangambadi">Tharangambadi</option>
                            <option value="Theni Allinagaram">Theni Allinagaram</option>
                            <option value="Thirumangalam">Thirumangalam</option>
                            <option value="Thirunindravur">Thirunindravur</option>
                            <option value="Thiruparappu">Thiruparappu</option>
                            <option value="Thirupuvanam">Thirupuvanam</option>
                            <option value="Thiruthuraipoondi">Thiruthuraipoondi</option>
                            <option value="Thiruvalla">Thiruvalla</option>
                            <option value="Thiruvallur">Thiruvallur</option>
                            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                            <option value="Thiruvarur">Thiruvarur</option>
                            <option value="Thodupuzha">Thodupuzha</option>
                            <option value="Thoothukudi">Thoothukudi</option>
                            <option value="Thoubal">Thoubal</option>
                            <option value="Thrissur">Thrissur</option>
                            <option value="Thuraiyur">Thuraiyur</option>
                            <option value="Tikamgarh">Tikamgarh</option>
                            <option value="Tilda Newra">Tilda Newra</option>
                            <option value="14Tilhar19">Tilhar</option>
                            <option value="Tindivanam">Tindivanam</option>
                            <option value="Tinsukia">Tinsukia</option>
                            <option value="Tiptur">Tiptur</option>
                            <option value="Tirora">Tirora</option>
                            <option value="Tiruchendur">Tiruchendur</option>
                            <option value="Tiruchengode">Tiruchengode</option>
                            <option value="Tiruchirappalli">Tiruchirappalli</option>
                            <option value="Tirukalukundram">Tirukalukundram</option>
                            <option value="Tirukkoyilur">Tirukkoyilur</option>
                            <option value="Tirunelveli">Tirunelveli</option>
                            <option value="Tirupathur">Tirupathur</option>
                            <option value="Tirupati">Tirupati</option>
                            <option value="Tiruppur">Tiruppur</option>
                            <option value="Tirur">Tirur</option>
                            <option value="Tiruttani">Tiruttani</option>
                            <option value="Tiruvannamalai">Tiruvannamalai</option>
                            <option value="Tiruvethipuram">Tiruvethipuram</option>
                            <option value="Tirwaganj">Tirwaganj</option>
                            <option value="Titlagarh">Titlagarh</option>
                            <option value="Tittakudi">Tittakudi</option>
                            <option value="Todabhim">Todabhim</option>
                            <option value="Todaraisingh">Todaraisingh</option>
                            <option value="Tohana">Tohana</option>
                            <option value="Tonk">Tonk</option>
                            <option value="Tuensang">Tuensang</option>
                            <option value="Tuljapur">Tuljapur</option>
                            <option value="Tulsipur">Tulsipur</option>
                            <option value="Tumkur">Tumkur</option>
                            <option value="Tumsar">Tumsar</option>
                            <option value="Tundla">Tundla</option>
                            <option value="Tuni">Tuni</option>
                            <option value="Tura">Tura</option>
                            <option value="Uchgaon">Uchgaon</option>
                            <option value="Udaipur">Udaipur</option>
                            <option value="Udaipur">Udaipur</option>
                            <option value="Udaipurwati">Udaipurwati</option>
                            <option value="Udgir">Udgir</option>
                            <option value="Udhagamandalam">Udhagamandalam</option>
                            <option value="Udhampur">Udhampur</option>
                            <option value="Udumalaipettai">Udumalaipettai</option>
                            <option value="Udupi">Udupi</option>
                            <option value="Ujhani">Ujhani</option>
                            <option value="Ujjain">Ujjain</option>
                            <option value="Umarga">Umarga</option>
                            <option value="Umaria">Umaria</option>
                            <option value="Umarkhed">Umarkhed</option>
                            <option value="Umarkote">Umarkote</option>
                            <option value="Umbergaon">Umbergaon</option>
                            <option value="Umred">Umred</option>
                            <option value="Umreth">Umreth</option>
                            <option value="Una">Una</option>
                            <option value="Unjha">Unjha</option>
                            <option value="Unnamalaikadai">Unnamalaikadai</option>
                            <option value="Unnao">Unnao</option>
                            <option value="Upleta">Upleta</option>
                            <option value="Uran">Uran</option>
                            <option value="Uran Islampur">Uran Islampur</option>
                            <option value="Uravakonda">Uravakonda</option>
                            <option value="Urmar Tanda">Urmar Tanda</option>
                            <option value="Usilampatti">Usilampatti</option>
                            <option value="Uthamapalayam">Uthamapalayam</option>
                            <option value="Uthiramerur">Uthiramerur</option>
                            <option value="Utraula">Utraula</option>
                            <option value="Vadakara">Vadakara</option>
                            <option value="Vadakkuvalliyur">Vadakkuvalliyur</option>
                            <option value="Vadalur">Vadalur</option>
                            <option value="Vadgaon Kasba">Vadgaon Kasba</option>
                            <option value="Vadipatti">Vadipatti</option>
                            <option value="Vadnagar">Vadnagar</option>
                            <option value="Vadodara">Vadodara</option>
                            <option value="Vaijapur">Vaijapur</option>
                            <option value="Vaikom">Vaikom</option>
                            <option value="Valparai">Valparai</option>
                            <option value="Valsad">Valsad</option>
                            <option value="Vandavasi">Vandavasi</option>
                            <option value="Vaniyambadi">Vaniyambadi</option>
                            <option value="Vapi">Vapi</option>
                            <option value="Varanasi">Varanasi</option>
                            <option value="Varkala">Varkala</option>
                            <option value="Vasai">Vasai</option>
                            <option value="Vedaranyam">Vedaranyam</option>
                            <option value="Vellakoil">Vellakoil</option>
                            <option value="Vellore">Vellore</option>
                            <option value="Venkatagiri">Venkatagiri</option>
                            <option value="Veraval">Veraval</option>
                            <option value="Vicarabad">Vicarabad</option>
                            <option value="Vidisha">Vidisha</option>
                            <option value="Vijainagar">Vijainagar</option>
                            <option value="Vijapur">Vijapur</option>
                            <option value="Vijayapura">Vijayapura</option>
                            <option value="Vijayawada">Vijayawada</option>
                            <option value="Vikramasingapuram">Vikramasingapuram</option>
                            <option value="Viluppuram">Viluppuram</option>
                            <option value="Vinukonda">Vinukonda</option>
                            <option value="Viramgam">Viramgam</option>
                            <option value="Virar">Virar</option>
                            <option value="Virudhachalam">Virudhachalam</option>
                            <option value="Virudhunagar">Virudhunagar</option>
                            <option value="Visakhapatnam">Visakhapatnam</option>
                            <option value="Visnagar">Visnagar</option>
                            <option value="Viswanatham">Viswanatham</option>
                            <option value="Vita">Vita</option>
                            <option value="Vizianagaram">Vizianagaram</option>
                            <option value="Vrindavan">Vrindavan</option>
                            <option value="Vyara">Vyara</option>
                            <option value="Wadgaon">Wadgaon Road</option>
                            <option value="Wadhwan">Wadhwan</option>
                            <option value="Wadi">Wadi</option>
                            <option value="Wai">Wai</option>
                            <option value="Wanaparthy">Wanaparthy</option>
                            <option value="Wani">Wani</option>
                            <option value="Wankaner">Wankaner</option>
                            <option value="Wara Seoni">Wara Seoni</option>
                            <option value="Warangal">Warangal</option>
                            <option value="Wardha">Wardha</option>
                            <option value="Warhapur">Warhapur</option>
                            <option value="Warisaliganj">Warisaliganj</option>
                            <option value="Warora">Warora</option>
                            <option value="Warud">Warud</option>
                            <option value="Washim">Washim</option>
                            <option value="Wokha">Wokha</option>
                            <option value="Yadgir">Yadgir</option>
                            <option value="Yamunanagar">Yamunanagar</option>
                            <option value="Yanam">Yanam</option>
                            <option value="Yavatmal">Yavatmal</option>
                            <option value="Yawal">Yawal</option>
                            <option value="Yellandu">Yellandu</option>
                            <option value="Yemmiganur">Yemmiganur</option>
                            <option value="Yerraguntla">Yerraguntla</option>
                            <option value="Yevla">Yevla</option>
                            <option value="Zahirabad">Zahirabad</option>
                            <option value="Zaidpur">Zaidpur</option>
                            <option value="Zamania">Zamania</option>
                            <option value="Zira">Zira</option>
                            <option value="Zirakpur">Zirakpur</option>
                            <option value="Zunheboto">Zunheboto</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 inputGroupContainer">
                        <label for="ReCaptcha">Recaptcha:</label>
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                </div>


                <div class="form-group">
                    <button class="btn btn-primary">Download</button>
                    <input type="button" style="    border-radius: 3em;box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08), 0 3px 16px rgba(0, 0, 0, 0.02);
    background-color: var(--brand-color);text-transform: uppercase;color: #fff;border: none;padding: 1em 3em;margin-top: 2em;" name="cancel" value="Cancel" class="btn btn-primary" onclick="javascript:window.location.href='https://omaxe.com/fixed-deposit/downloads'">
{{--                    <a href="{{url('/fixed-deposit/downloads')}}"><button class="btn btn-primary">Cancel</button></a>--}}
                </div>

            {!! Form::close() !!}
        </div>


    </div>
</section>

<!--==============================================================
Footer
==================================================================-->
<footer class="footer" id="footer">
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

<script src="/fd/js/vendor/intlTelInput.min.js"></script>

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
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>


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


