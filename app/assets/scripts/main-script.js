function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function checkConfirm(){
    if ($('#txtRPassword').val() != $('#txtRCPassword').val()) {
        
            $("#confirmpass").html('<i class="fa fa-times" style="color:#66676b; position: absolute; right: 90px; font-size: 16px; bottom: 54px;">&nbsp;&nbsp;Password And Confirm Password Dint Match</i>');

        }else if ($('#txtRPassword').val() === $('#txtRCPassword').val()) {
        
            $("#confirmpass").html('<i class="fa fa-check" style="color:#66676b; position: absolute; left: 16px; font-size: 16px; bottom: 54px;">&nbsp;&nbsp;Password Matched</i>'); 

    }
}

