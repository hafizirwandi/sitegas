 <header class="main-header-three clearfix">

     <nav class="main-menu main-menu-three clearfix">
         <div class="main-menu-three__wrapper clearfix">
             <div class="main-menu-three__left">
                 <div class="main-menu-three__logo-box">
                     <div class="main-menu-three__logo" style="padding: 10px 0 !important;">
                         <a href="<?= site_url() ?>">
                             <img style="width: 90%;" src="<?= base_url('assets/budaya-sumut-putih.png') ?>" class="light-logo" alt="">
                             <img style="width: 90%;" src="<?= base_url('assets/budaya-sumut-hitam.png') ?>" class="dark-logo" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="main-menu-three__main-menu-three-box">
                     <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                     <?= menu(); ?>
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