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
                                            <img class="img-height-big" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[0]->id())->url() ?>">
                                            <article class="text-big">
                                                <div class="infotexthv">
                                                    <h3><a href="project-detail.php?idProject=<?= $projects[0]->id() ?>" title=""> Résid. <?= $projects[0]->name() ?></a> </h3>
                                                    <p><?= $projects[0]->description() ?>.</p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="row divspace">
                                            <div class="span3">
                                                <div class="container-small">
                                                    <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[1]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[1]->id() ?>" title=""> Résid. <?= $projects[1]->name() ?> </a> </h3>
                                                                <p><?= $projects[1]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[2]->id())->url() ?>">
                                                        <article class="text-small">        
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[2]->id() ?>" title=""> Résid. <?= $projects[2]->name() ?> </a> </h3>
                                                                <p><?= $projects[2]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[3]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[3]->id() ?>" title=""> Résid. <?= $projects[3]->name() ?> </a> </h3>
                                                                <p><?= $projects[3]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[4]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[4]->id() ?>" title=""> Résid. <?= $projects[4]->name() ?> </a> </h3>
                                                                <p><?= $projects[4]->description() ?>.</p>
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
                                                <img class="img-height-big" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[5]->id())->url() ?>">
                                                <article class="text-big">
                                                    <div class="infotexthv">
                                                        <h3><a href="project-detail.php?idProject=<?= $projects[5]->id() ?>" title=""> Résid. <?= $projects[5]->name() ?></a> </h3>
                                                        <p><?= $projects[5]->description() ?>.</p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="row divspace">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[6]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[6]->id() ?>" title=""> Résid. <?= $projects[6]->name() ?> </a> </h3>
                                                                <p><?= $projects[6]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[7]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[7]->id() ?>" title=""> Résid. <?= $projects[7]->name() ?> </a> </h3>
                                                                <p><?= $projects[7]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[8]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[8]->id() ?>" title=""> Résid. <?= $projects[8]->name() ?> </a> </h3>
                                                                <p><?= $projects[8]->description() ?>.</p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="span3">
                                                    <div class="container-small">
                                                        <img class="img-height" alt="" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[9]->id())->url() ?>">
                                                        <article class="text-small">
                                                            <div class="infotexthv">
                                                                <h3><a href="project-detail.php?idProject=<?= $projects[9]->id() ?>" title=""> Résid. <?= $projects[9]->name() ?> </a> </h3>
                                                                <p><?= $projects[9]->description() ?>.</p>
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
                                    <h3>Nouveaux Projets </h3>
                                </div>
                                <div class="row">
                                    <ul class="products" id="able-list">
                                        <li style="display: block;" class="span4 first house offices Residential">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[10]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[10]->id() ?>" title=""> Résid. <?= $projects[10]->name() ?> </a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[10]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[10]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[10]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[10]->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 house offices apartment Residential">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[11]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[11]->id() ?>" title=""> Résid. <?= $projects[11]->name() ?> </a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[11]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[11]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[11]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[11]->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[12]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[12]->id() ?>" title=""> Résid. <?= $projects[12]->name() ?></a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[12]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[12]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[12]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[12]->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[13]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[13]->id() ?>" title=""> Résid. <?= $projects[13]->name() ?></a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[13]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[13]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[13]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[13]->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[14]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[14]->id() ?>" title=""> Résid. <?= $projects[14]->name() ?></a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[14]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[14]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[14]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[14]->finition() ?>%</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="span4 product last house offices apartment">
                                            <div class="product-item">
                                                <div class="imagewrapper">
                                                    <img alt="" width="300" height="180" src="<?= $projectPictureManager->getFirstProjectPictureByIdProject($projects[15]->id())->url() ?>">
                                                </div>
                                                <h3><a href="project-detail.php?idProject=<?= $projects[15]->id() ?>" title=""> Résid. <?= $projects[15]->name() ?></a></h3>
                                                <ul class="title-info">
                                                    <li>Titre <span> <?= $projects[15]->titre() ?></span></li>
                                                    <li>Superficie <span><?= ceil($projects[15]->size()) ?> m<sup>2</sup></span></li>
                                                    <li>Avancement Gros Oeuvres <span> <?= $projects[15]->construction() ?>%</span></li>
                                                    <li>Avancement Finition <span> <?= $projects[15]->finition() ?>%</span></li>
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
                                      <li><a class="current" href="projects.php">Voir plus</a></li>
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

