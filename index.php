<?php
include_once(dirname(__FILE__) . '/class/include.php');

$ATTRACTION = new Attraction(Null);
$attractions = $ATTRACTION->all();

$ACTIVITY = New Activities(Null);
$activities = $ACTIVITY->all();

$SERVICE = New Service(Null);
$services = $SERVICE->all();

$sliders = Slider::all();
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Bonvoyagelanka</title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- favicon -->
        <link href="img/favicon1.png" rel="icon" sizes="32x32" type="image/png">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- font themify CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- date picker CSS -->
        <link href="css/datepicker.min.css" rel="stylesheet">
        <!-- revolution slider css -->
        <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
        <!-- on3step CSS -->
        <link href="css/animated-on3step.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/on3step-style.css" rel="stylesheet">
        <link href="css/queries-on3step.css" media="all" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <!-- preloader -->
        <div class="bg-preloader-white"></div>
        <div class="preloader-white">
            <div class="mainpreloader">
                <span></span>
            </div>
        </div>
        <!-- preloader end -->

        <!-- content wraper -->
        <div class="content-wrapper">

            <!-- Header -->
            <?php
            include 'header.php';
            ?>
            <!-- /Header -->

            <!-- home -->
            <div id="home">
                <!-- Slider -->
                <?php
                include 'slider.php';
                ?>
                <!-- /Slider -->
            </div>
            <!-- home end -->

            <!-- section search -->
            <section class="frm-clean ">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        foreach ($services as $key => $service) {
                            if ($key < 3) {
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="feature-1">
                                        <div class="cont-img">
                                            <img alt="img-cont" class="img-responsive" src="upload/service/<?php echo $service['image_name'] ?>">
                                        </div>
                                        <div class="cont-detail">
                                            <h3 class="big-heading"><span class="color"><?php echo $service['title'] ?></span></h3>
                                            <p class="max-char"><?php echo substr($service['short_description'], 0, 85) . '...'; ?></p>
                                            <div class="star-content color">
                                            </div>
                                            <div class="btn-center">
                                                <a href="view-services.php?id=<?php echo $service["id"]; ?>" class="btn-content">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

<!--                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="feature-1">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="img/home/tour-6.jpg">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color">Tour Packages</span></h3>
                                    <p class="max-char">Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet,ocurreret pertinacia pri an. No mei nibh consectetuer</p>
                                    <div class="star-content color">
                                    </div>
                                    <div class="btn-center">
                                        <a href="#" class="btn-content">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="feature-1">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="img/home/tour-7.jpg">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color">Destinations</span></h3>
                                    <p class="max-char">Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet,ocurreret pertinacia pri an. No mei nibh consectetuer</p>
                                    <div class="star-content color">
                                    </div>
                                    <div class="btn-center">
                                        <a href="#" class="btn-content">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- section search end -->

            <!--  top rated --> 
            <section aria-label="top-rated" class="parallax ">
                <div class="container-fluid m-5-hor">
                    <!-- section about -->
                    <section id="about-us-1" class="whitepage no-padding">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="image-container autoheight-1 col-lg-6 hidden-md hidden-sm hidden-xs pull-left onStep" data-animation="fadeInLeft" data-time="0"></div>

                                <div class="col-lg-6 autoheight-1">
                                    <div class="p-90">
                                        <h2 class="big-heading space-title">
                                            <span class="first">Perfect</span> Place For Vacation
                                            <span class="devider-cont"></span>
                                        </h2>          

                                        <p class="intro">              
                                            Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur et sociis natoque penatibus et magnis dis parturient montes. </p> 
                                    </div>   
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- section about end -->

                    <!-- section about -->
                    <section id="about-us-2" class="no-padding whitepage">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="image-container autoheight-2 col-lg-6 hidden-md hidden-sm hidden-xs pull-right onStep" data-animation="fadeInRight" data-time="0"></div>

                                <div class="col-lg-6 autoheight-2">
                                    <div class="p-90">
                                        <h2 class="big-heading space-title">
                                            <span class="first">About</span> Our Service
                                            <span class="devider-cont"></span>
                                        </h2>

                                        <p class="intro">
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Cum sociis dis montes.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- section about end -->
                </div>
            </section>  
            <!--  top rated end --> 

            <!-- testimony --> 
            <section id="testimony" class="no-padding">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 autoheight">

                            <div class="p-90">
                                <h2 class="big-heading topic-dark"><span class="first">Customer</span> Testimonials</h2>
                                <div id="owl-testimonial" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                                        </blockquote>
                                        <div class="img-back">
                                            <img alt="imagetesti" class="tal" src="img/img-testi-1.png">
                                        </div>
                                        <h3>Emma Watson</h3>
                                    </div>

                                    <div class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                                        </blockquote>
                                        <div class="img-back">
                                            <img alt="imagetesti" class="tal" src="img/img-testi-1.png">
                                        </div>
                                        <h3>Emma Watson</h3>
                                    </div>  

                                    <div class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                                        </blockquote>
                                        <div class="img-back">
                                            <img alt="imagetesti" class="tal" src="img/img-testi-1.png">
                                        </div>
                                        <h3>Emma Watson</h3>
                                    </div>                        
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <!-- testimony end -->

            <!-- section features -->
            <section class="no-bottom" style="background-color: #000;">
                <div class="col-md-9">
                    <h3 class="big-heading-light1"><span class="first">Things</span> To Do In Sri Lanka</h3>
                </div>
                <div class="col-md-3">
                    <a href="activities.php" class="btn-content btn-readmore">
                        View All
                    </a>
                </div>
                <div class="container-fluid">

                    <div class="row row1">

                        <div class="no-gutter">

                            <?php
                            foreach ($activities as $key => $activity) {
                                if ($key < 3) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="features no-margin">
                                            <div class="bg-img" style="background: url(upload/activity/<?php echo $activity['image_name'] ?>);">
                                                <div class="">
                                                    <h3 class="big-heading"><?php echo $activity['title']; ?><sup class="subtour"></sup></h3>
                                                    <p class="content"><?php echo substr($activity['short_description'], 0, 120) . '...'; ?></p>
                                                    <a href="view-activities.php?id=<?php echo $activity["id"]; ?>"><span class="shine"></span>View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </section>
            <!-- section features end -->

            <!--  gallery home --> 
            <section aria-label="gallery">
                <div class="container-fluid m-5-hor">
                    <div class="row">

                    </div>
                </div>
                <h2 class="big-heading topic-dark topic"><span class="first">Destinations</span> In Sri Lanka</h2>
                <div class="attraction-slider">
                    <div class="onStep" data-animation="fadeInUp" data-time="0">
                        <div id="owl-gal" class="owl-carousel">

                            <?php
                            foreach ($attractions as $attraction) {
                                ?>
                                <div class="item">
                                    <div class="gal-home">
                                        <a href="#"></a>
                                        <div class="hovereffect">
                                            <img alt="imageportofolio" class="img-responsive" src="upload/attraction/<?php echo $attraction['image_name'] ?>" />
                                        </div>
                                        <div class="gal-home-content">
                                            <div class="row">
                                                <div class="col-md-12"> 
                                                    <h4 class=""><?php echo $attraction['title']; ?></h4>
                                                    <p class="para-tours"><?php echo substr($attraction['short_description'], 0, 90) . '...'; ?></p>
                                                    <span class="readmore-span1">
                                                        <a href="view-attractions.php?id=<?php echo $attraction["id"]; ?>" class="btn-content1">Read More</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </section> 
            <!--  gallery home end --> 

            <?php
            include 'footer.php';
            ?>
            <!-- /Slider -->


            <!-- ScrolltoTop -->
            <div id="totop" class="init">
                <span class="ti-angle-up"></span>
            </div>  

            <!-- modal login -->
            <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">      
                            <h4 class="modal-title">Member Log In</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" required="required">         
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                                </div>
                            </form>       

                        </div>
                        <div class="modal-footer">
                            <a href="#">or Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal login end -->

            <!-- modal registration -->
            <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">      
                            <h4 class="modal-title">Member Registration</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                                </div>
                                <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                                <div class="clearfix"></div>
                            </form>       

                        </div>
                        <div class="modal-footer">
                            <a href="#">or Log In</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal registration end -->      


        </div>
        <!-- content wraper end --> 

        <!-- plugin JS -->
        <script src="plugin/pluginson3step.js"></script> 
        <script src="plugin/bootstrap.min.js"></script>
        <script src='plugin/bootstrap-datepicker.min.js'></script>
        <script src="plugin/sticky.js"></script> 
        <!-- slider revolution  -->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- on3step JS -->
        <script src="js/on3step.js"></script>
        <script src="js/plugin-set.js"></script>
        <script>

        </body>
        </html>