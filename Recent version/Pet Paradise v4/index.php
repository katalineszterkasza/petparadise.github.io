<!DOCTYPE html>
<html style="font-size: 16px;" lang="hu">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="allatmenhely weboldal">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Pet Paradise Állatmenhely-Főoldal</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="Pet-Paradise-HOME.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="pp.js" defer=""></script>

    <link rel="icon" href="images/heart.png">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Cabin:400,400i,500,500i,600,600i,700,700i">


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "PetParadise Állatmenhely",
        "url": "/",
        "logo": "images/1252915_medium2000.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Pet Paradise HOME">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <link rel="canonical" href=".">
    <?php  session_start();  ?>
</head>

<body class="u-body u-xl-mode">
    <header class="u-black u-clearfix u-header u-header" id="sec-3d6c">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-headline u-text u-text-1">
                <a href="/"> Pet Paradise Állatmenhely&nbsp;</a>
            </h3>
            <a href="https://petparadise.github.io" class="u-image u-logo u-image-1" data-image-width="150"
                data-image-height="150">
                <img src="images/1252915_medium2000.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                href="kutyak.php" rel="nofollow" style="padding: 28px 22px;">Kutyák</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                href="macskak.php" style="padding: 28px 22px;">Cicák</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                href="mailto:petparadisehungary2022@gmail.com?subject=Email%20c%C3%ADm" 
                                style="padding: 28px 22px;">Elérhetőségeink</a>
                        </li>
                        <li class="u-nav-item"><a href="./hirek.html" target="_blank"
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                href="" style="padding: 28px 22px;">Hírek</a>
                        </li>
                        <?php
                            if(!isset($_SESSION["usernev"])) {
                                echo '<li class="u-nav-item"><a href="./login.php" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2" style="padding: 28px 22px;"> Belépés/Regisztráció</a></li>';
                            }else{
                                echo '<li class="u-nav-item"> Helló, '. $_SESSION["usernev"].'! (<a href="./logout.php" class="u-text-active-palette-1-base u-text-hover-palette-4-dark-2">Kijelentkezés</a>)</li>';
                            }
                        ?>
                      
                    </ul>      
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                      
                        <li class="u-nav-item"><a href="./info.html"target="_blank"
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                style="padding: 28px 22px;">Információk</a>
                        </li>
                        <li class="u-nav-item"><a href="./tamogataspp.html" target="_blank"
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-dark-2"
                                style="padding: 28px 22px;">Támogatás</a>
                        </li>
                       
                    </ul>      
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank"
                                        rel="nofollow" style="padding: 28px 22px;">Kutyák</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 28px 22px;">Cicák</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="mailto:petparadisehungary2022@gmail.com?subject=Email%20c%C3%ADm"
                                        style="padding: 28px 22px;">Elérhetőségeink</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="tel:+36 30 312 8605"
                                        style="padding: 28px 22px;">Hírek</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 28px 22px;">Hasznos Információk</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 28px 22px;">Támogatás</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-8872" data-image-width="1980"
        data-image-height="1250">
        <div class="u-clearfix u-gutter-0 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout" style="">
                <div class="u-layout-row" style="">
                    <div class="u-align-right u-container-style u-image u-layout-cell u-left-cell u-size-33 u-image-1"
                        data-image-width="1280" data-image-height="911">
                        <div class="u-container-layout u-container-layout-1"></div>
                    </div>
                    <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-27 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h1 class="u-text u-title u-text-1">
                                <span class="u-text-palette-1-light-1" style="font-size: 3rem;">
                                    <span class="u-text-palette-1-light-3">Köszöntünk a Pet Paradise Állatmenhely
                                        Honlapján!</span>
                                </span>
                                <br>
                            </h1>
                            <a href="https://petparadise.github.io"
                                class="u-active-palette-1-light-2 u-border-none u-btn u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-text-body-color u-btn-1">Nézz
                                körül!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_c6b8">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-2 u-border-grey-75 u-container-style u-custom-item u-image u-list-item u-repeater-item u-image-1"
                    data-image-width="1024" data-image-height="686">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1"><span
                            class="u-custom-item u-file-icon u-icon u-icon-1"><img src="images/1818401.png"
                                alt=""></span>
                        <h4 class="u-text u-text-default u-text-1">Macskák</h4>
                        <p class="u-text u-text-default u-text-2">Örökbe fogadható és ideiglenes befogadóra váró cicák
                        </p>
                        <a href="https://petparadise.github.io"
                            class="u-active-palette-1-light-2 u-border-1 u-border-palette-1-dark-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-3 u-text-active-grey-60 u-text-body-color u-text-hover-grey-50 u-btn-1">Tovább
                        </a>
                    </div>
                </div>
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-2 u-border-grey-75 u-container-style u-custom-item u-image u-list-item u-repeater-item u-image-2"
                    data-image-width="1024" data-image-height="686">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2"><span
                            class="u-custom-item u-file-icon u-icon u-icon-2"><img src="images/181867.png"
                                alt=""></span>
                        <h4 class="u-text u-text-default u-text-3">Kutyák</h4>
                        <p class="u-text u-text-default u-text-4"> Örökbe fogadható és ideiglenes befogadóra váró kutyák
                        </p>
                        <a href=""
                            class="u-active-palette-1-light-2 u-border-1 u-border-palette-1-dark-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-3 u-text-active-grey-60 u-text-body-color u-text-hover-grey-50 u-btn-2">Tovább
                        </a>
                    </div>
                </div>
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-2 u-border-grey-75 u-container-style u-custom-item u-image u-list-item u-repeater-item u-image-3"
                    data-image-width="1024" data-image-height="686">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3"><span
                            class="u-custom-item u-file-icon u-icon u-icon-3"><img src="images/3047827.png"
                                alt=""></span>
                        <h4 class="u-text u-text-default u-text-5">Legyél te is önkéntes nálunk!</h4>
                        <p class="u-text u-text-default u-text-6">Ha szeretnél önkéntes lenni nálunk&nbsp; olvass
                            tovább...</p>
                        <a href="./onkentes.html" target="_blank"
                            class="u-active-palette-1-light-2 u-border-1 u-border-palette-1-dark-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-3 u-text-active-grey-60 u-text-body-color u-text-hover-grey-50 u-btn-3">Tovább
                        </a>
                    </div>
                </div>
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-2 u-border-grey-75 u-container-style u-custom-item u-image u-list-item u-repeater-item u-image-4"
                    data-image-width="1024" data-image-height="686">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4"><span
                            class="u-custom-item u-file-icon u-icon u-icon-4"><img src="images/760910.png"
                                alt=""></span>
                        <h4 class="u-text u-text-default u-text-7">Aktualitások</h4>
                        <p class="u-text u-text-default u-text-8">Aktualitások gazdára talált cicák és kutyák ...</p>
                        <a href="./aktualitasok.html" target="_blank"
                            class="u-active-palette-1-light-2 u-border-1 u-border-palette-1-dark-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-3 u-text-active-grey-60 u-text-body-color u-text-hover-grey-50 u-btn-4">Tovább
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-3" id="carousel_1163" data-image-width="1024"
        data-image-height="686">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width-xs u-group u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-text u-text-body-alt-color u-text-1"> Ez a mi történetünk...</h2>
                    <p class="u-text u-text-body-alt-color u-text-2"> A Pet Paradise Állatmenhely egy egy baráti
                        társaság, akik szívükön viselik a kóbor, gazdátlan, kidobott, nem megfelelő módon tartott kutyák
                        és macskák sorsát. Mi nem vagyunk "hivatalos" állatvédők, de talán a ezen a honlapon keresztül
                        sok-sok kutyuson és cicuson tudunk segíteni, ideiglenes befogadót, segítőket és szerető gazdit
                        találni nekik.<br>A rossz körülmények között működő gyepmesteri telepek sajnos nem képesek
                        megbirkózni a feladattal, hogy minden macskát és kutyát megmenthessenek így sajnos sok kis állat
                        nem menekülhet az elaltatástól.<br>A Pet Paradise Állatmenhely gyors reakcióidejével és hatékony
                        segítségével az állatvédők gyorsan a megfelelő helyre hozhatják a talált állatokat. Önkéntes
                        segítőink gondozzák tovább és juttatják vissza őket saját gazdájukhoz, illetve keresnek új
                        otthont kutyáinknak és cicáinknak.
                    </p>
                </div>
            </div>
            <img class="u-expanded-width u-image u-image-1"
                src="images/gaf4f448a975774e439085ef5595757d6eda36daa39d250716de2cb756c8a6332acafe24be2642f82a4c9c916eea5a2a56d8fabfe103583c60c49cc40b4338904_1280.jpg"
                data-image-width="1280" data-image-height="853">
            <div
                class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner">
                    <div class="u-effect-fade u-gallery-item u-gallery-item-1">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="961"><img
                                class="u-back-image"
                                src="images/g7dcc1dba2483fd12f1ace8a26efd65d62e2facbf53212da1a2edf5bbac51e69e58d967cf0b09314ff165cd13623c9c935a29060a93b35ff5d92ae0b78fefc940_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-2">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="969"><img
                                class="u-back-image"
                                src="images/gd3665bafe618b738f1d55b3ddfd5e038c18dc61cde3a599ffd643c55d34cb93249709ee1bbd6224605aba6ed9e4d436c7ec04fc603030fb00f594394e0b29d86_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-2">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-3">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="854"><img
                                class="u-back-image"
                                src="images/g06f18c5f80a3f9ada142592027b73a3198f7081e224793c18b2afe7c06fa16aca11ad5017e8bacda1ec8a8ad18d786ee7094fa0efbad790462f331ec61d2d070_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-3">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-4">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="851"><img
                                class="u-back-image"
                                src="images/g56eb03567812a35a7e3eb9d6b9e0601b89dd44ed230f35478ea8948223e3d9c6b5a93f0413579378ee2162e30ffc88199aba641f1709e3e3723eef57150b28ea_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-4">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-5">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="853"><img
                                class="u-back-image"
                                src="images/gb1f091a43d5041196de4a99a8e3631a72cd0d710496f817e7e232cccdd9f31df67327db5f7c279e186dba619e5495186c23600699b99bd436a1b7f3d3521c26a_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-5">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-6">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="853"><img
                                class="u-back-image"
                                src="images/g2434dbebfc7d7875deee8e50ea545c94400f7f962c9907e81362deb8f9790baf4320bf2819cdc3d839cc822943c5d3258e8c90fca6cd6e4a7d137dbe59610546_1280.jpg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-6">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="u-border-2 u-border-grey-75 u-clearfix u-image u-section-4" id="sec-27e8" data-image-width="1024"
        data-image-height="686">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h2 class="u-text u-text-1">Pet Paradise Állatmenhely</h2>
                                <p class="u-text u-text-2">
                                    <span style="font-size: 1.25rem;">Budapest, Hengersor u. 34, 1184</span>
                                </p>
                                <p class="u-text u-text-3">+36 30 12 34&nbsp; 567</p>
                                <p class="u-text u-text-4">petparadisehungary2022@gmail.com</p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <div class="u-expanded u-grey-10 u-map">
                                    <div class="embed-responsive">
                                        <iframe class="embed-responsive-item"
                                            src="//maps.google.com/maps?output=embed&amp;q=Budapest%2C%20Hengersor%20u.%2034%2C%201184&amp;t=m"
                                            data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMkJ1ZGFwZXN0JTJDJTIwSGVuZ2Vyc29yJTIwdS4lMjAzNCUyQyUyMDExODQlMjIlMkMlMjJ6b29tJTIyJTNBbnVsbCUyQyUyMnR5cGVJZCUyMiUzQSUyMnJvYWQlMjIlMkMlMjJsYW5nJTIyJTNBbnVsbCUyQyUyMmFwaUtleSUyMiUzQW51bGwlMkMlMjJtYXJrZXJzJTIyJTNBJTVCJTVEJTdE"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-valign-middle u-section-5" id="carousel_b9fd"
        data-image-width="1024" data-image-height="686">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30-md u-size-30-sm u-size-30-xs u-size-35-lg u-size-35-xl u-image-1"
                        data-image-width="150" data-image-height="100">
                        <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                    </div>
                    <div
                        class="u-align-left u-container-style u-layout-cell u-left-cell u-size-25-lg u-size-25-xl u-size-30-md u-size-30-sm u-size-30-xs u-layout-cell-2">
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                            <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> A Pet Paradise
                                Állatmenhely területén érvényes</h6>
                            <h2 class="u-text u-text-default u-text-2">
                                <span style="font-size: 3rem;"> Házirend és sétáltatási szabályaink:</span>
                                <br>
                            </h2>
                            <p class="u-text u-text-3">Image from <a href="https://www.freepik.com/photos/people"
                                    class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-btn-1"
                                    target="_blank">Freepik</a>
                            </p>
                            <div class="u-border-1 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
                            <div class="u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-3"><span
                                                class="u-file-icon u-icon u-icon-rectangle u-palette-2-light-3 u-spacing-15 u-icon-1"><img
                                                    src="images/3135556.png" alt=""></span>
                                            <p class="u-text u-text-default u-text-grey-10 u-text-4"> Ellenőrizd indulás
                                                előtt a felszerelést! A nyakörv nem túl laza vagy túl szoros? Csak az
                                                egy kennelben lévő kutyák sétálhatnak együtt. Másik kutyához sem a
                                                telepen belül, sem kint a séta alatt nem engedjük oda. Amelyik kutya
                                                egyedül lakik egy kennelben, csak egyedül sétálhat. A kennelek között
                                                mindig rövid pórázon vezetjük a kutyát. Nem engedjük oda sem a
                                                kennelekhez, sem a szembejövő kutyához. A szembetalálkozó kutyák közül
                                                mindig az áll félre, aki sétából érkezik vissza. A cicákra vigyázni
                                                kell! Hozzájuk sem engedjük oda a kutyákat.</p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-4"><span
                                                class="u-file-icon u-icon u-icon-rectangle u-palette-2-light-3 u-spacing-15 u-icon-2"><img
                                                    src="images/3135556.png" alt=""></span>
                                            <p class="u-text u-text-default u-text-grey-10 u-text-5"> A kutyákat a
                                                pórázról elengedni sehol sem szabad. Ha egy kutya elszabadulna, mindent
                                                el kell követni, hogy megfogd. Menj utána, hívogasd, de kergetni nem
                                                szabad! A kutya kivételénél, visszatételénél kérhetsz segítséget. Hámot
                                                nem szabad a kutyán hagyni séta után! Használd a séta napját jelző
                                                cédulákat.Amelyik kennelen ki van függesztve, hogy a kutya nem
                                                sétáltatható, azt szigorúan tilos kivinni! A karanténos és a látogatók
                                                elől elzárt helységekbe, területekre engedély nélkül belépni szigorúan
                                                tilos!AZ ÁLLATOKAT ETETNI TILOS! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-6" id="sec-a143" data-image-width="1024" data-image-height="686">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                            <h6 class="u-text u-text-1"> Legyél te is kutyatréner</h6>
                            <p class="u-text u-text-default u-text-2">Kutyatréner képzéseinkről alább olvashatsz..</p>
                            <a href="./training.html" target="_blank"
                                class="u-active-palette-1-light-2  u-border-active-palette-4-light-3 u-border-hover-palette-4-light-3 u-border-none u-border-white u-btn u-btn-rectangle u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-dark-1 u-btn-1"> Tovább</a>
                        </div>
                    </div>
                    <div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
                            <h6 class="u-text u-text-3">Adó 1%</h6>
                            <p class="u-text u-text-default u-text-4">Adód 1%-val kérünk te is támogasd a Pet Paradise
                                Állatmenhelyet, hogy továbbra is segíthessünk. ..</p>
                                <a href="./ado.html" target="_blank"
                                    class="u-active-palette-1-light-2 u-border-active-palette-4-light-3 u-border-hover-palette-4-light-3 u-border-none u-border-white u-btn u-btn-rectangle u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-dark-1 u-btn-4">Tovább</a>
                            </div>
                        </div>
                    <div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                            <h6 class="u-text u-text-5"> Támogatóink</h6>
                            <p class="u-text u-text-default u-text-6">Aki munkájukkal, idejükkel, tárgyi vagy pénzügyi
                                támogatással segítettek és segítene, nekünk....</p>
                            <a href="./sponsors.html" target="_blank"
                                class="u-active-palette-1-light-2 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-border-none u-btn u-btn-rectangle u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-dark-1 u-btn-3">Tovább</a>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-border-2 u-border-grey-75 u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4">
                            <h6 class="u-text u-text-7">Shop</h6>
                            <p class="u-text u-text-default u-text-8">Kuya-macska kellék, eledel felszeréelések....</p>
                            <a href="https://www.petparadepatika.hu" target="_blank"
                            "
                                class="u-active-palette-1-light-2 u-border-active-palette-4-light-3 u-border-hover-palette-4-light-3 u-border-none u-border-white u-btn u-btn-rectangle u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-dark-1 u-btn-4">Tovább</a>
                        </div>
                    </div>
                </div>
            </div>
            <img class="u-image u-image-default u-image-1"
                src="images/g5825a2134320135bebfce337c1aba788408d37b8bd19b957b13ed343d0139fa8019ab716037125b87ebcd054a4057450c9c1e9028189cd3bfafa44ea457f9c57_1280.jpg"
                alt="" data-image-width="1280" data-image-height="853">
            <p class="u-text u-text-9">Image from<span class="u-text-body-alt-color"></span>
                <a href="https://www.freepik.com/photos/people"
                    class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-btn-5"
                    target="_blank">Freepik</a>
            </p>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-7" id="carousel_885b" data-image-width="1024" data-image-height="686">
        <div class="u-align-center u-container-style u-expanded-width u-group u-image u-image-1" data-image-width="1024"
            data-image-height="686">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-text u-text-default u-text-1">Iratkozz fel hírlevelünkre:</h2>
                <div class="u-border-9 u-border-white u-line u-line-horizontal u-line-1"></div>
                <p class="u-text u-text-2"> Heti gyakorisággal követheted gazdira váró kutyusainkat és cicusainkat.
                    Talán épp így találtok egymársa!</p>
                <div class="u-form u-form-1">
                    <form action="registration.html" target="_blank" method="POST"
                        class="u-block-afe3-9 u-clearfix u-form-horizontal u-form-spacing-0 u-inner-form"
                        source="email">
                        <!-- hidden inputs for siteId and pageId -->
                        <input type="hidden" id="siteId" name="siteId" value="1481524">
                        <input type="hidden" id="pageId" name="pageId" value="1501397"><!-- always visible -->
                        <div class="u-form-email u-form-group">
                            <label for="email-737d" class="u-form-control-hidden u-label">Email</label>
                            <input type="email" placeholder="Add meg az e-mail címed" id="email-737d" name="Email cím"
                                class="u-border-5 u-border-white u-input u-input-rectangle u-white u-input-1"
                                required="">
                        </div>
                        <div class="u-form-group u-form-submit">
                            <a href="#"
                                class="u-active-palette-1-light-2 u-border-5 u-border-active-palette-1-light-2 u-border-hover-palette-1-light-1 u-border-palette-1-dark-1 u-btn u-btn-submit u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-text-active-white u-text-hover-white u-btn-1">Küldés</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                        </div>
                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                            errors then try again. </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-8" src="" data-image-width="1500"
        data-image-height="1000" id="sec-443a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-1"> Pet Paradise Állatmenhely </h2>
            <h3 class="u-text u-text-2"> petparadisehungary2022@gmail.com</h3>
            <p class="u-large-text u-text u-text-variant u-text-3"> Budapest, Hengersor u. 34, 1184,&nbsp;<br>+36 1 23
                45 67 89
            </p>
        </div>
    </section>
    <section class="u-clearfix u-color-scheme-u11 u-color-style-multicolor-1 u-image u-section-9" id="sec-75b7"
        data-image-width="1024" data-image-height="686">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-46 u-layout-cell-1">
                            <div class="u-container-layout u-valign-bottom u-container-layout-1">
                                <h3 class="u-text u-text-default u-text-1">Kövesd Facebook oldalunkat:</h3>
                                <p class="u-text u-text-palette-4-light-3 u-text-2">
                                    <a class="a8nywdso cxmmr5t8 e9989ue4 esr5mh6w f1sip0of g5ia77u1 gmql0nx0 gpro0wi8 hcukyx3x i1ao9s8h jb3vyjys kvgmc6g5 lzcic4wl nc684nl6 nhd2j8a9 oajrlxb2 oo483o9r oygrvhab p7hjln8o qt6c0cv9 qu0x051f r7d6kgcz rq0escxv rz4wbd8a u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-5-light-2 u-btn-1"
                                        href="https://www.facebook.com/Petparadise-107425798544536/" role="link"
                                        tabindex="-1">https://www.facebook.com/Petparadise-<span
                                            style="font-weight: 700;">107425798544536</span>/
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-right-cell u-size-14 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <a href="https://www.facebook.com/Petparadise-107425798544536/"
                                    class="u-active-palette-1-light-2 u-border-2 u-border-black u-btn u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-text-black u-text-hover-white u-btn-2">Nézzük
                                    meg!&nbsp;<span class="u-file-icon u-icon"><img src="images/21155.png"
                                            alt="Facebook"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ed7e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Created by Adel Becsi and Katalin Eszter Kasza in
                2022<br>All rights reserved 
            </p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://petparadise.github.io" target="_blank">
            <span>Pet Paradise Állatmenhely Kutya-Macska</span>
        </a>
        <p class="u-text">
            <span>created in 2022 as a final project</span>
        </p>
        <a class="u-link" href="https://petparadise.github.io">

        </a>.
    </section>
</body>

<form method="get" action=".">
      <button type="Back to top of the page">Paw back to the top</button>
</form>

</html>