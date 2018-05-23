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




function GetState(elem) {
    var CountryId = elem.value;
    $(".StateID option").remove();
    //$(".StateID").empty();
    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/getstatename/'),
        type: 'GET',
        dataType: "json",
        data: {CountryId: CountryId},
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



function GetCity(elem) {
    var StateId = elem.value;
    $(".CityID option").remove();

    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/getcityname/'),
        type: 'GET',
        dataType: "json",
        data: {StateId: StateId},
        jsonpCallback: 'jsonCallback',
        success: function (res) {

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

$(document).ready(function () {
    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/locality/'),
        type: 'GET',
        dataType: "json",
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                $.each(res.LocalityName, function (index, item) {
                    $('.LocalityID').append($('<option>', {
                        value: item.DbKey,
                        text: item.Locality
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


$(document).on('ready', function () {
    $(".imageupload").fileinput();
//    $(".imageupload").fileinput({
//        showUpload: false,
//        dropZoneEnabled: false,
//        maxFileCount: 10,
//        mainClass: "input-group-lg"
//    });
});
$(document).ready(function () {
   
    $.typeahead({
        input: '.js-typeahead-french_v1',
        minLength: 0,
        maxItem: 15,
        order: "asc",
        hint: true,
        accent: true,
        searchOnFocus: true,
        backdrop: {
            "background-color": "#3879d9",
            "opacity": "0.1",
            "filter": "alpha(opacity=10)"
        },
        source: {
            ab: appGetSecureURL('/doonguide/app/api/onlycityname/')
        },
        debug: true
    });
   
});

