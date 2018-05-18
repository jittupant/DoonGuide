function appGetHost() {
  
    return window.location.hostname;
}
function appGetSecureURL(apiRelativeURL) {
    
    return 'http://' + appGetHost() + apiRelativeURL;
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