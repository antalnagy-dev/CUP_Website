<!DOCTYPE html>
<html lang="hu">

<?php include('./assets/meta.php') ?>

<body>



    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Oldal betöltése</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->
     <?php  include_once('./assets/navbar.php') ?>
    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="files/1679138866_japan-1679138767464-7822.jpg"
                        data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="./contact_page.php">
                                        Építészeti tervezés, Generál
                            tervezés </a>
                                        </h1>
                                        <p>Családi ház tervezése - Állapotfelmérés - Tervdokumentáció - Generálkivitelezés -
                                        Területfejlesztés - Tanácsadás</p>
                                        <a href="./contact_page.php" class="btn-curve btn-color mt-20">
                                            <span>Ajánlatkérés</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="files/1679139005_architecture-1679138751622-9381.jpg"
                        data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="./contact_page.php">Projektmenedzsment és Műszaki ellenőrzés</a>
                                        </h1>
                                        <p>Szerződéstervezetek készítése - Adásvételi szerződés összeállítása - Kivitelezés
                            műszaki
                            ellenőrzése - Munkaterületek átadása</p>
                                        <a href="./contact_page.php" class="btn-curve btn-color mt-20">
                                            <span>Ajánlatkérés</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="files/1679139063_japan-1679138741471-2668.jpg"
                        data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="./contact_page.php">
                                        Ingatlanfejlesztés</a>
                                        </h1>
                                        <p>Átalakítás-felújítás, Ingatlanértékelés, Teljes körű ingatlanfejlesztés - Engedélyeztetés
                            -
                            Belsőépítészet - Tanácsadás</p>
                                        <a href="./contact_page.php" class="btn-curve btn-color mt-20">
                                            <span>Ajánlatkérés</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/1.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="#0">
                                                Innovative <br> Architecture
                                            </a>
                                        </h1>
                                        <p>Architek have been developing a transversal approach combining architecture,
                                            urbanism and landscape. </p>
                                        <a href="#0" class="btn-curve btn-color mt-20">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/3.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="#0">
                                                Classic <br> and Modern
                                            </a></h1>
                                        <p>Architek have been developing a transversal approach combining architecture,
                                            urbanism and landscape. </p>
                                        <a href="#0" class="btn-curve btn-color mt-20">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/2.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="#0">
                                                Elegant <br> Unique Design
                                            </a>
                                        </h1>
                                        <p>Architek have been developing a transversal approach combining architecture,
                                            urbanism and landscape. </p>
                                        <a href="#0" class="btn-curve btn-color mt-20">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/4.jpg" data-overlay-dark="0">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting class="playfont"><a href="#0">
                                                interior <br> design agency
                                            </a></h1>
                                        <p>Architek have been developing a transversal approach combining architecture,
                                            urbanism and landscape. </p>
                                        <a href="#0" class="btn-curve btn-color mt-20">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm custom-font"></div>

            <div class="social-icon">
                <!--<a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-behance"></i></a>
                <a href="#0"><i class="fab fa-pinterest-p"></i></a>-->
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Blog ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 valign">
                    <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                        <!--<h6 class="sub-title">Rólunk</h6>-->
                        <h2 class="mb-20 playfont">Ingatlanfejlesztés, Tervezés, kivitelezés, menedzsment? - Az épület
                            jövőjét a koncepció alapozza meg!</h2>
                        <p> Az emberi élettér egyik megtestesülési formája az épület. Akár egy családi házról, akár egy
                            közösségi intézményről is legyen szó, fontos, hogy olyan tapasztalt építész tervezőt
                            válasszon, aki képes meglátni azt, amit mások nem, ezenkívül valamennyi munkafolyamat
                            elvégzésében jártas, de legfőképpen, aki lelkiismeretesen tervezi meg álmai épületét. Ilyen
                            lehet egy igazán emberközpontú élettér.
                        </p>
                        <p></p>
                        <p>
                            Személyre szabott igényeit egyedi ötletekkel gyarapítom, hogy a lehető legtökéletesebb
                            eredményt érjük el együtt.
                        </p>
                        <ul>
                            <li>Tervezés és vázlatok</li>
                            <li>3D látványtervezés</li>
                            <li>Építészeti felmérések</li>
                        </ul>
                        <!--<a href="about.php" class="btn-curve btn-color mt-30">
                            <span>Bővebben</span>
                        </a>-->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ab-exp">
                        <div class="row">
                            <div class="col-md-4 mb-20">
                                <div class="pattern bg-img bg-repeat" data-background="img/line-pattern.png">
                                </div>
                            </div>
                            <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                                <div class="img mb-20 wow imago">
                                    <img src="files/1679582373_male-gc219f8898_1920.jpg" alt="me">
                                </div>
                            </div>
                            <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                                <div class="img wow imago">
                                    <img src="files/1679582610_floor-plan-g6913ae8fd_1920.jpg" alt="me">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="years-exp">
                                    <div class="exp-text">
                                        <h2 class="custom-font">21</h2>
                                        <h6>Év Tapasztalat</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->


    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding bg-gray">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>-->
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">SZAKÉRTŐ ÉPÍTÉSZETI SZOLGÁLTATÁSAINK</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".7s"
                        data-background="files/1679560545_floor-plan-g9af03300b_1920.jpg">
                        <span class="icon flaticon-interior-design"></span>
                        <h6 class="mb-20">Építészeti tervezés, Generál
                            tervezés</h6>
                        <p style="font-size: 14px; white-space: normal;">
                            Családi ház tervezése - Állapotfelmérés - Tervdokumentáció - Generálkivitelezés -
                            Területfejlesztés - Tanácsadás
                        </p>
                        <a href="services.php?id=1" class="more custom-font">Bővebben</a>
                    </div>
                </div>


                <div class=" col-lg-4">
                    <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".8s"
                        data-background="files/1679560733_architect-g84f3b2817_1920.jpg">
                        <span class="icon flaticon-living-room"></span>
                        <h6 class="mb-20">Projektmenedzsment és Műszaki ellenőrzés </h6>
                        <p>
                        <p>Szerződéstervezetek készítése - Adásvételi szerződés összeállítása - Kivitelezés
                            műszaki
                            ellenőrzése - Munkaterületek átadása </p>
                        </p>
                        <a href="services.php?id=2" class="more custom-font ">Bővebben</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".9s"
                        data-background="files/1679560933_surveying-equipment-gfc5b3e579_1920.jpg">
                        <span class="icon flaticon-houses"></span>
                        <h6 class="mb-20">Ingatlanfejlesztés </h6>
                        <p>
                        <p>Átalakítás-felújítás, Ingatlanértékelés, Teljes körű ingatlanfejlesztés - Engedélyeztetés
                            -
                            Belsőépítészet - Tanácsadás </p>
                        </p>
                        <a href="services.php?id=3" class="more custom-font ">Bővebben</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->

    <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago" data-background="img/exp.jpg">
                            <div class="since custom-font">
                                <span>Since</span>
                                <span>1999</span>
                            </div>
                            <div class="years custom-font">
                                <h2>21</h2>
                                <h5>Years Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-12">
                    <!--valign class cutted out-->
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <div class="numbers mt-50">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter">352</span></h3>
                                        <h6>Projektek száma</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter">567</span></h3>
                                        <h6>Díjak száma</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter">17 Év</span></h3>
                                        <h6>Szakmai tapasztalat</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->


    <!-- ==================== Start Works ==================== -->

    <section class="work-carousel metro section-padding dark">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s"></h6>-->
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">REFERENCIÁK</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-swiper-autoplay="1000">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="files/1679561914_building-g56d3820da_1280.jpg">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="portfolio-mas2.php">Portfólió-1</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-autoplay="1000">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="files/1679562193_house-gd1c05c31b_1920.jpg">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="portfolio-mas2.php">Portfólió-2</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-autoplay="1000">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="files/1679562247_house-ge0d1a6703_1920.jpg">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="portfolio-mas2.php">Portfólió-3</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-autoplay="1000">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="files/1682405346_japan-1679138767464-7822.jpg">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="portfolio-mas2.php">Portfólió-4</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-autoplay="1000">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="files/1682405396_architecture-1679138751622-9381.jpg">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="portfolio-mas2.php">Portfólió-5</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->


    <!-- ==================== Start contact ==================== -->

    <section class="contact">
        <div class="info bg-gray pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-phone"></span>
                            <div class="cont">
                                <h6 class="custom-font">Call Us</h6>
                                <p>+7 (111) 1234 56789</p>
                                <p>+1 (000) 9876 54321</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-mail-open"></span>
                            <div class="cont">
                                <h6 class="custom-font">Email Us</h6>
                                <p>contact@Archo.com</p>
                                <p>Username@website.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-map"></span>
                            <div class="cont">
                                <h6 class="custom-font">Address</h6>
                                <p>B17 Princess Road, London, Greater London NW18JR, United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-lg-6 map-box">
                    <div class="map" id="ieatmaps"></div>
                </div>-->
                <div class="col-lg-12 form">
                    <form id="contact-form" method="post" action="contact.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Név" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="E-mail"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_number" type="text" name="sqrmeter" placeholder="Négyzetméter"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Üzenet" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Küldés</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End contact ==================== -->




    <!-- ==================== Start Footer ==================== -->
    <?php  include_once('./assets/footer.php') ?>
    <!-- ==================== End Footer ==================== -->






    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- module -->
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"> </script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>


</body>

</html>