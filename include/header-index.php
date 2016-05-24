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
                                <a href="index.php"><img src="img/icon/flags/french.png" alt="FR" />&nbsp;Français</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php"><img src="img/icon/flags/german.png" alt="DE" />&nbsp;Deutschland</a></li>
                                    <li><a href="index.php"><img src="img/icon/flags/netherlands.png" alt="NL" />&nbsp;Nederland</a></li>
                                    <li><a href="index.php"><img src="img/icon/flags/spain.png" alt="ES" />&nbsp;Español</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </li>
                            <li class="active"><a class="brand" href="index.php" title="">Accueil</a></li>
                            <li <?php if ($currentPage == "projects.php" or $currentPage == "project-detail.php"){ echo 'class="active"'; } ?> ><a href="projects.php" title="">Projets</a></li>
                            <li <?php if ($currentPage == "companies.php"){ echo 'class="active"'; } ?> ><a href="companies.php" title="">Partenaires</a></li>
                            <li <?php if ($currentPage == "about.php"){ echo 'class="active"'; } ?> ><a href="about.php" title="">A propos</a></li>
                            <li class="dropdown">
                                <a class="active dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">pages  </a>
                                <ul class="dropdown-menu">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="faq_sidebar.html">FAG</a></li>
                                    <li><a href="404.html">404-page</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </li>
                            <li <?php if ($currentPage == "contact.php"){ echo 'class="active"'; } ?> ><a href="contact.php" title="">Contact</a></li>
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
                                        <!--span>140 SPRING LANES <br/>BEVERLY HILLS</span-->
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
                                        <!--span>140 SPRING LANES <br/>BEVERLY HILLS</span-->
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