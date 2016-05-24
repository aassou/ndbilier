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
    //obj and vars
    $companies = $companyManager->getCompanys();
    $projects = $projectManager->getProjects();
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
        <!--BEGIN CONTENT -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <div class="grid_full_width gird_sidebar">
                        <div class="row">
                        <!-- Main content -->
                            <div class="span8">
                            <!-- Contact -->
                                <div class="contact">
                                    <h1> Nous contactez </h1>
                                    <div class="contact-bor">
                                        <!--div class="infotext">
                                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. 
                                        </div-->
                                        <div class="map"><iframe width="580" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=35.168438, -2.927430&amp;spn=40.915036,86.572266&amp;t=m&amp;z=4&amp;output=embed"></iframe></div>
                                            <div class="add-contact">
                                                <div class="row">
                                                    <div class="span280px">
                                                        <h6>Adresse</h6>
                                                        Nador. 
                                                    </div>
                                                    <div class="span280px pull-right">
                                                        <strong>Téléphone</strong>. 06.13.06.43.30 <br/>
                                                        <!--strong>Fax.</strong> 012.666.999 <br/-->
                                                        <strong>Email.</strong> <a href="mailto:contact@nadobilier.com?subject=SweetWords &body=Please send me a copy of your new program!">contact@nadobilier.com</a> <br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-form">
                                            <form>
                                                <div class="row">
                                                    <div class="span280px">
                                                        <label>Nom</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="span280px pull-right">
                                                        <label>Email*</label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <label>Message*</label>
                                                <textarea rows="10"></textarea>
                                                <button class="button-send" type="button">Ok</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End contact -->
                                </div>
                                <!-- End Main content -->        
                                <!-- Sidebar left  -->
                                <div class="span4">
                                    <!-- Box Siderbar -->
                                    <div class="box-siderbar-container">
                                    <!-- sidebar-box tabsidebar -->
                                        <div class="sidebar-box tabsidebar">
                                            <div class="tabber">
                                                <div class="tabbertab">
                                                    <h2>Nouveaux Projets</h2>
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
                                            </div>
                                        </div>
                                        <!-- End sidebar-box tabsidebar -->
                                    </div>
                                    <!-- End Box Siderbar -->
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
            <!-- End footer -->
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