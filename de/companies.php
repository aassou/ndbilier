<?php
    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('../admin/model/'.$myClass.'.php')){
            include('../admin/model/'.$myClass.'.php');
        }
        elseif(file_exists('../admin/controller/'.$myClass.'.php')){
            include('../admin/controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad");
    //classes loading end
    //session_start();
    include('../include/config.php');
    //class managers
    $companyManager = new CompanyManager($pdo);
    $companies = $companyManager->getCompanys();
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
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="../css/flexslider/flexslider.css" rel="stylesheet" media="screen">
        <link href="../css/tabber/tabber.css" rel="stylesheet" media="screen">
        <link href="../css/colorbox/colorbox.css" rel="stylesheet" media="screen">
        <link href="../css/iconmoon/iconfont.css" rel="stylesheet" media="screen">
        <link href="../css/styles.css" rel="stylesheet" media="screen">
        <link href="../css/responsive.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
        <!--[if lt Ie 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- BEGIN HEADER -->
        <?php include('include/header.php') ?>    
        <!-- END HEADER  -->
        <!-- BEGIN CONTENT -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <div class="grid_full_width">
                        <!-- Gallery -->
                        <div class="gallery">
                            <!-- Gallery List -->
                            <div class="container">
                                <h3>Nos partenaires </h3>
                                <div class="row">
                                    <ul class="imggallery" id="able-list">
                                    <?php 
                                    foreach ( $companies as $company ) {
                                    ?>
                                        <li class="span4 house offices residential">
                                            <div class="piclist">
                                                <img alt="<?= $company->name() ?>" src="<?= $company->logo() ?>">
                                                <div class="mask">
                                                    <h2><?= $company->name() ?></h2>
                                                    <p><?= $company->description() ?>.</p>
                                                    <div class="info">
                                                        <a href="projects-company.php?idCompany=<?= $company->id() ?>"><span class="icon-link" aria-hidden="true"></span></a>&nbsp;
                                                        <a class="gallerybox"  href="projects-company.php?idCompany=<?= $company->id() ?>" title=""><span class="icon-search-font" aria-hidden="true"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php 
                                    }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Gallery List -->
                        </div>
                        <!-- End Gallery -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN FOOTER -->
        <?php include('include/footer.php') ?>
        <!-- End footer -->
        <!-- Always latest version of jQuery-->
        <script src="../js/jquery-1.8.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Some scripts that are used in almost every page -->
        <script src="../js/tinynav/tinynav.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/tabber/tabber.js"></script>
        <script src="../js/filterable/filterable.js"></script>
        <script src="../js/colorbox/jquery.colorbox.js"></script>
        <!-- Load template main javascript file -->
        <script type="text/javascript" src="../js/main.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function($){
                $(".gallerybox").colorbox({rel:'gallerybox'});
            });
            /* ]]> */
        </script>
    </body>
</html>