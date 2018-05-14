var COOKIE_EXPIRES_IN_TWO_WEEKS = 60 * 60 * 24 * 14;

$("#frmlogin").submit(function (e) {
    e.preventDefault();

    var username = $('#txtUsername').val();
    var password = $('#txtPassword').val();

    loginSetRememberMeCookieIfChecked();

    // Create a new instance of loginFromLoginPage which is passed into doLogin
  
    authLoginUser(username, password);


});


function loginSetRememberMeCookieIfChecked() {
    if ($("#rememberMeCheckbox").prop('checked')) {
        // Remember Me will expire after two weeks
        cookieWrite("loginRememberMe", true, COOKIE_EXPIRES_IN_TWO_WEEKS);
    }
}


function authLoginUser(username, password) {

    var cookieExpire = 0;
    if (cookieRead("loginRememberMe"))
        cookieExpire = COOKIE_EXPIRES_IN_TWO_WEEKS;
    else
        cookieExpire = 0;

    $.ajax({
        url: appGetSecureURL('/sms/app/api/login/'),
        type: 'GET',
        data: {AUTH_EXPIRE: cookieExpire, reqtype: 'authlogin'},
        dataType: "json",
        jsonpCallback: 'jsonCallback',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', loginMakeBasicAuth(username, password));
        },
        success: function (user) {
            console.log(user);
            window.location = user.home;

        },
        error: function (xhr, ajaxOptions, thrownError) {

            $(".form-title").after('<div class="alert fade in alert-danger"> <i class="icon-remove close" data-dismiss="alert"></i>' + xhr.responseText + ' </div>');
            cookieDelete("loginRememberMe");
        }
    });
}

function loginMakeBasicAuth(user, password) {
    var tok = user + ':' + password;
    var hash = base64.encode(tok);
    return "Basic " + hash;
}



