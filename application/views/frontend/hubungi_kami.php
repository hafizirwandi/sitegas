 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 0px;">
     <div class="page-header-bg" style="background-image: url(<?= base_url() ?>assets/bg-page.png)">
     </div>
     <div class="container">
         <div class="page-header__inner">
             <ul class="thm-breadcrumb list-unstyled">
                 <li><a href="index.html">Home</a></li>
                 <li><span>/</span></li>
                 <li>Hubungi Kami</li>
             </ul>



         </div>
     </div>
 </section>
 <!--Page Header End-->

 <!--Contact Page Start-->
 <section class="contact-page">
     <div class="contact-page-shape-1 float-bob-x">
         <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
     </div>
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-8 col-lg-7">
                 <div class="contact-page__left">

                     <h4><?= $data['judul'] ?></h4>
                     <br>
                     <div class="contact-page__details">
                         <ul class="list-unstyled contact-page__details-list">
                             <?php if ($data['telepon']) : ?>
                                 <li>
                                     <span>Telepon</span>
                                     <p><a href="tel:<?= $data['telepon'] ?>"><?= $data['telepon'] ?></a></p>
                                 </li>
                             <?php endif; ?>

                             <?php if ($data['email']) : ?>
                                 <li>
                                     <span>Email</span>
                                     <p><a href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a></p>
                                 </li>
                             <?php endif; ?>
                             <?php if ($data['alamat']) : ?>
                                 <li>
                                     <span>Alamat</span>

                                     <p><?= $data['alamat'] ?></p>
                                 </li>
                             <?php endif; ?>
                         </ul>
                         <div class="contact-page__social">
                             <?php if ($data['twitter']) : ?>
                                 <a href="<?= $data['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                             <?php endif; ?>
                             <?php if ($data['facebook']) : ?>
                                 <a href="<?= $data['facebook'] ?>"><i class="fab fa-facebook"></i></a>
                             <?php endif; ?>
                             <?php if ($data['instagram']) : ?>
                                 <a href="<?= $data['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                             <?php endif; ?>
                             <?php if ($data['tiktok']) : ?>
                                 <a href="<?= $data['tiktok'] ?>"><i class="fab fa-tiktok"></i></a>
                             <?php endif; ?>
                             <?php if ($data['youtube']) : ?>
                                 <a href="<?= $data['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                             <?php endif; ?>
                         </div>
                     </div>
                     <br>
                 </div>

             </div>
         </div>
 </section>
 <!--Contact Page End-->