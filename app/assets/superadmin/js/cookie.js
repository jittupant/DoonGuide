var COOKIE_EXPIRES_IN_A_YEAR = 31536E3;

function cookieWrite(a, c, e) {
    a = [appEnvironmentPrefix, a, "=", JSON.stringify(c), "; domain=", window.location.host.toString(), "; path=/;"].join("");
    e && (c = new Date, e = c.getTime() + 1E3 * e, c.setTime(e), a = a + " expires=" + c.toGMTString() + ";");
    document.cookie = a
}

function cookieRead(a) {
    if (a = document.cookie.match(new RegExp(appEnvironmentPrefix + a + "=([^;]+)"))) json = decodeURIComponent(a[1]), a = jQuery.parseJSON(json);
    
    return a
}

function cookieDelete(a) {
    document.cookie = [appEnvironmentPrefix, a, "=; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=/; domain=.", window.location.host.toString()].join("")
}