<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="container">
        <div class="top-header">
            <div class="realestate-logo pull-left">
                <a href="index.php" title=""><img alt="" src="img/logo.png"></a>
            </div>
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
                        <li><a class="brand" href="index.php" title="">Accueil</a></li>
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
    <div class="row-fluid">
        <!-- Banner -->
        <div class="row-fluid">
            <div class="span12">
                <section class="pic-cat">
                    <img width="1900" height="200" alt="" src="img/imgdemo/1900x200.gif">
                </section>
            </div>
        </div>
        <!-- End banner -->
    </div>
</header>