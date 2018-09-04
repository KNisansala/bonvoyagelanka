<?php
include_once(dirname(__FILE__) . '/class/include.php');

$PHOTO_ALBUM = new PhotoAlbum(Null);
$photo_albums = $PHOTO_ALBUM->all();      
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Gallery | Bonvoyagelanka</title>
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
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
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

            <!-- subheader -->
            <section id="subheader">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="big-heading">
                                Gallery
                            </h1>
                            <p>Varius blandit sit amet</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- section projects -->
            <section aria-label="works" id="projects">
                <div class="container-fluid">
                    <div class="row">

                        <!-- project -->
                        <div class="v-align">
                            <div class="col-md-11 col-xs-12">
                                <!-- filter project -->
<!--                                <ul id="filter-hide" class="init">
                                    <li class="filtter-icon"><i class="ti-layout-grid3-alt"></i>
                                    </li>
                                </ul>

                                <ul id="filter-porto">
                                    <li class="filt-projects-w selected" data-project="*">All Tour
                                    </li>

                                    <li class="filt-projects-w" data-project=".asia">Asia
                                    </li>

                                    <li class="filt-projects-w" data-project=".aus">Australia
                                    </li>

                                    <li class="filt-projects-w" data-project=".eur">Europe
                                    </li>

                                    <li class="filt-projects-w" data-project=".afr">Africa
                                    </li>
                                </ul>-->

                                <!-- filter project end -->
                                <div class="col-md-12"> 
                                    <div class="row">

                                        <?php
                                    foreach ($photo_albums as $photo_album) {
                                        ?>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="gal-home">
                                                <div class="w-gallery aus afr">
                                                    <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                                                        <div class="hovereffect-color">
                                                            <img src="upload/photo-album/<?php echo $photo_album['image_name'] ?>" alt="" class="w-gallery-image">
                                                            <div class="overlay">
                                                                <div class="v-align wrap">
                                                                    <span class="icon">
                                                                        <a class="" href="upload/photo-album/<?php echo $photo_album['image_name'] ?>" data-fancybox="images">
                                                                            <i class="fa fa-search"></i>
                                                                        </a> 
                                                                    </span>
                                                                </div>
                                                            </div>
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
                        </div>
                        <!-- project end -->

                    </div>
                </div>
            </section>
            <!-- section projects end -->

            <!---Footer--->
            <?php
            include 'footer.php';
            ?>
            <!---/Footer--->


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
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
    </body>

</html>