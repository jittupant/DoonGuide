function appGetHost() {
  
    return window.location.hostname;
}
function appGetSecureURL(apiRelativeURL) {
    
    return 'http://' + appGetHost() + apiRelativeURL;
}
