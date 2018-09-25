<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$SERVICE = new Service($id);

$services = $SERVICE->all();
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title><?php echo $SERVICE->title; ?> | Bonvoyagelanka</title>
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

            <!-- subheader -->
            <section id="subheader">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="big-heading">
                                <?php echo $SERVICE->title; ?>
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->

            <!-- services -->
            <section class="services whitepage">
                <div class="container-fluid m-5-hor">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="300">
                                    <div class="owl-carousel" id="projectsBig">
                                        <?php
                                        $photos = ServicePhoto::getServicePhotosById($SERVICE->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img alt="" class="img-responsive" src="upload/service/gallery/thumb/<?php echo $photo['image_name']; ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <h2 class="big-heading">
                                        <?php echo $SERVICE->title; ?>
                                    </h2>
                                    <p>
                                        <?php echo $SERVICE->description; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 onStep" data-animation="fadeInUp" data-time="600">
                            <div class="widget hidden-md hidden-sm hidden-xs">

                                <?php
                                foreach ($services as $key => $service) {
                                    if ($key < 4) {
//                                        
                                        ?>
<!--                                        <div class="gal-home">
                                            <a href="#"></a>
                                            <div class="hovereffect">
                                                <img alt="imageportofolio" class="img-responsive" src="upload/service/<?php echo $service['image_name'] ?>">
                                            </div>
                                            <div class="gal-home-content">
                                                <div class="row">
                                                    <div class="col-md-12"> 
                                                        <h4 class="autoheight"><?php echo $service['title'] ?></h4>
                                                        <p class="para-tours"><?php echo substr($service['short_description'], 0, 100) . '...'; ?></p>
                                                        <span class="readmore-span1">
                                                            <center><a href="view-services.php?id=<?php echo $service["id"]; ?>" class="btn-content1">Read More</a></center>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                                        <div class="gal-home" style="background: #632b2b33;">
                                            <div class="col-xs-6 col-sm-5 col-md-5 attraction">

                                                <div class="hovereffect">
                                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                        <img alt="imageportofolio" class="img-responsive img-middle1" src="upload/service/<?php echo $service['image_name'] ?>">
                                                        <div class="middle">
                                                            <i class="fa fa-search"></i>
                                                        </div>

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-5 col-md-7 entry-box">
                                                <div class="gal-home">
                                                    <div class="row">
                                                        <div class="col-md-12"> 
                                                            <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                                <h4 class="autoheight"><?php echo $service['title'] ?></h4>
                                                                <p class="gal-para"><?php echo substr($service['short_description'], 0, 32) . '...'; ?></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
//                                
                                ?>

                            </div>
                            <div class="widget hidden-lg">

                                <?php
                                foreach ($services as $key => $service) {
                                    if ($key < 3) {
//                                        
                                        ?>
                                <div class="col-sm-3">
                                        <div class="gal-home" style="background: #632b2b33;">
                                            <div class="col-xs-12 col-sm-12 col-md-5 attraction">

                                                <div class="hovereffect">
                                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                        <img alt="imageportofolio" class="img-responsive img-middle1" src="upload/service/<?php echo $service['image_name'] ?>">
                                                        <div class="middle">
                                                            <i class="fa fa-search"></i>
                                                        </div>

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-7 entry-box">
                                                <div class="gal-home">
                                                    <div class="row">
                                                        <div class="col-md-12"> 
                                                            <a href="view-services.php?id=<?php echo $service["id"]; ?>">
                                                                <h4 class="autoheight"><?php echo $service['title'] ?></h4>
                                                                <p class="gal-para"><?php echo substr($service['short_description'], 0, 50) . '...'; ?></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                        <?php
                                    }
                                }
//                                
                                ?>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- services end -->     

            <!---Footer--->
            <?php
            include 'footer.php';
            ?>
            <!---/Footer--->


            <!-- ScrolltoTop -->
            <div id="totop" class="init">
                <span class="ti-angle-up"></span>
            </div>  

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
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

    </body>

</html>
