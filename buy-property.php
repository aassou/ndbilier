<?php
    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('admin/model/'.$myClass.'.php')){
            include('admin/model/'.$myClass.'.php');
        }
        elseif(file_exists('admin/controller/'.$myClass.'.php')){
            include('admin/controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad");
    //classes loading end
    session_start();
    if ( isset($_GET['lang']) ) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    else if ( !isset($_GET['lang']) and !isset($_SESSION['lang']) ){
        $_SESSION['lang'] = "ar";    
    }
    include('include/config.php');
    //class managers
    $propertyManager = new PropertyManager($pdo);
    //objs and vars
    $idProperty = $_GET['baohyu'];
    $property = $propertyManager->getPropertyById($idProperty);    
    $properties = $propertyManager->getPropertyForSale();
     //language settings
    $pageTitle = "";
    $midPageTitle = "";
    $moreButton = "";
    $residence = "";
    $similarProperties = "";
    $address = "";
    $propertyName = "";
    $descriptionName = "";
    //tests
    if ( $_SESSION['lang'] == "ar" ) {
        $pageTitle = $property->nameAR();
        $residence = "إقامة";
        $midPageTitle = "";
        $moreButton = "المزيد";
        $propertyName = "nameAR";
        $descriptionName = "descriptionAR";    
        $similarProperties = "اعلانات مشابهة";
        $address = "العنوان";
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        $pageTitle = $property->nameFR();
        $residence = "Résidence ";
        $midPageTitle = "";
        $moreButton = "Voir plus";
        $propertyName = "nameFR";
        $descriptionName = "descriptionFR";    
        $similarProperties = "َAnnonces similaires";
        $address = "Adresse";
    }
    else if ( $_SESSION['lang'] == "de" ) {
        $pageTitle = $property->nameDE();
        $residence = "Residenz ";
        $midPageTitle = "";
        $moreButton = "Mehr";
        $propertyName = "nameDE";
        $descriptionName = "descriptionDE";    
        $similarProperties = "ähnliche anzeigen";
        $address = "Adresse";
    }
    else if ( $_SESSION['lang'] == "es" ) {
        $pageTitle = $property->nameES();
        $residence = "Residencia";
        $midPageTitle = "";
        $moreButton = "Ver más";
        $propertyName = "nameES";
        $descriptionName = "descriptionES";    
        $similarProperties = "Anuncios similares";
        $address = "Dirección";
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        $pageTitle = $property->nameNL();
        $residence = "Residentie";
        $midPageTitle = "";
        $moreButton = "Meer";
        $propertyName = "nameNL";
        $descriptionName = "descriptionNL";    
        $similarProperties = "Soortgelijke advertenties";
        $address = "Adres";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nadobilier | Immobilier à Nador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Your styles -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/flexslider/flexslider.css" rel="stylesheet" media="screen">
        <link href="css/tabber/tabber.css" rel="stylesheet" media="screen">
        <link href="css/colorbox/colorbox.css" rel="stylesheet" media="screen">
        <link href="css/styles.css" rel="stylesheet" media="screen">
        <link href="css/responsive.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
        <!--[if lt Ie 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- BEGIN HEADER -->
        <?php include('include/header.php'); ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTENT -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <div class="grid_full_width gird_sidebar  content-margin-top">
                        <div class="row">         
                            <!-- Main content -->
                            <div class="span8">
                            <!-- Property detail -->
                                <div class="property_detail">
                                    <section class="slider-detail">
                                        <div id="pic-detail" class="flexslider">
                                            <ul class="slides">
                                                <?php 
                                                for($i=1;$i<5;$i++) { 
                                                $img = "img".$i;    
                                                ?>
                                                <li>
                                                    <a class="detailbox" href="<?= $property->$img() ?>" title=""><img alt="<?= $img ?>"  width="620" height="388" src="<?= $property->$img() ?>" /></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div id="pic-control" class="flexslider">
                                            <ul class="slides">
                                                <?php 
                                                for($i=1;$i<5;$i++) { 
                                                $img = "img".$i;    
                                                ?>
                                                <li>
                                                    <img alt="<?= $img ?>" src="<?= $property->$img() ?>" />
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </section>
                                    <div class="infotext-detail">
                                        <!--h3></h3-->
                                        <span class="price"><?= $property->$propertyName() ?></span>
                                        <br>
                                        <div class="excerpt">
                                            <p><?= $property->$descriptionName() ?></p>
                                        </div>
                                        <!--div class="share">
                                            <ul>
                                                <li><a href="#"><img alt=""  src="img/icon/pinshare.jpg"></a></li>
                                                <li><a href="#"><img alt=""  src="img/icon/twittershare.jpg"></a></li>
                                                <li><a href="#"><img alt=""  src="img/icon/faceshare.jpg"></a></li>
                                            </ul>
                                        </div-->
                                    </div>
                                </div>
                                <!-- End Property -->
                            </div>
                            <!-- End Main content -->
                            <!-- Sidebar left  -->
                            <div class="span4">
                                <div class="box-siderbar-container">
                                    <!-- sidebar-box our-box -->
                                    <div class="sidebar-box our-box">
                                        <h3><?= $menuTitles[3] ?></h3>
                                        <ul>
                                            <li>
                                                <div class="our-border clearfix">
                                                    <div class="our-info">
                                                        <p class="green-phone infos-font"><?= $property->phone() ?></p>
                                                        <!--p class="green-phone infos-font"><?php //$company->telefon2() ?></p-->
                                                        <!--p class="infos-font"><a target="_blank" href="mailto:<?php //$company->email() ?>" class="blue-link"><?php //$company->email() ?></a></p-->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End sidebar-box our-box -->
                                    <!-- sidebar-box map-box -->
                                    <div class="sidebar-box map-box">
                                        <h3><?= $address ?></h3>
                                        <iframe width="260" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=<?= $property->latlong() ?>&amp;spn=40.915036,86.572266&amp;t=m&amp;z=15&amp;output=embed"></iframe>
                                    </div>
                                    <!-- End sidebar-box map-box -->
                                    <!-- sidebar-box product_list_wg -->
                                    <div class="sidebar-box">
                                        <h3><?= $similarProperties ?></h3>
                                        <ul class="product_list_wg">
                                            <?php 
                                            for ($i=0; $i<3; $i++) {
                                            ?>
                                            <li>
                                                <div class="clearfix">
                                                    <a href="buy-property.php?sslapi=<?= uniqid().date('sihdmY') ?>&baohyu=<?= $property->id() ?>&nuwapk=<?= date('ihsdmY') ?>">
                                                        <img width="90" height="54" alt="" class="thumbnail_pic" src="<?= $properties[$i]->img1() ?>">
                                                        <div class="amount"><?= $properties[$i]->$propertyName() ?></div>
                                                        <?php //$companyName ?>
                                                    </a>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End sidebar-box product_list_wg -->
                                </div>
                            </div>
                            <!-- End Sidebar left  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN FOOTER -->
        <?php include('include/footer.php'); ?>
        <!-- END FOOTER -->
        <!-- Always latest version of jQuery-->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Some scripts that are used in almost every page -->
        <script src="js/tinynav/tinynav.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/tabber/tabber.js"></script>
        <!-- Load template main javascript file -->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ===================================================== -->
        <!-- ================ Property-detail page only scripts ============ -->
        <script src="js/flexflider/jquery.flexslider-min.js"></script>
        <script src="js/colorbox/jquery.colorbox.js"></script>
        <script type="text/javascript">
        /* <![CDATA[ */
        jQuery(function($){
          $('#pic-control').flexslider({
            animation: "slide",
            controlNav: false,
        
            animationLoop: false,
            slideshow: false,
            itemWidth: 55,
            itemMargin: 10,
            maxItems: 7,
            asNavFor: '#pic-detail'
          });
        
          $('#pic-detail').flexslider({
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#pic-control",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        
          $(".detailbox").colorbox({rel:'detailbox'});
        });
        /* ]]> */
        </script>
    </body>
</html>