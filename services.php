<?php
include_once(dirname(__FILE__) . '/class/include.php');

$SERVICE = New Service(Null);
$services = $SERVICE->all();

?>


<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Services | Bonvoyagelanka</title>
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
                                Services
                            </h1>
<!--                            <p>Varius blandit sit amet</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader end -->


            <section id="content-commerce">
                <div class="container-fluid m-5-hor">
                    <div class="container-fluid">
                    <div class="row">
                        
                        <?php
                        foreach ($services as $service) {
                                ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="feature-1 gal-home1">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="upload/service/<?php echo $service['image_name'] ?>">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color"><?php echo $service['title'] ?></span></h3>
                                    <p class="max-char"><?php echo substr($service['short_description'], 0, 65) . '...'; ?></p>
                                    <div class="star-content color">
                                    </div>
                                    <div class="btn-center">
                                    <a href="view-services.php?id=<?php echo $service["id"]; ?>" class="btn-content">
                                        Read More
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-1 gal-home2">
                                <div class="cont-img">
                                    <img alt="img-cont" class="img-responsive" src="upload/service/<?php echo $service['image_name'] ?>">
                                </div>
                                <div class="cont-detail">
                                    <h3 class="big-heading"><span class="color"><?php echo $service['title'] ?></span></h3>
                                    <p class="max-char"><?php echo substr($service['short_description'], 0, 120) . '...'; ?></p>
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
                        ?>
                    </div>
                        
                </div>
                </div>
            </section>

            <!-- Header -->
            <?php
            include 'footer.php';
            ?>
            <!-- /Header -->


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
        <script>
            $(window).load(function () {
                var width = $(window).width();

                if (1365 < width > 1279) {
                    $('.gal-home2').removeClass('hidden');
                    $('.gal-home1').addClass('hidden');
                } else {
                    $('.gal-home1').removeClass('hidden');
                    $('.gal-home2').addClass('hidden');
                }
            });
        </script>
    </body>

</html>