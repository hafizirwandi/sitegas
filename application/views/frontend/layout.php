<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $public['title'] ?> - Budaya Sumut</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon-sumutprov.png') ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon-sumutprov.png') ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon-sumutprov.png') ?>" />
    <link rel="manifest" href="<?= base_url('assets/favicon-sumutprov.png') ?>" />
    <meta name="description" content="Dinas Pariwisata Pemprovsu" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/ambed-icons/style.css">
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/css/ambed.css" />
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/css/ambed-responsive.css" />

    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="<?= base_url('assets-public/') ?>assets/css/ambed-light.css">


    <!-- toolbar css -->
    <link rel="stylesheet" href="<?= base_url('assets-public/') ?>assets/vendors/toolbar/css/toolbar.css">

</head>

<body class="custom-cursor">

    <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> -->

    <!-- style switcher -->
    <!-- <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Dark</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Light</a>
            <button class="boxed-switcher">Boxed</button>
        </div>
    </div> -->
    <!-- end style switcher -->



    <!-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">

        <?php $this->load->view('frontend/header'); ?>
        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <?php $this->load->view($content); ?>

        <?php $this->load->view('frontend/footer'); ?>

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?= site_url() ?>" aria-label="logo image"><img src="<?= base_url('assets/budaya-sumut-putih.png') ?>" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->





        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/wow/wow.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/isotope/isotope.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/vegas/vegas.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/timepicker/timePicker.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="<?= base_url('assets-public/') ?>assets/js/ambed.js"></script>


    <!-- toolbar js -->
    <script src="<?= base_url('assets-public/') ?>assets/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>assets/vendors/toolbar/js/toolbar.js"></script>

</body>

</html>