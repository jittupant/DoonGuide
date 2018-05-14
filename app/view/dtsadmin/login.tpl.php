<!DOCTYPE html>

<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title><?php print_r($variables['title']); ?></title>
        <?php
        print_r($variables['stylefiles']);
        ?>
    


    </head>



    <body class="login">

        <div class="logo"><strong>Society </strong></div>

        <div class="box">

            <div class="content">

                <form id="frmlogin" class="form-vertical">

                    <h3 class="form-title">Sign In to your Account</h3>

                    <div class="form-group">

                        <div class="input-icon"> <i class="icon-user"></i>
                            <input type="text" id="txtUsername" autocomplete="off" class="form-control" placeholder="Username"/> </div>

                    </div>

                    <div class="form-group">

                        <div class="input-icon"> <i class="icon-lock"></i>

                            <input type="password" id="txtPassword" class="form-control" placeholder="Password" autocomplete="off" /> </div>

                    </div>

                    <div class="form-actions">

                        <label class="checkbox pull-left">

                            <input type="checkbox" id="rememberMeCheckbox" class="uniform" name="remember"> Remember me</label>

                        <button type="submit" class="submit btn btn-primary pull-right"> Sign In <i class="icon-angle-right"></i> </button>

                    </div>

                </form>

            </div>

            <div class="inner-box">

                <div class="content"> <i class="icon-remove close hide-default"></i> <a href="#" class="forgot-password-link">Forgot Password?</a>

                    <form class="form-vertical forgot-password-form hide-default" action="http://envato.stammtec.de/themeforest/melon/login.html" method="post">

                        <div class="form-group">

                            <div class="input-icon"> <i class="icon-envelope"></i>

                                <input type="text" name="email" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." /> </div>

                        </div>

                        <button type="submit" class="submit btn btn-default btn-block"> Reset your Password </button>

                    </form>

                    <div class="forgot-password-done hide-default"> <i class="icon-ok success-icon"></i> <span>Great. We have sent you an email.</span> </div>

                </div>

            </div>

        </div>

    </body>
    <?php
    print_r($variables['scriptfiles']);
    print_r($variables['script']);
    ?>

</html>