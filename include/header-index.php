<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="container">
        <div class="top-header">
        <!-- Logo -->
            <div class="realestate-logo pull-left"><a href="index.php" title=""> <img alt="" src="img/logo.png"></a></div>
            <!-- End Logo -->
            <!-- Menu --> 
                <div class="menu-navbar  pull-right">
                    <div class="navbar">
                        <ul class="nav" id="navmenu">
                            <li class="dropdown">
                                <!--a class="active dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">LANG</a-->
                                <?php
                                $langTitle = "";
                                $langLink = "";
                                $langIcon = "";
                                $langAlt = "";
                                //menuElements
                                $menuTitles = array();
                                if ( $_SESSION['lang'] == "ar" ) {
                                    $langTitle = "ع";
                                    $langLink = "index.php?lang=ar";
                                    $langIcon = "img/icon/flags/arabic.png";
                                    $langAlt = "AR";  
                                    $menuTitles[0] = "مشاريع سكنية";
                                    $menuTitles[1] = "شركاؤنا";
                                    $menuTitles[2] = "اتصل بنا";
                                    $menuTitles[3] = "اتصل بنا";
                                    $menuTitles[4] = "كراء";
                                    $menuTitles[5] = "شراء";
                                }
                                else if ( $_SESSION['lang'] == "fr" ) {
                                    $langTitle = "FR";
                                    $langLink = "index.php?lang=fr";
                                    $langIcon = "img/icon/flags/french.png";
                                    $langAlt = "FR";
                                    $menuTitles[0] = "Projets";
                                    $menuTitles[1] = "Partenaires";
                                    $menuTitles[2] = "Contact";
                                    $menuTitles[3] = "Contact";
                                    $menuTitles[4] = "Louer";
                                    $menuTitles[5] = "Acheter";    
                                }
                                else if ( $_SESSION['lang'] == "es" ) {
                                    $langTitle = "ES";
                                    $langLink = "index.php?lang=es";
                                    $langIcon = "img/icon/flags/spain.png";
                                    $langAlt = "";
                                    $menuTitles[0] = "Proyectos";
                                    $menuTitles[1] = "Socios";
                                    $menuTitles[2] = "Contacto";
                                    $menuTitles[3] = "Contacto";
                                    $menuTitles[4] = "Alquilar";
                                    $menuTitles[5] = "Comprar";    
                                }
                                else if ( $_SESSION['lang'] == "de" ) {
                                    $langTitle = "DE";
                                    $langLink = "index.php?lang=de";
                                    $langIcon = "img/icon/flags/german.png";
                                    $langAlt = "DE";    
                                    $menuTitles[0] = "Projekte";
                                    $menuTitles[1] = "Partner";
                                    $menuTitles[2] = "Kontakt";
                                    $menuTitles[3] = "Kontakt";
                                    $menuTitles[4] = "Mieten";
                                    $menuTitles[5] = "Kaufen";
                                }
                                else if ( $_SESSION['lang'] == "nl" ) {
                                    $langTitle = "NL";
                                    $langLink = "index.php?lang=de";
                                    $langIcon = "img/icon/flags/netherlands.png";
                                    $langAlt = "NL";    
                                    $menuTitles[0] = "Projecten";
                                    $menuTitles[1] = "Partner";
                                    $menuTitles[2] = "Contact";
                                    $menuTitles[3] = "Contact";
                                    $menuTitles[4] = "Huur";
                                    $menuTitles[5] = "Kopen";
                                }
                                ?>
                                <a href="<?php //$langLink ?>"><img src="<?= $langIcon ?>" alt="<?= $langAlt ?>" />&nbsp;<?= $langTitle ?></a>
                                <ul class="dropdown-menu">
                                    <?php if ( $_SESSION['lang'] !="ar" ) { ?>
                                    <li><a href="index.php?lang=ar"><img src="img/icon/flags/arabic.png" alt="AR" />&nbsp;العربية</a></li>
                                    <?php } ?>
                                    <?php if ( $_SESSION['lang'] !="fr" ) { ?>
                                    <li><a href="index.php?lang=fr"><img src="img/icon/flags/french.png" alt="FR" />&nbsp;Français</a></li>
                                    <?php } ?>
                                    <?php if ( $_SESSION['lang'] !="de" ) { ?>
                                    <li><a href="index.php?lang=de"><img src="img/icon/flags/german.png" alt="DE" />&nbsp;Deutsch</a></li>
                                    <?php } ?>
                                    <?php if ( $_SESSION['lang'] !="nl" ) { ?>
                                    <li><a href="index.php?lang=nl"><img src="img/icon/flags/netherlands.png" alt="NL" />&nbsp;Nederland</a></li>
                                    <?php } ?>
                                    <?php if ( $_SESSION['lang'] !="es" ) { ?>
                                    <li><a href="index.php?lang=es"><img src="img/icon/flags/spain.png" alt="ES" />&nbsp;Español</a></li>
                                    <?php } ?>
                                </ul>
                                <div class="clearfix"></div>
                            </li>
                            <li <?php if ($currentPage == "index.php"){ echo 'class="active"'; } ?> ><a class="brand" href="index.php" title="">Accueil</a></li>
                            <li <?php if ($currentPage == "rent.php"){ echo 'class="active"'; } ?> ><a href="rent.php" title=""><?= $menuTitles[4] ?></a></li>
                            <li <?php if ($currentPage == "buy.php"){ echo 'class="active"'; } ?> ><a href="buy.php" title=""><?= $menuTitles[5] ?></a></li>
                            <li <?php if ($currentPage == "projects.php" or $currentPage == "project-detail.php"){ echo 'class="active"'; } ?> ><a href="projects.php" title=""><?= $menuTitles[0] ?></a></li>
                            <li <?php if ($currentPage == "companies.php"){ echo 'class="active"'; } ?> ><a href="companies.php" title=""><?= $menuTitles[1] ?></a></li>
                            <li <?php if ($currentPage == "about.php"){ echo 'class="active"'; } ?> ><a href="about.php" title=""><?= $menuTitles[2] ?></a></li>
                            <!--li <?php //if ($currentPage == "contact.php"){ echo 'class="active"'; } ?> ><a href="contact.php" title=""><?php //echo $menuTitles[3] ?></a></li-->
                        </ul>
                    </div>
                </div>
                <!-- End Menu -->
            </div>
        </div>
        <!-- Slider Home -->
        <!-- Flexslider -->
        <div id="slider-home" class="row-fluid slider-home">
            <div class="span12">
                <section class="slider">
                    <div id="main-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                        <span>L'immobilier à Nador <br/>Nouvel horizon</span>
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider0.jpg" />
                            </li>
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                        <span>L'immobilier à Nador <br/>Nouvel horizon</span>
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider1.jpg" />
                            </li>
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                        <span>Trouvez le logement <br/> de vos rêves à Nador</span>
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider2.jpg" />
                            </li>
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider3.jpg" />
                            </li>
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                        <span>Des appartements <br/>de luxe</span>
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider4.jpg" />
                            </li>
                            <li>
                                <div class="container flex-caption">
                                    <div class="title">
                                    </div>
                                </div>
                                <img alt="" width="1440" height="600" src="img/slider/slider5.jpg" />
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Flexslider -->
        <!-- End Slider home -->
</header>