function showTD(scheme)
{
    if(scheme=='A')
    {
        document.getElementById('nonCum').style.display = "block";
        document.getElementById('Cum').style.display = "none";
    }
    if(scheme=='B')
    {
        document.getElementById('nonCum').style.display = "none";
        document.getElementById('Cum').style.display = "block";
    }

}



function CalculateFD()
{

    var emsg = '';
    var smsg = '';
    var depositAmount = parseFloat($("#depositAmount").val());
    var depositScheme = $("#depositScheme").val();

    if(depositScheme=="")
    {
        emsg = '* Please Select Type of scheme';

    }
    else if(depositScheme=="A")
    {
        if($("#schemeAPeriod").val()=="")
        {
            emsg = '* Please Select Period of Deposit';
        }
    }
    else(depositScheme=="B")
    {
        if($("#schemeBPeriod").val()=="")
        {
            emsg = '* Please Select Period of Deposit';
        }
    }
    if(depositScheme!=0 && $("#schemeAPeriod").val()!=0 || $("#schemeBPeriod").val()!=0)
    {

        if(depositScheme=="A")
        {
            smsg = 'FD Maturity Calculator = NON CUMULATIVE SCHEME';
            var schemePeriod = $("#schemeAPeriod").val().split("|");
            var TotalInterest = parseFloat(schemePeriod[2])*((depositAmount * Math.pow((1+((parseFloat(schemePeriod[0])/100)/12)),(12*(3/12))))-depositAmount);
            var TotalMaturity = TotalInterest+depositAmount;
            var EffectiveYield = (TotalInterest/depositAmount*100)/parseFloat(schemePeriod[1]) ;
        }
        else if(depositScheme=="B")
        {
            smsg = 'FD Maturity Calculator =  CUMULATIVE SCHEME';
            var schemePeriod = $("#schemeBPeriod").val().split("|");
            var TotalMaturity = depositAmount * Math.pow((1+((parseFloat(schemePeriod[0])/100)/12)),(12*parseFloat(schemePeriod[1])));
            var TotalInterest = TotalMaturity-depositAmount;
            var EffectiveYield = (TotalInterest/depositAmount*100)/parseFloat(schemePeriod[1]) ;
        }

        TotalInterest = Math.round(TotalInterest);
        TotalMaturity = Math.round(TotalMaturity);
        EffectiveYield = EffectiveYield.toFixed(2);
        $("#totalInterest1").val(TotalInterest);
        $("#totalMaturity1").val(TotalMaturity);
        $("#effectiveYield1").val(EffectiveYield+'%');


    }
    // document.getElementById('emsg').innerHTML= emsg;

    if (emsg !=0){
        alert(emsg);
    }


    // document.getElementById('smsg').innerHTML= smsg;
}