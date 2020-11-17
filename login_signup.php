<?php
require_once 'db_connection.php';
?>
<!Doctype html>
<html lang="en">


<!-- Mirrored from htmlguru.net/qayima-html/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 10:32:54 GMT -->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Qayima is a modern presentation HTML5 Listing & Directory Template.">
    <meta name="keywords" content="HTML5, Template, Design, Listing, Directory, Listing Template" />
    <meta name="author" content="creative-wp">

    <!-- Titles
    ================================================== -->
    <title>Animal web</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="front_end/assets/img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/android-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-144x144.html">

    <!-- Custom Font
    ================================================== -->
    <link href="../../fonts.googleapis.com/cssc02f.css?family=Poppins:300,400,500,500i,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/simple-scrollbar.css">
    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/rangeslider.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <link rel="stylesheet" href="assets/css/jquery-steps.css">
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/modernizr.min.js"></script>
</head>

<body>
    <?php
require_once 'db_connection.php';
?>

    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="site-header header-style-two">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="navigation-area">
                            <div class="header-navigation-left">
                                <!-- Site Branding 
                                <div class="site-branding">
                                    <a href="index-2.html">
                                        <img src="assets/images/logo/logo-one.png" alt="Site Logo" />
                                    </a>
                                </div> /.site-branding -->


                            </div><!-- /.header-navigation-left -->

                            <div class="header-navigation-right">

                                <div class="user-registration-area">
                                    <a class="user-reg-btn" href="#">
                                        <span class="icon icon-user-1"></span>
                                        <span class="text">Sign In</span>
                                    </a>
                                    <div class="user-register-area">
                                        <!--~~~ Start User Signin Area ~~~-->
                                        <div class="user-signin-area">
                                            <div class="form-content">
                                                <div class="form-content-signin">
                                                    <!-- Error messages -->
                                                    <?php if (!empty($response)) { ?>
                                                        <div class="form-group col-9 text-center">
                                                            <div class="alert text-center <?php echo $response['status']; ?>">
                                                                <?php echo $response['message']; ?>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <form action="loginpro.php" method="post" class="default-form signin-form">
                                                        <div class="form-group">
                                                            <input id="email" name="email" class="form-controllar" type="email" placeholder="Email Address">
                                                            <span class="icon-user-1"></span>
                                                        </div>
                                                        <!--/.form-group-->

                                                        <div class="form-group">
                                                            <input id="pass" name="password" class="form-controllar" type="password" placeholder="Password">
                                                            <br>
                                                            <span class="icon-key3"></span>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group w-50">
                                                            <!-- Google reCAPTCHA block -->
                                                            <div class="g-recaptcha" data-sitekey="6LeUkr8ZAAAAAMC0ZmiMkM2tRZ_1sucyFY1WV_71"></div>
                                                        </div>
                                                        <!--/.form-group-->

                                                        <div class="form-btn-group">
                                                            <button type="submit" name="login" class="btn btn-default btn-black">
                                                                Login in
                                                                <span class="fas fa-caret-right"></span>
                                                            </button>
                                                            <button class="btn btn-default btn-black">
                                                                <a class="btn-password" href="#">Forget Password</a>
                                                         </button class>
                                                        </div>
                                                        <div class="reg-others-midea">
                                                            <div class="text">
                                                                Or Login With
                                                            </div>
                                                            <div class="midea-icons">
                                                                <ul class="social-share">
                                                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a class="google-plus" href="#"><i class="fab fa-google"></i></a></li>
                                                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="login-form-register-now">
                                                        Dont have an account? <a class="btn-register-now" href="#">Register Now</a>
                                                    </div>
                                                </div>
                                                <!--~~~ Start Account Recovery Area ~~~-->
                                                <div class="form-content-password">
                                                    <form class="default-form password-form">
                                                        <div class="form-group">
                                                            <input id="re-email" name="email" class="form-controllar" type="email" placeholder="Email Address">
                                                            <span class="icon-user-1"></span>
                                                        </div>
                                                        <!--/.form-group-->

                                                        <div class="form-group">
                                                            <input id="re-pass-up" name="password" class="form-controllar" type="password" placeholder="Password">
                                                            <span class="icon-key3"></span>
                                                        </div>
                                                        <!--/.form-group-->

                                                        <div class="form-group">
                                                            <input id="re-pass-up-confirm" name="password" class="form-controllar" type="password" placeholder="Confirm Password">
                                                            <span class="icon-key3"></span>
                                                        </div>
                                                        <!--/.form-group-->

                                                        <div class="form-btn-group pt-10">
                                                            <button type="submit" class="btn btn-default btn-recet">
                                                                Reset Password
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-back">Back</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--~./ end account recovery area ~-->
                                            </div>
                                        </div>
                                        <!--~./ end user signin area ~-->

                                        <!--~~~ Start User Signup Area ~~~-->
                                        <div class="user-signup-area">
                                            <div style="display:inline">
                                            
                                               <button onclick="show('operation1')">Individual</button>
                                               <button onclick="show('operation2')">SME</button>
                                            </div>

                                            <!-- //////////////////////////////////////////// -->
                                            <div id="main_place" style="overflow-y:scroll;height:500px;display:block;">
                                               Select the account type you want to register..<br>Thank you!!
                                            </div>

                                            


                                            <div class="form-content" id="operation1" style="display:none;">
                                              
                                                <form id="signup-form"  action="registration.php"class="default-form signup-form" method="post">
                                                <div class="form-group">
                                                        <input id="firstname" name="firstname" class="form-controllar" type="text" placeholder="FirstName">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="surname" name="surname" class="form-controllar" type="text" placeholder="LastName">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                   
                                                   
                                                    <div class="form-group">
                                                        <input id="phonenumber" name="phonenumber" class="form-controllar" type="text" placeholder="PhoneNumber">
                                                        <span class="icon-user-1"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <input id="nationality" name="nationality" class="form-controllar" type="text" placeholder="nationality">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="email-up" name="email" class="form-controllar" type="email" placeholder="Email Address">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="name" class="form-controllar" type="text" placeholder="Username">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="pass-up" name="password" class="form-controllar" type="password" placeholder="Password">
                                                        <span class="icon-key3"></span>
                                                    </div>
                                                    <!--/.form-group-->

                                                    <div class="form-group">
                                                        <input id="pass-up-confirm" name="password" class="form-controllar" type="password" placeholder="Confirm Password">
                                                        <span class="icon-key3"></span>
                                                    </div>
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="name" name="DeviceType" class="form-controllar" type="text" placeholder="DeviceType">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="inviteCode" class="form-controllar" type="text" placeholder="CountryCode">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="UserType" class="form-controllar" type="number" placeholder="UserType">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="Currency" class="form-controllar" type="number" placeholder="Currency">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="Language" class="form-controllar" type="text" placeholder="Language">
                                                        <span class="icon-user-1"></span>
                                                    </div>

                                                    <div class="login-form-remember">
                                                        <label><input id="remembermesignup" value="" type="checkbox"><span>I Agree to the </span> <a href="#"> Privacy Policy</a></label>
                                                    </div>
                                                    <div class="form-btn-group">
                                                        <button type="submit" class="btn btn-default btn-register">
                                                            Register
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-signin btn-back">
                                                            Sign In
                                                        </button>
                                                        <div class="reg-others-midea">
                                                            <div class="text">
                                                                Or Connect With
                                                            </div>
                                                            <div class="midea-icons">
                                                                <ul class="social-share">
                                                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a class="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- <div id=operation2 style=“display:none”>
                                            Again some textboxes and text
                                            </div> -->
                                            <div class="form-content" id="operation2" style="display:none;">
                                             
                                                <form id="signup-form"  action="registration.php"class="default-form signup-form" method="post">
                                                    <div class="form-group">
                                                        <input id="name" name="CompanyType" class="form-controllar" type="text" placeholder="CompanyType">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="FirstName" class="form-controllar" type="text" placeholder="FirstName">
                                                        <span class="icon-user-1"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <input id="name" name="LastName" class="form-controllar" type="text" placeholder="LastName">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <input id="name" name="PhoneCode" class="form-controllar" type="number" placeholder="PhoneCode">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="number" class="form-controllar" type="text" placeholder="PhoneNumber">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="CountryCode" class="form-controllar" type="number" placeholder="CountryCode">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="email-up" name="email" class="form-controllar" type="email" placeholder="Email Address">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="name" class="form-controllar" type="text" placeholder="Username">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="pass-up" name="password" class="form-controllar" type="password" placeholder="Password">
                                                        <span class="icon-key3"></span>
                                                    </div>
                                                    <!--/.form-group-->

                                                    <div class="form-group">
                                                        <input id="pass-up-confirm" name="password" class="form-controllar" type="password" placeholder="Confirm Password">
                                                        <span class="icon-key3"></span>
                                                    </div>
                                                    <!--/.form-group-->
                                                    <div class="form-group">
                                                        <input id="name" name="DeviceType" class="form-controllar" type="text" placeholder="DeviceType">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="inviteCode" class="form-controllar" type="text" placeholder="CountryCode">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="UserType" class="form-controllar" type="number" placeholder="UserType">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="Currency" class="form-controllar" type="number" placeholder="Currency">
                                                        <span class="icon-user-1"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="name" name="Language" class="form-controllar" type="text" placeholder="Language">
                                                        <span class="icon-user-1"></span>
                                                    </div>

                                                    <div class="login-form-remember">
                                                        <label><input id="remembermesignup" value="" type="checkbox"><span>I Agree to the </span> <a href="#"> Privacy Policy</a></label>
                                                    </div>
                                                    <div class="form-btn-group">
                                                        <button type="submit" class="btn btn-default btn-register">
                                                            Register
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-signin btn-back">
                                                            Sign In
                                                        </button>
                                                        <div class="reg-others-midea">
                                                            <div class="text">
                                                                Or Connect With
                                                            </div>
                                                            <div class="midea-icons">
                                                                <ul class="social-share">
                                                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a class="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                           
                                            <!-- //////////////////////////////////////////// -->


                                            
                                            
                                            
                                            
                                            

                                            
                                        </div>
                                        <!--~./ end user signup area ~-->
                                    </div>
                                </div>
                                <!--~./ user-registration-area ~-->

                            </div>
                            <!--~./ header-navigation-right ~-->
                        </div><!--  /.navigation-area -->
                    </div><!--  /.col-12 -->
                </div><!--  /.row -->
            </div><!--  /.container-fluid -->
        </header>
        <!--~~./ end site header ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Banner Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="frontpage-banner-section frontpage-banner-style-three  ptb-100">
            <div class="frontpage-banner-bg">
                <div class="frontpage-bg-one bg-overlay-violet bg-image" style="background-image:url('assets/images/bg/hero-bg3.jpg')"></div>
                <div class="frontpage-bg-two bg-overlay-violet bg-image" style="background-image:url('assets/images/bg/hero-bg31.jpg')"></div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="frontpage-banner-content text-white">
                            <h1 class="banner-title">Find the Best Services On <span style="color: blueviolet;">VAYA</span></h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="advance-search-form-area">
                            <form action="#" class="advance-search-form">
                                <h3 class="heading text-white">WELCOME TO VAYA LET’S GO</h3>
                                <div class="inner-form">
                                    <div class="form-group-single">
                                        Get VAYA from anywhere you go. Convenience and reliability is at the heart of what we do. Hail a VAYA, Let’s Go…
                                    </div>
                                    <div class="form-group-single">
                                        <div class="header-button">
                                            <a href="https://www.vayaafrica.com/" class="btn btn-border-filled">Read More</a>
                                        </div>
                                    </div>


                                </div>
                            </form>
                            <!--./ advance-search-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~./ end frontpage banner Section ~-->



    </div>
    <!--~~./ end site content ~~-->

    <!-- All The JS Files
    ================================================== -->
    <script>
        function show(param_div_id) {
            document.getElementById('main_place').innerHTML = document.getElementById(param_div_id).innerHTML;
        }
    </script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
    <script src="assets/js/SyoTimer.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/ResizeSensor.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/packery-mode.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/simple-scrollbar.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <script src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>
    <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/rater.min.js"></script>
    <script src="assets/js/jquery-steps.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script><!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/qayima-html/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 10:32:56 GMT -->
        <!-- Google reCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
        </script>

</html>