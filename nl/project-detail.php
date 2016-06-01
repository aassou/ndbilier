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
    $projectManager = new ProjectManager($pdo);
    $projectPictureManager = new ProjectPictureManager($pdo);
    //objs and vars
    $idProject = $_GET['idProject'];
    $companies = $companyManager->getCompanys();
    $projects = $projectManager->getProjects();
    $project = $projectManager->getProjectById($idProject);
    $pictures = $projectPictureManager->getProjectPicturesByIdProject($idProject);
    $company = $companyManager->getCompanyById($project->idCompany());    
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
        <?php include('include/header.php'); ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTENT -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <div class="grid_full_width gird_sidebar">
                        <div class="row">         
                            <!-- Main content -->
                            <div class="span8">
                            <!-- Property detail -->
                                <div class="property_detail">
                                    <section class="slider-detail">
                                        <div id="pic-detail" class="flexslider">
                                            <ul class="slides">
                                                <?php foreach($pictures as $picture) { ?>
                                                <li>
                                                    <a class="detailbox" href="<?= $picture->url() ?>" title=""><img alt="<?= $picture->name() ?>"  width="620" height="388" src="<?= $picture->url() ?>" /></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div id="pic-control" class="flexslider">
                                            <ul class="slides">
                                                <?php foreach($pictures as $picture) { ?>
                                                <li>
                                                    <img alt="<?= $picture->name() ?>" src="<?= $picture->url() ?>" />
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </section>
                                    <div class="infotext-detail">
                                        <h3><?= $company->name() ?></h3>
                                        <span class="price">Résidence <?= $project->name() ?></span>
                                        <div class="row">
                                            <div class="span260px">
                                                <ul class="title-info">
                                                    <!--li>Société <span> <?php //$company->name() ?></span></li-->
                                                    <li>Titre <span> <?= $project->titre() ?></span></li>
                                                    <li>Date création <span> <?= date('d/m/Y', strtotime($project->birthDate())) ?></span> </li>
                                                    <li>Adresse <span><?= $project->adress() ?></span></li>
                                                </ul>
                                            </div>
                                            <div class="span260px pull-right">
                                                <ul class="title-info">
                                                    <li>Superficie <span><?= ceil($project->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $project->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $project->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="excerpt">
                                            <p><?= $project->description() ?></p>
                                        </div>
                                        <div class="share">
                                            <ul>
                                                <li><a href="#"><img alt=""  src="img/icon/pinshare.jpg"></a></li>
                                                <li><a href="#"><img alt=""  src="img/icon/twittershare.jpg"></a></li>
                                                <li><a href="#"><img alt=""  src="img/icon/faceshare.jpg"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Property -->
                            </div>
                            <!-- End Main content -->
                            <!-- Sidebar left  -->
                            <div class="span4">
                                <div class="box-siderbar-container">
                                <!-- sidebar-box map-box -->
                                    <div class="sidebar-box map-box">
                                        <h3>Addresse</h3>
                                        <iframe width="260" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=34.669359,-95.712891&amp;spn=40.915036,86.572266&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                                    </div>
                                    <!-- End sidebar-box map-box -->            
                                    <!-- sidebar-box our-box -->
                                    <div class="sidebar-box our-box">
                                        <h3>Contact</h3>
                                        <ul>
                                            <li>
                                                <div class="our-border clearfix">
                                                    <div class="our-img"><img alt="" height="90" width="90" src="img/imgdemo/90x90.gif"></div>
                                                    <div class="our-info">
                                                        <h4>No.1</h4>
                                                        <h5>05 36 60 05 00</h5>
                                                        <span>Call. </span>012.666.999 <br/>
                                                        <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">JohnSmith@gmail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End sidebar-box our-box -->
                                    <!-- sidebar-box product_list_wg -->
                                    <div class="sidebar-box">
                                        <h3>Projets similaires</h3>
                                        <ul class="product_list_wg">
                                            <?php 
                                            for ($i=0; $i<3; $i++) {
                                                $pic = $projectPictureManager->getFirstProjectPictureByIdProject($projects[$i]->id()); 
                                                $companyName = $companyManager->getCompanyById($projects[$i]->idCompany())->name();
                                            ?>
                                            <li>
                                                <div class="clearfix">
                                                    <a href="project-detail.php?idProject=<?= $projects[$i]->id() ?>">
                                                        <img width="90" height="54" alt="" class="thumbnail_pic" src="<?= $pic->url() ?>">
                                                        <div class="amount">Résidence <?= $projects[$i]->name() ?></div>
                                                        <?= $companyName ?>
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
        <script src="../js/jquery-1.8.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Some scripts that are used in almost every page -->
        <script src="../js/tinynav/tinynav.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/tabber/tabber.js"></script>
        <!-- Load template main javascript file -->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ===================================================== -->
        <!-- ================ Property-detail page only scripts ============ -->
        <script src="../js/flexflider/jquery.flexslider-min.js"></script>
        <script src="../js/colorbox/jquery.colorbox.js"></script>
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