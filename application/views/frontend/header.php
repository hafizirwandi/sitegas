 <header class="main-header-three clearfix">
     <div class="main-header-three__top">
         <div class="main-header-three__top-inner clearfix">
             <div class="main-header-three__top-left">
                 <ul class="list-unstyled main-header-three__top-address">
                     <li>
                         <div class="icon">
                             <span class="icon-pin"></span>
                         </div>
                         <div class="text">
                             <p>380 St Kilda Road Melbourne, Australia</p>
                         </div>
                     </li>
                     <li>
                         <div class="icon">
                             <span class="icon-email"></span>
                         </div>
                         <div class="text">
                             <p><a href="mailto:ambed@company.com">ambed@company.com</a></p>
                         </div>
                     </li>
                 </ul>
             </div>
             <div class="main-header-three__top-right">
                 <div class="main-header-three__top-right-content">
                     <ul class="list-unstyled main-header-three__top-right-menu">
                         <li><a href="blog.html">News & Media</a></li>
                         <li><a href="faq.html">FAQs</a></li>
                         <li><a href="about.html">About</a></li>
                     </ul>
                     <div class="main-header-three__top-right-social">
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-facebook"></i></a>
                         <a href="#"><i class="fab fa-pinterest-p"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <nav class="main-menu main-menu-three clearfix">
         <div class="main-menu-three__wrapper clearfix">
             <div class="main-menu-three__left">
                 <div class="main-menu-three__logo-box">
                     <div class="main-menu-three__logo">
                         <a href="index.html">
                             <img style="width: 144px;" src="<?= base_url('assets/budaya-sumut.png') ?>" class="light-logo" alt="">
                             <img src="assets/images/resources/logo-1.png" class="dark-logo" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="main-menu-three__main-menu-three-box">
                     <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                     <ul class="main-menu__list one-page-scroll-menu">
                         <li class="scrollToLink">
                             <a href="<?= site_url() ?>">Home </a>

                         </li>
                         <li class="dropdown">
                             <a href="#">Warisan Budaya <span class="main-menu-border"></span></a>
                             <ul>
                                 <li><a href="<?= site_url('article?cat=tradisi-lisan') ?>">Tradisi Lisan</a></li>
                                 <li><a href="<?= site_url('article?cat=adat-istiadat') ?>">Adat Istiadat</a></li>
                                 <li><a href="<?= site_url('article?cat=ritus') ?>">Ritus</a></li>
                                 <li><a href="<?= site_url('article?cat=bahasa') ?>">Bahasa</a></li>
                             </ul>
                         </li>
                         <li class="dropdown">
                             <a href="#">Peninggalan Budaya <span class="main-menu-border"></span></a>
                             <ul>
                                 <li><a href="<?= site_url('article?cat=manuskrip') ?>">Manuskrip</a></li>
                                 <li><a href="<?= site_url('article?cat=teknologi-tradisional') ?>">Teknologi Tradisional</a></li>
                             </ul>
                         </li>
                         <li class="dropdown">
                             <a href="#">Seni Budaya <span class="main-menu-border"></span></a>
                             <ul>
                                 <li><a href="<?= site_url('article?cat=seni') ?>">Seni</a></li>
                                 <li><a href="<?= site_url('article?cat=budaya') ?>">Budaya</a></li>
                             </ul>
                         </li>
                         <li class="dropdown">
                             <a href="#">Rekreasi dan Hiburan <span class="main-menu-border"></span></a>
                             <ul>
                                 <li><a href="<?= site_url('article?cat=permainan-rakyat') ?>">Permainan Rakyat</a></li>
                                 <li><a href="<?= site_url('article?cat=olahraga-tradisional') ?>">Olahraga Tradisional</a></li>
                             </ul>
                         </li>
                         <li class="scrollToLink"><a href="<?= site_url('hubungi-kami') ?>">Hubungi Kami </a></li>
                     </ul>
                 </div>
             </div>
             <div class="main-menu-three__right">
                 <div class="main-menu-three__search-btn-call">
                     <div class="main-menu-three__search-btn">
                         <div class="main-menu-three__search-box">
                             <a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                         </div>

                     </div>

                 </div>
             </div>
         </div>
     </nav>
 </header>