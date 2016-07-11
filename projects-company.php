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
    $companyManager = new CompanyManager($pdo);
    $projectManager = new ProjectManager($pdo);
    $projectPictureManager = new ProjectPictureManager($pdo);
    //objs and vars
    $idCompany = $_GET['pocnzam'];
    $companies = $companyManager->getCompanys();
    $projects = $projectManager->getProjectsByIdCompany($idCompany);
    $company = $companyManager->getCompanyById($idCompany);
    //language settings
    $pageTitle = $company->name();
    $midPageTitle = "";
    $moreButton = "";
    $residence = "";
    //tests
    if ( $_SESSION['lang'] == "ar" ) {
        $pageTitle = "مشاريع ".$pageTitle;
        $residence = "إقامة";
        $moreButton = "المزيد";
        $midPageTitle = "مشاريع "."<strong>".ucfirst($company->name())."</strong>";
        $projectName = "nameArabic";    
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        $pageTitle = $pageTitle." Projets";
        $residence = "Résidence ";
        $moreButton = "Voir plus";
        $midPageTitle = "Les projets de <strong>".ucfirst($company->name())."</strong>";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "de" ) {
        $pageTitle = $pageTitle." Projekte";
        $residence = "Residenz ";
        $moreButton = "Mehr";
        $midPageTitle = "<strong>".ucfirst($company->name())."</strong> Projekte";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "es" ) {
        $pageTitle = $pageTitle." Proyectos";
        $residence = "Residencia";
        $moreButton = "Ver más";
        $midPageTitle = "Proyectos de <strong>".ucfirst($company->name())."</strong>";
        $projectName = "name";
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        $pageTitle = $pageTitle." Projecten";
        $residence = "Residentie";
        $moreButton = "Meer";
        $midPageTitle = "<strong>".ucfirst($company->name())."</strong> Projecten";
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
    </head>
    <body>
        <!-- BEGIN HEADER -->
        <?php include('include/header.php') ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTENT -->
        <div class="main-content">  
            <div class="properties">
                <div class="container">
                <!-- Full width 1 -->
                    <div class="grid_full_width" id="fullwidth1">
                        <div class="all-text">
                            <h3><?= $midPageTitle ?></h3>
                        </div>
                        <div class="shop-nav clearfix">
                            <div class="row">
                                <!--div class="span6">
                                    <div class="list-grid inleft">
                                        <ul>
                                            <li><a class="active" href="projects.php"><i class="grid2list"></i></a></li>
                                            <li><a href="projects-4column.php"><i class="grid4col"></i></a></li>
                                            <li><a href="projects-3column.php"><i class="grid3col"></i></a></li>
                                        </ul>
                                    </div>
                                </div-->
                                <!--div class="span6">
                                    <div class="ordering pull-right">
                                        <select class="orderby">
                                            <option>Price, Low to High</option>
                                            <option>Sort by most recent</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                </div-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="grid_list_product">
                                <ul class="products" id="able-list">
                                    <?php 
                                    foreach ( $projects as $project ) { 
                                        $picture =  $projectPictureManager->getFirstProjectPictureByIdProject($project->id());
                                        $company = $companyManager->getCompanyById($project->idCompany());    
                                    ?>    
                                    <a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $project->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>">
                                    <li style="display: block;" class="span12 first house offices Residential">
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="span4">
                                                    <div class="imagewrapper">
                                                        <img alt="" width="300" height="180" src="<?= $picture->url() ?>">
                                                        <!--span class="price"> 30 Appartements/ 20 Locaux commerciaux</span-->
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="list-right-info">
                                                        <div class="row">
                                                            <div class="span4">
                                                                <h3><a href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $project->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $residence." ".$project->$projectName() ?></a></h3>
                                                            </div>
                                                            <div class="span4">
                                                                <ul class="title-info">
                                                                    <li><?= $project->description() ?></li>
                                                                    <a class="btn btn-primary" href="project-detail.php?norebvhksol=<?= uniqid().date('sihdmY') ?>&ahbfncli=<?= $project->id() ?>&bnufUizekP=<?= date('ihsdmY') ?>"><?= $moreButton ?></a>
                                                                    <!--li>Société <span> <?php //$company->name() ?></span></li>
                                                                    <li>Date création <span> <?php //date('d/m/Y', strtotime($project->birthDate())) ?></span></li>
                                                                    <li>Titre <span> <?php //$project->titre() ?></span></li>
                                                                    <li>Superficie <span><?php //ceil($project->size()) ?> m<sup>2</sup></span></li>
                                                                    <li>Adresse <span><?php //$project->adress() ?></span></li>
                                                                    <li>Avancement Gros Oeuvres <span> <?php //$project->construction() ?>%</span></li>
                                                                    <li>Avancement Finition <span> <?php //$project->finition() ?>%</span></li-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </a>
                                    <?php } ?>
                                </ul>
                            </div>
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
        <!-- END CONTENT -->
        <!-- BEGIN FOOTER -->
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
    </body>
</html>

