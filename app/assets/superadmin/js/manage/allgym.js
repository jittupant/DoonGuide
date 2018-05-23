$("#frmAddGym").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
   
    $.ajax({
        url: appGetSecureURL('/doonguide/app/api/gym/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error === 1) {
                $("#frmAddGym")[0].reset();
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "success",
                    timeout: 1000
                });
            } else if (res.error === 0) {
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "danger",
                    timeout: 1000
                });
            }
        }
    });
});
//var allgym_table = $('#tblallgym').DataTable({
//
//    "processing": true,
//    "serverSide": true,
//    "order": [],
//    "ajax": {
//        url: appGetSecureURL('/doonguide/app/api/gym/'),
//        type: "GET"
//    },
//    "columnDefs": [
//        {
//            "targets": [0, 3, 4],
//            "orderable": true
//        }
//    ]
//});