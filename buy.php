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
    include('include/config.php');
    if ( isset($_GET['lang']) ) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    else if ( !isset($_GET['lang']) and !isset($_SESSION['lang']) ){
        $_SESSION['lang'] = "ar";    
    }
    $propertyManager = new PropertyManager($pdo);
    $properties = $propertyManager->getPropertyForSale();
    //language settings
    $pageTitle = "";
    $title = "";
    $moreButton = "";
    $all = "";
    $apartment = "";
    $house = "";
    $office = "";
    $land = "";
    $store = "";
    //property settings
    $propertyName = "";
    $category = "";
    $phone = "";
    if ( $_SESSION['lang'] == "ar" ) {
        $pageTitle = "شراء";
        $title = "للبيع";  
        $all = "جميع";
        $apartment = "شقق";
        $house = "منازل";
        $office = "مكاتب";
        $land = "أراضي";
        $store = "محلات تجارية"; 
        $propertyName = "nameAR";
        $phone = "الهاتف";
        $moreButton = "المزيد";
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        $pageTitle = "Acheter";
        $title = "à vendre";
        $all = "Tout";
        $apartment = "Appartement";
        $house = "Maison";
        $office = "Bureau";
        $land = "Terrain";
        $store = "Local commercial"; 
        $propertyName = "nameFR";
        $phone = "Téléphone";
        $moreButton = "Voir";
    }
    else if ( $_SESSION['lang'] == "de" ) {
        $pageTitle = "Kaufen";
        $title = "Zu Verkaufen";
        $all = "Alle";
        $apartment = "Wohnung";
        $house = "Haus";
        $office = "Büro";
        $land = "Bauland";
        $store = "Geschäfte"; 
        $propertyName = "nameDE";
        $phone = "Telefon";
        $moreButton = "Mehr";
    }
    else if ( $_SESSION['lang'] == "es" ) {
        $pageTitle = "Comprar";
        $title = "En Venta";
        $all = "Todos";
        $apartment = "Apartamento";
        $house = "Casa";
        $office = "Oficina";
        $land = "Terreno";
        $store = "Tienda";
        $propertyName = "nameES";
        $phone = "Teléfono";
        $moreButton = "Ver Más";
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        $pageTitle = "Kopen";
        $title = "Te Koop";
        $all = "Alle";
        $apartment = "Appartement";
        $house = "Huis";
        $office = "Office";
        $land = "Bouwgrond";
        $store = "Shops";
        $propertyName = "nameNL";
        $phone = "Telefoon";
        $moreButton = "Meer";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nadobilier | <?= $pageTitle ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Your styles -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/flexslider/flexslider.css" rel="stylesheet" media="screen">
        <link href="css/colorbox/colorbox.css" rel="stylesheet" media="screen">
        <link href="css/tabber/tabber.css" rel="stylesheet" media="screen">
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
        <!-- header begin -->
        <?php include('include/header.php'); ?>
        <!-- header end -->
        <!-- BEGIN CONTENT  -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <!-- Grid full width 3 column -->
                    <div class="grid_full_width content-margin-top" id="3column">
                        <h1><?= $title ?></h1>
                        <div class="filter-pro clearfix">
                            <div class="row">
                                <div class="span12">
                                    <ul id="able-filter">
                                        <li><a href="#all" title=""><?= $all ?></a></li>
                                        <li><a href="#house" title="" rel="house"><?= $house ?></a></li>
                                        <li><a href="#offices" title="" rel="offices"><?= $office ?></a></li>
                                        <li><a href="#apartment" title="" rel="apartment"><?= $apartment ?></a></li>
                                        <li><a href="#residential" title="" rel="residential"><?= $store ?></a></li>
                                        <li><a href="#land" title="" rel="land"><?= $land ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="products" id="able-list">
                                <?php
                                foreach( $properties as $property ) {
                                ?>
                                <li class="span4 <?= $property->category() ?>">
                                  <div class="product-item">
                                    <div class="imagewrapper">
                                      <img alt="" width="300" height="180" src="<?= $property->img4() ?>">
                                      <span class="price"><a class="more-button" href="buy-property.php?sslapi=<?= uniqid().date('sihdmY') ?>&baohyu=<?= $property->id() ?>&nuwapk=<?= date('ihsdmY') ?>"><?= $moreButton ?></a></span>
                                    </div>
                                    <h3><a href="buy-property.php?sslapi=<?= uniqid().date('sihdmY') ?>&baohyu=<?= $property->id() ?>&nuwapk=<?= date('ihsdmY') ?>" title=""><?= $property->$propertyName() ?></a></h3>
                                    <ul class="title-info">
                                      <li>Bathrooms <span> 1</span> </li>
                                      <li><?= $phone ?> <span> <?= $property->phone() ?></span></li>
                                      <li>Square Footage <span>3200 sqft</span></li>
                                      <li>Type: <span>Residential</span></li>
                                    </ul>
                                  </div>
                                </li>
                                <?php
                                }
                                ?>
                                <!--li class="span4 product last house offices apartment">
                                  <div class="product-item">
                                    <div class="imagewrapper">
                                      <img alt="" width="300" height="180" src="img/imgdemo/300x180.gif">
                                      <span class="price"> $358.000</span>
                                    </div>
                                    <h3><a href="property_detail.html" title=""> 3900 Rum Row</a></h3>
                                    <ul class="title-info">
                                      <li>Bathrooms <span> 1</span> </li>
                                      <li>Bathrooms <span> 1</span></li>
                                      <li>Square Footage <span>3200 sqft</span></li>
                                      <li>Type: <span>Residential</span></li>
                                    </ul>
                                  </div>
                                </li>
                                <li class="span4 product first offices apartment Residential">
                                  <div class="product-item">
                                    <div class="imagewrapper">
                                      <img alt="" width="300" height="180" src="img/imgdemo/300x180.gif">
                                      <span class="price"> $358.000</span>
                                    </div>
                                    <h3><a href="property_detail.html" title=""> 1085 Nelsons Walk </a></h3>
                                    <ul class="title-info">
                                      <li>Bathrooms <span> 1</span> </li>
                                      <li>Bathrooms <span> 1</span></li>
                                      <li>Square Footage <span>3200 sqft</span></li>
                                      <li>Type: <span>Residential</span></li>
                                    </ul>
                                  </div>
                                </li>
                                <li class="span4 house offices apartment Residential">
                                  <div class="product-item">
                                    <div class="imagewrapper">
                                      <img alt="" width="300" height="180" src="img/imgdemo/300x180.gif">
                                      <span class="price"> $358.000</span>
                                    </div>
                                    <h3><a href="property_detail.html" title=""> 3675 Gordon Dr </a></h3>
                                    <ul class="title-info">
                                      <li>Bathrooms <span> 1</span> </li>
                                      <li>Bathrooms <span> 1</span></li>
                                      <li>Square Footage <span>3200 sqft</span></li>
                                      <li>Type: <span>Residential</span></li>
                                    </ul>
                                  </div>
                                </li>
                                <li class="span4 product last house offices Residential">
                                  <div class="product-item">
                                    <div class="imagewrapper">
                                      <img alt="" width="300" height="180" src="img/imgdemo/300x180.gif">
                                      <span class="price"> $358.000</span>
                                    </div>
                                    <h3><a href="property_detail.html" title=""> 204 temporibus vis  </a></h3>
                                    <ul class="title-info">
                                      <li>Bathrooms <span> 1</span> </li>
                                      <li>Bathrooms <span> 1</span></li>
                                      <li>Square Footage <span>3200 sqft</span></li>
                                      <li>Type: <span>Residential</span></li>
                                    </ul>
                                  </div>
                                </li-->
                            </ul>
                        </div>
                        <!-- Page-ination -->
                        <!--div class="page-ination">
                          <div class="page-in">
                            <ul class="clearfix">
                              <li><a href="#"><img alt="" src="img/icon/pre2.png"></a></li>
                              <li><a href="#"><img alt="" src="img/icon/pre1.png"></a></li>
                              <li><a class="current" href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#"><img alt="" src="img/icon/next1.png"></a></li>
                              <li><a href="#"><img alt="" src="img/icon/next2.png"></a></li>
                            </ul>
                          </div>
                        </div-->
                        <!-- End Page-ination -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT  -->
        <!-- footer begin -->
        <?php include('include/footer.php'); ?>
        <!-- footer end -->
        <div id='bttop'>BACK TO TOP</div>
        <!-- Always latest version of jQuery-->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Some scripts that are used in almost every page -->
        <script src="js/tinynav/tinynav.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/tabber/tabber.js"></script>
        <script src="js/filterable/filterable.js"></script>
        <script src="js/colorbox/jquery.colorbox.js"></script>
        <!-- Load template main javascript file -->
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">/* <![CDATA[ */jQuery(function($){$(".gallerybox").colorbox({rel:'gallerybox'});}); /* ]]> */</script>
    </body>
</html>