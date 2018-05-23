<?php

function handle_default_route(&$variables) {
    header("HTTP/1.0 404 Not Found");
    $variables['content'] = render_template("pages", "404");
    print render_template("templates", "html", $variables);
}

function get_scriptfiles(&$variables) {
    $env_prefix = getenv("environment_prefix");
    $variables['current_url'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $variables['scriptfiles'] = '
    <script type="text/javascript" src="app/assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/jpanelmenu.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/chosen.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/slick.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/rangeslider.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/waypoints.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/magnific-popup.min.js"></script>
     <script type="text/javascript" src="app/assets/superadmin/js/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/counterup.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/tooltips.min.js"></script>
    <script type="text/javascript" src="app/assets/scripts/custom.js"></script>
    <script type="text/javascript" src="app/assets/scripts/googleapi.js"></script>
    <script type="text/javascript" src="app/assets/scripts/main-script.js"></script>
    <script type="text/javascript" src="app/assets/scripts/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="app/js/all.js"></script>
    
    <script> var appEnvironmentPrefix = "' . $env_prefix . '" </script>';
    $variables['stylefiles'] = '
        <link rel="icon" type="image/png" sizes="16x16" href="app/assets/dtsimages/favicon.png">
        <link href="app/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="app/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="app/assets/superadmin/css/plugins/select2.css" rel="stylesheet" type="text/css" />
        <link href="app/assets/css/colors/main.css" id="colors" rel="stylesheet" type="text/css" />
        <link href="app/assets/css/style.css" rel="stylesheet" type="text/css" />';
    return $variables;
}
        function get_superadminscriptfiles(&$variables) {
            $env_prefix = getenv("environment_prefix");
            $variables['current_url'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $variables['scriptfiles'] = '
    <script type="text/javascript" src="../app/assets/superadmin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/base64.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/cookie.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/lodash.compat.min.js"></script>
    <!--[if lt IE 9]><script src="../app/assets/superadmin/js/html5shiv.js"></script><![endif]--> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/event.swipe/jquery.event.move.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/event.swipe/jquery.event.swipe.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/breakpoints.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/respond/respond.min.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/fileupload/fileinput.min.js"></script> 
    
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/noty/layouts/top.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/noty/themes/default.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/typeahead/jquery.typeahead.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/jquery.popline.js"></script>
     <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.link.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.blockquote.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.decoration.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.list.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.justify.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.blockformat.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.social.js"></script>
  <script type="text/javascript" src="../app/assets/superadmin/js/plugins/poptext/jquery.popline.backcolor.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="../app/assets/scripts/sweetalert2.all.min.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins/blockui/jquery.blockUI.min.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/app.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins.js"></script> 
    <script type="text/javascript" src="../app/assets/superadmin/js/plugins.form-components.js"></script>
    <script src="https://use.fontawesome.com/7206b92529.js"></script>
    <script>$(document).ready(function(){App.init();Plugins.init();FormComponents.init()});</script>
    <script>$(document).ready(function(){$(".editor").popline();});</script>
    <script type="text/javascript" src="../app/assets/superadmin/js/custom.js"></script>
    <script  type="text/javascript" src="../app/assets/superadmin/js/all.js"></script>
    <script> var appEnvironmentPrefix = "' . $env_prefix . '" </script>';
            $variables['stylefiles'] = '
    <link href="../app/assets/superadmin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/css/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
    <link href="../app/assets/superadmin/css/themespop/default.css" rel="stylesheet" type="text/css" />
  <link href="../app/assets/superadmin/css/themespop/page.css" rel="stylesheet" type="text/css" />
        <link href="../app/assets/superadmin/css/themespop/normalize.css" rel="stylesheet" type="text/css" />
         <link href="../app/assets/superadmin/css/themespop/toggle-switch.css" rel="stylesheet" type="text/css" />
        <link href="../app/assets/superadmin/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../app/assets/superadmin/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/fileupload/css/fileinput.min.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/js/plugins/typeahead/jquery.typeahead.css" rel="stylesheet" type="text/css" />
    
    <link href="../app/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../app/assets/superadmin/css/fontawesome/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="../app/assets/superadmin/css/error.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/css/login.css" rel="stylesheet" type="text/css" />
    <link href="../app/assets/superadmin/css/plugins/select2.css" rel="stylesheet" type="text/css" />';
         return $variables;
  }
function handle_home(&$variables) {

    get_scriptfiles($variables);
      $variables['title'] = 'Doon Guide';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
$variables['header'] = render_template('app/template', 'header', $variables);
 $variables['footer'] = render_template('app/template', 'footer', $variables);   
    $variables['script'] = '<script  type="text/javascript" src="app/js/manage/login.js"></script>';
    print render_template("app/view", "home", $variables);
}
function handle_superadmin(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'Doon Guide Super Admin';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    
    $variables['script'] = '<script  type="text/javascript" src="app/assets/superadmin/js/manage/login.js"></script>';
    print render_template("app/view/dtsadmin", "login", $variables);
}
function handle_sadashbord(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'Doon Guide Super Admin Dashboard';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    $variables['header'] = render_template('app/template', 'superadminheader', $variables);
    
    print render_template("app/view/dtsadmin", "sadashbord", $variables);
}
function handle_addlisting(&$variables) {

    get_scriptfiles($variables);
      $variables['title'] = 'Doon Guide :: Add Our Business ';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

   $variables['header'] = render_template('app/template', 'header', $variables);
 $variables['footer'] = render_template('app/template', 'footer', $variables);  
    $variables['script'] = '<script  type="text/javascript" src="#"></script>';
    print render_template("app/view", "addlisting", $variables);
}


function handle_alllocality(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'DTS All Locality';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    $variables['header'] = render_template('app/template', 'superadminheader', $variables);
    $variables['script'] = '<script  type="text/javascript" src="../app/assets/superadmin/js/manage/localitymaster.js"></script>';
    print render_template("app/view/dtsadmin", "alllocality", $variables);
}


function handle_addlocality(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'DTS All Locality';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    $variables['header'] = render_template('app/template', 'superadminheader', $variables);
    $variables['script'] = '<script  type="text/javascript" src="app/assets/superadmin/js/manage/login.js"></script>';
    print render_template("app/view/dtsadmin", "addlocality", $variables);
}

function handle_allgym(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'DTS Gym';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    $variables['header'] = render_template('app/template', 'superadminheader', $variables);
    $variables['script'] = '<script  type="text/javascript" src="../app/assets/superadmin/js/manage/allgym.js"></script>';
    print render_template("app/view/dtsadmin", "allgym", $variables);
}

function handle_yogacenter(&$variables) {

    get_superadminscriptfiles($variables);
      $variables['title'] = 'DTS YogaCenter';
      $variables['dtsmetatag'] = '
        <meta name="keywords" content="ALL ITEM NEAR ME, SOFTWARE COMPANY IN DEHRADUN MOHKHAMPUR,ZYM NEAR ME,STORE NEAR ME. about 30 to 40 unique words">
        <meta name="description" content="Welcome to Doon Guide we are offring you all daily bases need in you only just one click we provide you your daily bases need like food ,fast food, grocery item & we are also provide you doctor,plumber,electrician,baarber etc ">
        <meta name="author" content="Doon Tech Solution">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';

    $variables['header'] = render_template('app/template', 'superadminheader', $variables);
    $variables['script'] = '<script  type="text/javascript" src="app/assets/superadmin/js/manage/login.js"></script>';
    print render_template("app/view/dtsadmin", "yogacenter", $variables);
}

function alter_routes(&$routes) {
   $routes[null] = "handle_home";
    $routes['Add-Business'] = "handle_addlisting";
   $routes['superadmin'] = "handle_superadmin";
   $routes['superadmin/Home'] = "handle_sadashbord";
   $routes['superadmin/All-Locality'] = "handle_alllocality";
   $routes['superadmin/AllGym'] = "handle_allgym";
   $routes['superadmin/YogaCenter'] = "handle_yogacenter";
}
