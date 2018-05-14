function appGetHost() {

    return window.location.hostname;
}
function appGetSecureURL(apiRelativeURL) {

    return 'http://' + appGetHost() + apiRelativeURL;
}

$(document).ready(function () {
    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/getcountryname/'),
        type: 'GET',
        dataType: "json",
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                $.each(res.CountryName, function (index, item) {
                    $('.CountryID').append($('<option>', {
                        value: item.countryID,
                        text: item.countryName
                    }));
                    
                });

            } else {
                noty({
                    text: "<strong>Please Add Country First</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});
function GetState(elem){
    var CountryId = elem.value;
    $(".StateID option").remove();
    //$(".StateID").empty();
      $.ajax({
        url: appGetSecureURL('/doonguide/app/api/getstatename/'),
        type: 'GET',
        dataType: "json",
        data:{CountryId:CountryId},
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                $.each(res.StateName, function (index, item) {
                    $('.StateID').append($('<option>', {
                        value: item.stateID,
                        text: item.stateName
                    }));
                    
                });

            } else {
                noty({
                    text: "<strong>Please Add State First</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
    
    
    
    
}
function GetCity(elem){
    var StateId = elem.value;
    $(".CityID option").remove();
  
      $.ajax({
        url: appGetSecureURL('/doonguide/app/api/getcityname/'),
        type: 'GET',
        dataType: "json",
        data:{StateId:StateId},
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            console.log(res);
            if (res.error == 1) {
                $.each(res.CityName, function (index, item) {
                    $('.CityID').append($('<option>', {
                        value: item.cityID,
                        text: item.cityName
                    }));
                    
                });

            } else {
                noty({
                    text: "<strong>Please Add State First</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
    
    
    
    
}

$('.selectddl').select2({
    placeholder: 'Select an option'
});