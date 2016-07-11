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
    //session_start();
    include('include/config.php');
    //class managers
    $companyManager = new CompanyManager($pdo);
    $projectManager = new ProjectManager($pdo);
    $projectPictureManager = new ProjectPictureManager($pdo);
    //objs and vars
    $companies = $companyManager->getCompanys();
    $projects = $projectManager->getProjects();
    session_start();
    if ( isset($_GET['lang']) ) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    else if ( !isset($_GET['lang']) and !isset($_SESSION['lang']) ){
        $_SESSION['lang'] = "ar";    
    }
    //languages settings
    $pageTitle = "";
    $residence = "";
    $midPageTitle = "";
    $moreButton = "";
    //tests
    if ( $_SESSION['lang'] == "ar" ) {
        $pageTitle = "?????? ???????";
        $residence = "?????";
        $midPageTitle = "?????? ?????";
        $moreButton = "??????";
        $projectName = "nameArabic";    
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        $pageTitle = "Immobilier Nador";
        $residence = "Résidence ";
        $midPageTitle = "Nouveaux Projets";
        $moreButton = "Voir plus";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "de" ) {
        $pageTitle = "Nador Immobilien";
        $residence = "Residenz ";
        $midPageTitle = "Neue Projekte";
        $moreButton = "Mehr";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "es" ) {
        $pageTitle = "Inmuebles Nador";
        $residence = "Residencia";
        $midPageTitle = "Nuevos Proyectos";
        $moreButton = "Ver más";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        $pageTitle = "Nador Real estate";
        $residence = "Residentie";
        $midPageTitle = "Nieuwe Projecten";
        $moreButton = "Meer";
        $projectName = "name";
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
        <link href="css/tabber/tabber.css" rel="stylesheet" media="screen">
        <link href="css/styles.css" rel="stylesheet" media="screen">
        <link href="css/responsive.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
        <!--[if lt Ie 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- styles for Ie -->
    </head>
    <body>
        <!-- BEGIN HEADER -->
            <?php include('include/header-index.php') ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTENT -->
        <div class="main-content">
            <!-- Properties -->
            <div class="properties">
                <!-- Properties scroll -->
                <!-- Nicescroll -->
                <div id="property-scroll" class="container">
                    <div id="wrapper">
                        <div class="box">
                            <div class="scroll-properties clearfix">
                                <div class="row col-home">
                                    <div class="span6">
                                        <div class="container-big">
                                            <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[0]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                <img class="img-height-big" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[0]->id())->url() ?>">
                                            </a>
                                            <article class="text-big">
                                                <div class="infotexthv">
                                                    <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[0]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"> <?= $residence ?> <?= $projects[0]->$projectName() ?></a></h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="row divspace">
                                            <div class="span3">
                                                <div class="container-small">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[1]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[1]->id())->url() ?>">
                                                    </a>
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[1]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[1]->$projectName() ?></a></h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[2]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[2]->id())->url() ?>">
                                                        </a>
                                                        <article class="text-small">        
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[2]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[2]->$projectName() ?></a></h3>          
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[3]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[3]->id())->url() ?>">
                                                        </a>
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[3]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[3]->$projectName() ?></a></h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[4]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[4]->id())->url() ?>">
                                                        </a>    
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[4]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[4]->$projectName() ?></a></h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span6"> 
                                            <div class="container-big">
                                                <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[5]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                    <img class="img-height-big" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[5]->id())->url() ?>">
                                                </a>
                                                <article class="text-big">
                                                    <div class="infotexthv">
                                                        <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[5]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[5]->$projectName() ?></a></h3>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="row divspace">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[6]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[6]->id())->url() ?>">
                                                        </a>    
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[6]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"> <?= $residence ?> <?= $projects[6]->$projectName() ?></a></h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[7]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[7]->id())->url() ?>">
                                                        </a>    
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[7]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"> <?= $residence ?> <?= $projects[7]->$projectName() ?></a></h3>                                                               
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[8]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[8]->id())->url() ?>">
                                                        </a>
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[8]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[8]->$projectName() ?></a></h3>      
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[9]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                            <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[9]->id())->url() ?>">
                                                        </a>
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[9]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[9]->$projectName() ?> </a> </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nicescroll -->
                    <!-- End Scroll -->
                    <!-- Properties List -->
                    <div class="properties">
                        <div class="container">
                            <!-- Grid full width 3 column -->
                            <div class="grid_full_width" id="3column">
                                <div class="all-text">
                                    <h3><?= $midPageTitle ?></h3>
                                </div>
                                <div class="row">
                                    <ul class="products" id="able-list">
                                        <li style="display: block;" class="span4 first house offices Residential">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[10]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[10]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[10]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[10]->$projectName() ?> </a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 house offices apartment Residential">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[11]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[11]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[11]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"> <?= $residence ?> <?= $projects[11]->$projectName() ?></a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[12]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[12]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[12]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[12]->$projectName() ?></a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[13]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>" >
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[13]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[13]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>" ><?= $residence ?> <?= $projects[13]->$projectName() ?></a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[14]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[14]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[14]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[14]->$projectName() ?></a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[15]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                                        <img alt="" class="products-images" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[15]->id())->url() ?>">
                                                    </a>
                                                </div>
                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $projects[15]->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence ?> <?= $projects[15]->$projectName() ?></a></h3>
                                                <ul class="title-info">
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Page-ination -->
                                <div class="page-ination">
                                  <div class="page-in">
                                    <ul class="clearfix">
                                      <!--li><a href="#"><img alt="" src="img/icon/pre2.png"></a></li-->
                                      <!--li><a href="#"><img alt="" src="img/icon/pre1.png"></a></li>
                                      <li><a class="current" href="#">1</a></li-->
                                      <li><a class="current" href="projects.php"><?= $moreButton ?></a></li>
                                      <!--li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#"><img alt="" src="img/icon/next1.png"></a></li>
                                      <li><a href="#"><img alt="" src="img/icon/next2.png"></a></li-->
                                    </ul>
                                  </div>
                                </div>
                                <!-- End Page-ination -->
                            </div>
                        </div>
                    </div>
                    <!-- End Properties List -->  
                </div>
                <!-- End Properties -->
            </div>
        <!-- END CONTENT -->
        <!-- FOOTER -->
        <?php include('include/footer.php') ?>
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
        <!-- ================ Index page only scripts ============ -->
        <script src="js/flexflider/jquery.flexslider-min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.js"></script>
        <script src="js/filterable/filterable.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function($){
                $('#main-slider').flexslider();
                jQuery('.box').niceScroll({
                    autohidemode:false,
                    scrollspeed: 100,
                    cursorcolor: '#3366CC',
                    cursorwidth: '15px',
                    cursorborderradius: '0px',
                    cursorborder: '0',
                    background: '#dddddd'
                });
            });
            /* ]]> */
        </script>
    </body>
</html>

