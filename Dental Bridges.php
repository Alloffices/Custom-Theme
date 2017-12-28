<?php
/*
Template Name: Dental Bridges Landing
*/
error_reporting(-1);
ini_set('display_errors', 'On');
$css_dir = get_template_directory_uri() . "/Custom Templates/css";
$fonts_dir = get_template_directory_uri() . "/Custom Templates/fonts";
$images_dir = get_template_directory_uri() . "/Custom Templates/images";
$js_dir = get_template_directory_uri() . "/Custom Templates/js";
$current_url_host = "http://$_SERVER[HTTP_HOST]";
$tracking_code_path =  __DIR__ . "/google_tracking_code.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- /.website title -->
        <title>Dental Bridges</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="<?php esc_attr_e("$fonts_dir/icon-7-stroke/css/pe-icon-7-stroke.css"); ?>" rel="stylesheet">
        <link href="<?php esc_attr_e("$css_dir/animate.css"); ?>" rel="stylesheet" media="screen">
        <link href="<?php esc_attr_e("$css_dir/owl.theme.css"); ?>" rel="stylesheet">
        <link href="<?php esc_attr_e("$css_dir/owl.carousel.css"); ?>" rel="stylesheet">

        <!-- Colors -->
        <link href="<?php esc_attr_e("$css_dir/css-index.css"); ?>" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
        <!-- No Index and No Follow -->
        <meta name="robots" content="noindex, nofollow">
        <!-- Google Tracking Code -->
              
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">
        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>
        <div class="top-header container">
            <div class="custom-container">
                <div class="col-6">
                  <img class="left logo-image branding_logo_image" src="http://drgiraldo.com/wp-content/uploads/2017/01/logo-dark.png" data-normal="http://drgiraldo.com/wp-content/uploads/2017/01/logo-dark.png" data-sticky="http://drgiraldo.com/wp-content/uploads/2017/01/logo-dark.png" alt="Dr. Andrea Giraldo" title="Dr. Andrea Giraldo">
                </div>
                <div class="col-6">
                   <!-- Call Us Button -->
                   <a class="btn btn-primary right number" href="tel:954-524-3117">954-524-3117</a>
                   <a class="btn btn-primary right mobile number" href="tel:954-524-3117"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('<?php esc_attr_e("$images_dir/dental_bridges.jpeg"); ?>');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Dental Bridges
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                            </div>

                            <!-- /.header button -->
                            <h3 class="cta_text">Call Now!</h3>
                            <div class="head-btn wow fadeInLeft">
                                <a href="tel:954-524-3117" class="btn-primary">954-524-3117</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.intro section -->
        <div id="intro">
            <div class="container">
                <div class="custom-container">
                    <div class="row">
                    <!-- /.intro content -->
                        <div class="col-md-6 wow slideInRight">
                            <?php if(have_posts()):
                            		while(have_posts()): the_post();
                            			the_content();
                            		endwhile;
                            	  endif; 
                            ?>
                        </div>
                    <!-- /.intro contact form 7 -->
                    <div class="col-md-6 intro-pic wow slideInLeft">
                        <h2>Contact Us to Make an Appointment!</h2>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Landing Contact Form"]'); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /.download section -->
        <div id="download">
            <div class="action fullscreen parallax" style="background-image:url('<?php esc_attr_e("$images_dir/bottom_cta.jpeg"); ?>');" data-img-width="2000" data-img-height="1333" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                            <!-- /.download title -->
                            <h2 class="wow fadeInRight">Want to Learn More?</h2>
                            <p class="download-text wow fadeInLeft">There’s no day like today to restore your smile with dental bridges. Contact Dr. Andrea Giraldo’s experienced dental team now!</p>

                            <!-- /.download button -->
                            <div class="download-cta wow fadeInLeft">
                                <h3 class="cta_text">Call Now!</h3>
                                <a href="tel:954-524-3117" class="btn-secondary number">954-524-3117</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Dr. Andrea Giraldo - Copyright 2017 All Rights Reserved - Dr. Andrea Giraldo<p><a href="https://yourdigitalresource.com/" rel="nofollow" target="_blank">Digital Resource</a></p>
                </div>
            </div>
        </footer>

        <!-- /.javascript files -->
        <script src="<?php esc_attr_e("$js_dir/jquery.js"); ?>"></script>
        <script src="<?php esc_attr_e("$js_dir/bootstrap.min.js"); ?>"></script>
        <script src="<?php esc_attr_e("$js_dir/custom.js"); ?>"></script>
        <script src="<?php esc_attr_e("$js_dir/jquery.sticky.js"); ?>"></script>
        <script src="<?php esc_attr_e("$js_dir/wow.min.js"); ?>"></script>
        <script src="<?php esc_attr_e("$js_dir/owl.carousel.min.js"); ?>"></script>
        <script>
                                    new WOW().init();
        </script>
         <!--Scripts-->
         <?php wp_footer(); ?>
    </body>
</html>
