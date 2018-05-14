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
        url: appGetSecureURL('/doonguide/app/api/login/'),
        type: 'get',
        dataType: "json",
        data: {username: username, password: password,Type:"SUPERADMIN"},
        success: function (user) {
            console.log(user);
            window.location = 'superadmin/Home';

        }
        
    });

}



