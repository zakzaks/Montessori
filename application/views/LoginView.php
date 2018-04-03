<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="<?php echo base_url() ?>assets/dist/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Montessori Indonesia</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url() ?>assets/dist/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="<?php echo base_url() ?>assets/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/dist/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <i class="fa fa-map-marker" style="color:white;"></i>&nbsp;<p style="color:white">Jakarta, Indonesia </p> 
                &nbsp;&nbsp;&nbsp;<i class="fa fa-phone" style="color:white;"></i>&nbsp;<p style="color:white">+62811825520 </p>
                &nbsp;&nbsp;&nbsp;<i class="fa fa-envelope-o" style="color:white;">&nbsp;</i><p style="color:white">info@organisasimontessori.com </p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>FrontEnd/index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>Membership/index">Membership</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>Login/index">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Join Us</h4>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem voluptatum alias nulla nisi a accusantium error eum eveniet aliquam ducimus voluptas nemo pariatur, ipsa facere neque, eligendi ut cum?</h5>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3">
                    </div>
                    <div class="col col-lg-6">
                        <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" required placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="col col-lg-3">
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <h3>Our Newsletter</h3>
                                </div>
                                <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                <ul>
                                    <li><a href="https://facebook.com/org.mont.id"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/omijakarta"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/103708306293337672748"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.instagram.com/omijakarta/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="name" style="color:white;">Name :</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color:white;">Email address :</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="email" style="color:white;">Your Message :</label>
                                <textarea name="areaMsg" id="msg" class="form-control" rows="4"></textarea>
                            </div>
                        </form>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <a href="#">+62811825520</a>
                                <a href="#">info@organisasimontessori.com</a>
                                <p>Jakarta, Indonesia<br /></p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Disclaimer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Advertisement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url() ?>/assets/dist/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>/assets/dist/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/dist/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="<?php echo base_url() ?>/assets/vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/counterup/apear.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/counterup/countto.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="<?php echo base_url() ?>/assets/vendors/tweet/tweetie.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/vendors/tweet/script.js"></script>

        <script src="<?php echo base_url() ?>/assets/dist/js/theme.js"></script>
    </body>
</html>
