
$("#frmLocality").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/locality'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmLocality")[0].reset();
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "success",
                    timeout: 1000,
                });
                
            } else if (res.error == 0) {
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});



 Locality_table = $('#tblalllocality').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/doonguide/app/api/getlocalityall/'),
        type: "GET"
    },
    "columnDefs": [
        {
            
            "orderable": true,
        },
    ],
});


function LocalityDelete(DbKey){
   
      $.ajax({
        url: appGetSecureURL('/doonguide/app/api/deletelocality/'),
        type: 'POST',
        dataType: "json",
        data:{DbKey:DbKey},
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                noty({
                    text: res.msg,
                    type: "success",
                    timeout: 1000,
                });
                 Locality_table.ajax.reload();
               
            } else {
                noty({
                    text: res.msg,
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
  
}


