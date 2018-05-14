<!DOCTYPE html>

<head>
    <title><?php print_r($variables['title']); ?></title>
    <meta charset="utf-8">
    <?php print_r($variables['dtsmetatag']); ?>
    <?php print_r($variables['stylefiles']); ?>
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header Container
================================================== -->
        <header id="header-container">

            <!-- Header -->
            <div id="header">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo">
                            <a href="#"><img src="app/assets/dtsimages/logo.png" alt=""></a>
                        </div>

                        <!-- Mobile Navigation -->
                        <div class="menu-responsive">
                            <i class="fa fa-reorder menu-trigger"></i>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a class="current" href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->

                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side">
                        <div class="header-widget">

                            <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>

                            <a href="../model/logout?Operation=dgijbfjdiohgjiuh" class="sign-in">
                                <i class="sl sl-icon-login"></i> Sign Out</a>
                            <a class="sign-in">
                                <i class="fa fa-user"></i></a>


                        </div>
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Sign In Popup -->
                    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                        <div class="small-dialog-header">
                            <h3>Sign In</h3>
                        </div>

                        <div id="message"></div>
                        <!--Tabs -->
                        <div class="sign-in-form style-1">

                            <ul class="tabs-nav">
                                <li class=""><a href="#tab1">Log In</a></li>
                                <li><a href="#tab2">Register</a></li>
                            </ul>

                            <div class="tabs-container alt">

                                <!-- Login -->
                                <div class="tab-content" id="tab1" style="display: none;">
                                    <form class="login" id="frmlogin">

                                        <p class="form-row form-row-wide">
                                            <label for="username">
                                                <i class="fa fa-2x fa-phone"></i>
                                                <input type="text" class="input-text" placeholder="Mobile No." id="txtUsername" required />
                                            </label>
                                        </p>

                                        <p class="form-row form-row-wide">
                                            <label for="password">
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" placeholder="Password" id="txtPassword" required />
                                                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                                                </fb:login-button>
                                            </label>
                                            <span class="lost_password">
                                                <a href="#" >Lost Your Password?</a>
                                            </span>
                                        </p>

                                        <div class="form-row">
                                            <input type="submit" class="button border margin-top-5 logbtn" name="login" value="Login" />
                                        </div>

                                    </form>
                                </div>

                                <!-- Register -->
                                <div class="tab-content" id="tab2" style="display: none;">

                                    <form class="register" id="frmregis">
                                        <p id="error"></p>
                                        <p class="form-row form-row-wide">
                                            <label for="username2">
                                                <i class="im im-icon-Male"></i>
                                                <input type="text" id="txtRName" class="input-text" placeholder="Name" required />
                                            </label>
                                        </p>

                                        <p class="form-row form-row-wide">
                                            <label for="email2">
                                                <i class="fa fa-2x fa-phone"></i>
                                                <input type="text" id="txtMobile" maxlength="10" onkeypress="return isNumber(event)" class="input-text" placeholder="Mobile No." required  />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="email2">
                                                <i class="im im-icon-Mail"></i>
                                                <input type="text" id="txtEmail" class="input-text" placeholder="Email" required />
                                            </label>
                                        </p>

                                        <p class="form-row form-row-wide">
                                            <label for="password1">
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" id="txtRPassword" placeholder="Password" type="password" required />
                                            </label>
                                        </p>

                                        <p class="form-row form-row-wide">
                                            <label for="password2">
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" id="txtRCPassword" onkeyup="checkConfirm()" placeholder="Confirm Password" type="password" required/>
                                                <div id="confirmpass"></div>
                                            </label>
                                        </p>

                                        <input style="margin-top:20px !important;" type="submit" class="button border fw margin-top-10" id="register" value="Register" />

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Sign In Popup / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->