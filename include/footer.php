<?php
    //contact
    $contact = "";
    $tel = "";
    $fax = "";
    $email = "";
    //links
    $links = "";
    $link1 = "";
    $link2 = "";
    $link3 ="";
    //newsletter
    $stayTunned = "";
    $stayTunnedMessage = "";
    $emailPlaceHolder = "";
    $okButton = "";
    //copyright
    $copyrightMessage = "";
    //test
    if ( $_SESSION['lang'] == "ar" ) {
        //contact
        $contact = "اتصل بنا";
        $tel = "الهاتف";
        $fax = "الفاكس";
        $email = "البريد الاكتروني";
        //links
        $links = "التواصل الاجتماعي";
        $link1 = "رابط 1";
        $link2 = "رابط 2";
        $link3 = "رابط 3";
        //newsletter
        $stayTunned = "تابع أخبارنا";
        $stayTunnedMessage = "اشترك في خدمة الرسائل لتصلك آخر الأخبار و المستجدات.";
        $emailPlaceHolder = "بريدك الالكتروني";
        $okButton = "أرسل";
        //copyright
        $copyrightMessage = "جميع الحقوق محفوظة لشركة ناظوبيلي © ".date('Y')." تصميم شركة نظم.كم"."<a href=\"#\">Nodom.com</a>";
    }
    else if ( $_SESSION['lang'] == "fr" ) {
        //contact
        $contact = "Contact";
        $tel = "Tel";
        $fax = "Fax";
        $email = "E-mail";
        //links
        $links = "Réseaux Sociaux";
        $link1 = "Lien 1";
        $link2 = "Lien 2";
        $link3 = "Lien 3";
        //newsletter
        $stayTunned = "Restez à l'écoute";
        $stayTunnedMessage = "Abonnez-vous à notre newsletter pour recevoir toutes nos offres et nouvelles.";
        $emailPlaceHolder = "Email";
        $okButton = "Ok";
        //copyright
        $copyrightMessage = "Copyright © <?= date('Y') ?> Nadobilier. Designed By <a href=\"#\">Nodom.com</a><br/>Tous drois réservés.";
    }
    else if ( $_SESSION['lang'] == "es" ) {
        //contact
        $contact = "Contacto";
        $tel = "Tel";
        $fax = "Fax";
        $email = "E-mail";
        //links
        $links = "Redes sociales";
        $link1 = "Enlace 1";
        $link2 = "Enlace 2";
        $link3 = "Enlace 3";
        //newsletter
        $stayTunned = "Manténganse al tanto";
        $stayTunnedMessage = "Suscríbete a nuestro newsletter para recibir nuestras noticias y ofertas.";
        $emailPlaceHolder = "Email";
        $okButton = "Ok";
        //copyright
        $copyrightMessage = "Copyright © <?= date('Y') ?> Nadobilier. Desiñado por <a href=\"#\">Nodom.com</a><br/>reservados todos los derechos.";
    }
    else if ( $_SESSION['lang'] == "de" ) {
        //contact
        $contact = "Kontakt";
        $tel = "Tel";
        $fax = "Fax";
        $email = "E-mail";
        //links
        $links = "Soziale Netzwerke";
        $link1 = "Link 1";
        $link2 = "Link 2";
        $link3 = "Link 3";
        //newsletter
        $stayTunned = "Bleib dran";
        $stayTunnedMessage = "Abonnieren Sie unseren Newsletter, unsere Nachrichten und Angebote zu erhalten.";
        $emailPlaceHolder = "Email";
        $okButton = "Ok";
        //copyright
        $copyrightMessage = "Copyright © <?= date('Y') ?> Nadobilier. Entworfen von <a href=\"#\">Nodom.com</a><br/>Alle Rechte vorbehalten.";
    }
    else if ( $_SESSION['lang'] == "nl" ) {
        //contact
        $contact = "Contact";
        $tel = "Tel";
        $fax = "Fax";
        $email = "E-mail";
        //links
        $links = "Sociale netwerken";
        $link1 = "Link 1";
        $link2 = "Link 2";
        $link3 = "Link 3";
        //newsletter
        $stayTunned = "Blijf Kijken";
        $stayTunnedMessage = "Abonneer je op onze nieuwsbrief om onze nieuws en aanbiedingen te ontvangen.";
        $emailPlaceHolder = "Email";
        $okButton = "Ok";
        //copyright
        $copyrightMessage = "Copyright © <?= date('Y') ?> Nadobilier. Ontworpen door <a href=\"#\">Nodom.com</a><br/>Alle rechten voorbehouden.";
    }
?>
<footer>
    <div class="footer-container">
        <div class="container">
        <!-- Footer box -->
            <div class="footer-top">
                <div class="row">
                    <div class="span3">
                        <h3><?= $contact ?></h3>
                        <!--p>Pellentesque nec erat. Aenean semper, neque non faucibus. Malesuada, dui felis tempor felis, vel varius ante diam ut mauris. </p-->
                        <p>
                            <span><?= $tel ?>&nbsp;:&nbsp;012.666.999 </span><br/>
                            <span><?= $fax ?>&nbsp;:&nbsp;012.666.999 </span><br/>
                            <span><?= $email ?>&nbsp;:&nbsp;<a href="mailto:someone@example.com?Subject=Hello%20again">contact@nadobilier.com</a></span><br/>
                        </p>
                    </div>
                    <div class="span5">
                        <h3><?= $links ?></h3>
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="span5">
                                    <div class="social">
                                        <ul>
                                            <li><a class="facebook" title="" href="#"> Facebook </a></li>
                                            <li><a class="twitter" title="" href="#"> twitter </a></li>
                                            <li><a class="googplus" title="" href="#"> googplus </a></li>
                                            <li><a class="pinterest" title="" href="#"> pinterest </a></li>
                                            <!--li><a class="email" title="" href="#"> Email </a></li-->
                                            <!--li><a class="feed" title="" href="#"> Feed </a></li-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <h3><?= $stayTunned ?></h3>
                        <p><?= $stayTunnedMessage ?></p>
                        <div class="newletter">
                            <form>
                                <input type="text" class="textnewletter" placeholder="<?= $emailPlaceHolder ?>">
                                <button type="submit" class="buttonnewletter"><?= $okButton ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer box -->
            <!--div class="footer-bottom">
                <div class="row">
                    <div class="span6">
                        <p></p>
                    </div>
                    <div class="span6">
                        <div class="social pull-right">
                            <ul>
                                <li><a class="facebook" title="" href="#"> Facebook </a></li>
                                <li><a class="twitter" title="" href="#"> twitter </a></li>
                                <li><a class="googplus" title="" href="#"> googplus </a></li>
                                <li><a class="pinterest" title="" href="#"> pinterest </a></li>
                                <li><a class="email" title="" href="#"> Email </a></li>
                                <li><a class="feed" title="" href="#"> Feed </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div-->
        </div>
    </div>
</footer>
<div id='bttop'>BACK TO TOP</div>