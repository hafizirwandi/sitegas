   <!--Site Footer Start-->
   <footer class="site-footer">
       <div class="site-footer-bg">
       </div>
       <div class="site-footer__top">
           <?php
            $CI = &get_instance();

            $CI->load->model('Link_model', 'link');
            $CI->load->model('Footer_one_model', 'footer');
            $CI->load->model('Footer_two_model', 'footer2');
            $CI->load->model('Footer_three_model', 'footer3');
            $CI->load->model('Footer_four_model', 'footer4');
            $CI->load->model('Link_model', 'link');

            $footer = $CI->footer->find('1');
            $footer2 = $CI->footer2->find('1');
            $footer3 = $CI->footer3->find('1');
            $footer4 = $CI->footer4->find('1');

            $link2 = $CI->link->findAllWhere(['footer' => 'footer-two']);
            $link3 = $CI->link->findAllWhere(['footer' => 'footer-three']);

            ?>
           <div class="container">
               <div class="row">
                   <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                       <div class="footer-widget__column footer-widget__about">
                           <div class="footer-widget__logo">
                               <a href="index.html"> <img style="width: 100%;" src="<?= base_url('uploads/footer/') . $footer['logo'] ?>" class="light-logo" alt=""></a>
                           </div>

                           <div class="site-footer__social">
                               <?php if ($footer['twitter']) : ?>
                                   <a href="<?= $footer['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                               <?php endif; ?>
                               <?php if ($footer['facebook']) : ?>
                                   <a href="<?= $footer['facebook'] ?>"><i class="fab fa-facebook"></i></a>
                               <?php endif; ?>
                               <?php if ($footer['instagram']) : ?>
                                   <a href="<?= $footer['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                               <?php endif; ?>
                               <?php if ($footer['tiktok']) : ?>
                                   <a href="<?= $footer['tiktok'] ?>"><i class="fab fa-tiktok"></i></a>
                               <?php endif; ?>
                               <?php if ($footer['youtube']) : ?>
                                   <a href="<?= $footer['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                               <?php endif; ?>


                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                       <div class="footer-widget__column footer-widget__explore clearfix">
                           <h3 class="footer-widget__title"><?= $footer2['judul'] ?></h3>
                           <ul class="footer-widget__explore-list list-unstyled clearfix">
                               <?php foreach ($link2 as $r) : ?>
                                   <li><a href="<?= $r['url'] ?>"><?= $r['judul'] ?></a></li>
                               <?php endforeach; ?>

                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                       <div class="footer-widget__column footer-widget__services clearfix">
                           <h3 class="footer-widget__title"><?= $footer3['judul'] ?></h3>
                           <ul class="footer-widget__services-list list-unstyled clearfix">
                               <?php foreach ($link3 as $r) : ?>
                                   <li><a href="<?= $r['url'] ?>"><?= $r['judul'] ?></a></li>
                               <?php endforeach; ?>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                       <div class="footer-widget__column footer-widget__contact clearfix">
                           <h3 class="footer-widget__title"><?= $footer4['judul'] ?></h3>
                           <ul class="footer-widget__contact-list list-unstyled clearfix">
                               <?php if ($footer4['telepon']) : ?>
                                   <li>
                                       <div class="icon">
                                           <span class="icon-phone-call"></span>
                                       </div>
                                       <div class="text">
                                           <h5>Telepon</h5>
                                           <p><a href="tel:<?= $footer4['telepon'] ?>"><?= $footer4['telepon'] ?></a></p>
                                       </div>
                                   </li>
                               <?php endif; ?>
                               <?php if ($footer4['email']) : ?>
                                   <li>
                                       <div class="icon">
                                           <span class="icon-message"></span>
                                       </div>
                                       <div class="text">
                                           <h5>Email</h5>
                                           <p><a href="mailto:<?= $footer4['email'] ?>"><?= $footer4['email'] ?></a></p>
                                       </div>
                                   </li>
                               <?php endif; ?>
                               <?php if ($footer4['alamat']) : ?>
                                   <li>
                                       <div class="icon">
                                           <span class="icon-location"></span>
                                       </div>
                                       <div class="text">
                                           <h5>Alamat</h5>
                                           <p><?= $footer4['alamat'] ?></p>
                                       </div>
                                   </li>
                               <?php endif; ?>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="site-footer__bottom">
           <div class="container">
               <div class="row">
                   <div class="col-xl-12">
                       <div class="site-footer__bottom-inner">
                           <p class="site-footer__bottom-text">© Copyright <?= date('Y') ?> by <a href="#">Sumut budaya</a>
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!--Site Footer End-->