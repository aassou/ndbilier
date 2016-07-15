<?php
    session_start();
    if ( isset($_GET['lang']) ) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    else if ( !isset($_GET['lang']) and !isset($_SESSION['lang']) ){
        $_SESSION['lang'] = "ar";    
    }
    //language settings
    $pageTitle = "";
    $title = "";
    $message1 = "";
    $message2 = "";
    $message3 = "";
    $message4 = "";
    $messageClass = "about-messages-left";
    $address = "";
    $telefon = "";
    $email = ""; 
    if ( $_SESSION['lang'] == "ar" ) {
        $pageTitle = "اتصل بنا";
        $title = 'مرحبا بكم في موقع <a href="index.php" class="blue-link">Nadobilier.com</a>';
        $message1 = 'هو أول منصة مخصصة لقطاع العقارات في مدينة الناظور <a href="index.php" class="blue-link">Nadobilier.com</a> ';
        $message2 = 'يسمح لك بالبحث عن كافة أنواع العقارات <a href="index.php" class="blue-link">Nadobilier.com</a>'.'<br>'.' شقق ,منازل ,مكاتب ,محلات تجارية أو قطع أرضية ';
        $message3 = 'أنت ترغب في شراء أو بيع أو تأجير أو نشر الممتلكات الخاصة بك، ما عليك سوى زيارة موقنا  وسوف تجد احتياجاتك';
        $message4 = 'لا تتردوا للاتصال بنا للمزيد من المعلومات';
        $address = "شارع النسيم رقم1223 الناظور";
        $telefon = '0613064330';
        $email = '<a href="mailto:contact@nadobilier.com">contact@nadobilier.com</a>';
        $messageClass = "about-messages-right";    
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        $pageTitle = "Contact";
        $title = "Bienvenue chez Nadobilier!";
        $message1 = '<a href="index.php" class="blue-link">Nadobilier.com</a> est la première plateforme dédiée au secteur de l\'immobilier sur la ville Nador.';
        $message2 = '<a href="index.php" class="blue-link">Nadobilier.com</a> vous permet de trouver tous genres de biens immobiliers, que ça soit des appartements, des maisons, des bureaux, des locaux commerciaux ou des terrains.';
        $message3 = 'Vous voulez acheter, vendre, louer ou publier votre bien, il vous suffit de visiter <a href="index.php" class="blue-link">Nadobilier.com</a> et vous trouverez vos besoins.';
        $message4 = 'Si vous avez besoin d\'aide, n\'hésitez pas de nous contacter pour plus d\'informations, soyez les bienvenues.';
        $address = "Rue Annassim N°1223 Nador";
        $telefon = '06 13 06 43 30';
        $email = '<a href="mailto:contact@nadobilier.com">contact@nadobilier.com</a>';
    }
    else if ( $_SESSION['lang'] == "de" ) {
        $pageTitle = "Kontakt";
        $title = "Willkommen Nadobilier!";
        $message1 = '<a href="index.php" class="blue-link">Nadobilier.com</a> ist die erste Plattform für den Immobiliensektor der Stadt Nador gewidmet ist.';
        $message2 = '<a href="index.php" class="blue-link">Nadobilier.com</a> ermöglicht es Ihnen, alle Arten von Immobilien zu finden, sei es Wohnungen, Häuser, Büros, Geschäftsräume oder Land.';
        $message3 = 'Sie wollen kaufen, verkaufen, mieten oder Eigentum zu veröffentlichen, einfach <a href="index.php" class="blue-link">Nadobilier.com</a> besuchen, und Sie werden Ihre Bedürfnisse zu finden.';
        $message4 = 'Wenn Sie Hilfe benötigen, kontaktieren Sie uns für weitere Informationen, willkommen.';
        $address = "Straße Annassim N°1223 Nador";
        $telefon = '06 13 06 43 30';
        $email = '<a href="mailto:contact@nadobilier.com">contact@nadobilier.com</a>';
    }
    else if ( $_SESSION['lang'] == "es" ) {
        $pageTitle = "Contacto";
        $title = "Bienvenido Nadobilier!";
        $message1 = '<a href="index.php" class="blue-link">Nadobilier.com</a> es la primera plataforma dedicada al sector inmobiliario de la ciudad de Nador.';
        $message2 = '<a href="index.php" class="blue-link">Nadobilier.com</a> permite encontrar todo tipo de bienes inmuebles, ya se trate de apartamentos, casas, oficinas, locales comerciales o terrenos.';
        $message3 = 'Usted quiere comprar, vender, alquilar o publicar su propiedad, sólo tiene que visitar <a href="index.php" class="blue-link">Nadobilier.com</a> y encontrará sus necesidades.';
        $message4 = 'Si necesita ayuda, por favor, póngase en contacto con nosotros para obtener más información, será bienvenida.';
        $address = "Calle Annassim N°1223 Nador";
        $telefon = '06 13 06 43 30';
        $email = '<a href="mailto:contact@nadobilier.com">contact@nadobilier.com</a>';
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        $pageTitle = "Contact";
        $title = "Welkom Nadobilier!";
        $message1 = '<a href="index.php" class="blue-link">Nadobilier.com</a> is het eerste platform dat zich toelegt op de onroerend goed sector van de stad Nador.';
        $message2 = '<a href="index.php" class="blue-link">Nadobilier.com</a> kunt u alle soorten vastgoed te vinden, of het nu appartementen, huizen, kantoren, commerciële ruimten of grond.';
        $message3 = 'U wilt kopen, verkopen, verhuren of uw woning te publiceren, gaat u naar <a href="index.php" class="blue-link">Nadobilier.com</a> en u zult uw behoeften.';
        $message4 = 'Als u hulp nodig hebt, neem dan contact met ons op voor meer informatie, zijn welkom.';
        $address = "Straat Annassim N°1223 Nador";
        $telefon = '06 13 06 43 30';
        $email = '<a href="mailto:contact@nadobilier.com">contact@nadobilier.com</a>';
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
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/flexslider/flexslider.css" rel="stylesheet" media="screen">
        <link href="css/tabber/tabber.css" rel="stylesheet" media="screen">
        <link href="css/iconmoon/iconfont.css" rel="stylesheet" media="screen">
        <link href="css/styles.css" rel="stylesheet" media="screen">
        <link href="css/responsive.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
        <!--[if lt Ie 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <!-- header begin -->
        <?php include('include/header.php'); ?>
        <!-- header end -->
        <div class="main-content">
            <div class="properties">
                <div class="container">
                    <div class="grid_full_width content-margin-top">
                        <div class="about_us">
                            <div class="welcome">
                                <div class="row">
                                    <div class="span6">
                                        <div class="picct"> <img src="img/nador-430x230.jpg" alt=""> </div>
                                    </div>
                                    <div class="span6">
                                        <div class="textct">
                                            <h1><?= $title ?></h1>
                                            <p class="<?= $messageClass ?>"><?= $message1 ?></p>
                                            <p class="<?= $messageClass ?>"><?= $message2 ?></p>
                                            <p class="<?= $messageClass ?>"><?= $message3 ?></p>
                                            <p class="<?= $messageClass ?>"><?= $message4 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="span8">
                                        <div class="">
                                            <div class="contact-bor">
                                                <div class="map"><iframe width="580" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=35.169665, -2.926958&amp;spn=40.915036,86.572266&amp;t=m&amp;z=15&amp;output=embed"></iframe></div>
                                            </div>
                                        </div>
                                    </div>        
                                    <div class="span4">
                                        <div class="contact">
                                            <div class="">
                                                <div class="add-contact">
                                                    <div class="row">
                                                        <div class="span280px pull-right">
                                                            <h2><?= $address ?></h2>
                                                            <h2 class="green-phone"><?= $telefon ?></h2>
                                                            <h2><?= $email ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer begin -->
        <?php include('include/footer.php'); ?>
        <!-- footer end -->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/tinynav/tinynav.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/tabber/tabber.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">
            /*<![CDATA[ */
            jQuery(function() {
                $('.abouttext').hide();
                jQuery('.btshowhide').click(function(e) {
                    e.preventDefault();
                    var target = jQuery('.class' + jQuery(this).attr('rel'));
                    jQuery('.abouttext').not(target).hide();
                    target.show();
                    jQuery('.btshowhide').not(this).removeClass("active");
                    jQuery(this).addClass("active");
                })
            }); /*]]> */
        </script>
    </body>
</html>