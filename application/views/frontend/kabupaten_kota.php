 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 0px;">
     <div class="page-header-bg" style="background-image: url(<?= base_url() ?>assets/bg-page.png)">
     </div>
     <div class="container">
         <div class="page-header__inner">
             <ul class="thm-breadcrumb list-unstyled">
                 <li><a href="index.html">Home</a></li>
                 <li><span>/</span></li>
                 <li>Kabupaten Kota</li>
             </ul>



         </div>
     </div>
 </section>
 <!--Page Header End-->

 <!--Blog Page Start-->
 <section class="blog-one" style="margin-bottom:50px">
     <div class="container">
         <div class="row">

             <?php foreach ($kabkota as $r) : ?>
                 <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                     <!--Team One single-->
                     <div class="team-one__single">
                         <div class="team-one__img-box">
                             <div class="team-one__img" style="padding: 10px;">
                                 <img style="border-top-right-radius:0px !important" width="200px" src="<?= base_url('uploads/logo_kab_kota/') . $r['logo'] ?>" alt="">

                             </div>
                         </div>
                         <div class="team-one__content">
                             <div class="team-one__title-box">
                                 <div class="team-one__title-shape">
                                     <img src="<?= base_url('assets-public/') ?>assets/images/shapes/team-one-title-box-shape.png" alt="">
                                     <div class="team-one__title-text">
                                         <a href="<?= site_url('article?kabkota=') . $r['slug'] ?>"><span class="team-one__title" style="font-size: 7pt !important;"><?= $r['nama_kab_kota'] ?></span></a>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             <?php endforeach; ?>

         </div>
 </section>
 <!--Blog Page End-->