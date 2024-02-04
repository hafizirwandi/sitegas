 <!--Main Slider Start-->
 <section class="main-slider-three" id="home">
     <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
         <div class="swiper-wrapper">

             <div class="swiper-slide">
                 <div class="image-layer-three" style="background-image: url(assets/slideshow/slide_1.jpg);"></div>
                 <!-- /.image-layer -->
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="main-slider-three__content">
                                 <p class="main-slider-three__sub-title">Selamat datang di Sumatera Utara</p>
                                 <h2 class="main-slider-three__title">Ayo Mengenal <br> Lebih Dekat <br>
                                     Adat Istiadat Sumut
                                 </h2>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="image-layer-three" style="background-image: url(assets/slideshow/slide_2.jpg);"></div>
                 <!-- /.image-layer -->
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="main-slider-three__content">
                                 <p class="main-slider-three__sub-title">Budaya Sumut</p>
                                 <h2 class="main-slider-three__title">Lestarikan <br> Budaya Bangsa <br> Indonesia
                                 </h2>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="image-layer-three" style="background-image: url(assets/slideshow/slide_3.jpg);"></div>
                 <!-- /.image-layer -->
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="main-slider-three__content">
                                 <p class="main-slider-three__sub-title">Budaya Sumut</p>
                                 <h2 class="main-slider-three__title">Belajar Budaya<br> Bukan <br> Jadul
                                 </h2>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- If we need navigation buttons -->
         <div class="main-slider__nav">
             <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                 <i class="fa fa-angle-left"></i>
             </div>
             <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                 <i class="fa fa-angle-right"></i>
             </div>
         </div>

     </div>
 </section>
 <!--Main Slider End-->



 <!--About One Start-->
 <section class="about-one">
     <div class="about-one-shape-2 float-bob-x"></div>
     <div class="about-one-wall">
         <img src="<?= base_url('assets-public/') ?>assets/images/shapes/about-one-wall.png" alt="">
     </div>
     <div class="container">
         <div class="row">
             <div class="col-xl-6">
                 <div class="about-one__left">
                     <div class="section-title text-left">
                         <!-- <span class="section-title__tagline">About company</span> -->
                         <h2 class="section-title__title">Dinas Budaya dan Pariwisata Pemprovsu</h2>
                         <div class="section-title__line"></div>
                     </div>


                     <p class="about-one__text-2" style="text-align: justify;">Dinas Kebudayaan dan Pariwisata Provinsi Sumatera Utara dipimpin oleh seorang Kepala Dinas yang dalam melaksanakan tugas berada di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah, sebagaimana ditetapkan dalam Peraturan Gubernur Sumatera Utara Nomor 41 Tahun 2007 tentang Rincian Tugas Pokok dan Fungsi Masing-masing Jabatan pada Dinas Kebudayaan dan Pariwisata Provinsi Sumatera Utara. Kepala Dinas mempunyai tugas pokok membantu Gubernur dalam melaksanakan tugas di bidang pembinaan seni budaya, sejarah, kepurbakalaan, pemasaran pariwisata, obyek wisata dan usaha pariwisata serta tugas pembantuan.</p>


                 </div>
             </div>
             <div class="col-xl-6">
                 <div class="about-one__right">
                     <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                         <div class="about-one__img">
                             <img src="<?= base_url('assets/about_1.png') ?>" alt="">
                         </div>
                         <div class="about-one__small-img">
                             <img src="<?= base_url('assets/about_2.png') ?>" alt="">
                         </div>

                         <div class="about-one__shape-1 float-bob-y"></div>
                         <div class="about-one__dot">
                             <img src="<?= base_url('assets-public/') ?>assets/images/shapes/about-one-dots.png" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--About One End-->






 <!--Project One Start-->
 <section class="project-one">
     <div class="container">
         <div class="section-title text-center">
             <span class="section-title__tagline">Budaya Sumut</span>
             <h2 class="section-title__title">Warisan Budaya</h2>
             <div class="section-title__line"></div>
         </div>
         <div class="row justify-content-center">
             <div class="col-xl-10">
                 <div class="project-one__inner">
                     <div class="project-one__main-content">
                         <div class="swiper-container" id="project-one__carousel">
                             <div class="swiper-wrapper">
                                 <?php foreach ($artikel1 as $r) : ?>
                                     <div class="swiper-slide">
                                         <div class="row">
                                             <div class="col-xl-6 col-lg-6">
                                                 <div class="project-one__left">
                                                     <div class="project-one__img">
                                                         <img width="870px" height="612px" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xl-6 col-lg-6">
                                                 <div class="project-one__right">
                                                     <div class="project-one__content-box">
                                                         <div class="project-one-shape-1 float-bob-y">
                                                             <img src="<?= base_url('assets-public/assets/images/shapes/project-one-shape-1.png')  ?>" alt="">
                                                         </div>
                                                         <div class="project-one__content">
                                                             <h4 class="project-one__title"><?= $r['judul'] ?></h4>
                                                             <p class="project-one__text"><?= createReadMore($r['artikel']) ?></p>
                                                             <a href="<?= site_url('article-detail/') . $r['slug'] ?>" class="thm-btn project-one__btn">Read More</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div><!-- /.swiper-slide -->
                                 <?php endforeach; ?>

                             </div>
                         </div>
                     </div>

                     <div class="project-one__thumb-box">
                         <div class="swiper-container" id="project-one__thumb">
                             <div class="swiper-wrapper">
                                 <?php foreach ($artikel1 as $r) : ?>
                                     <div class="swiper-slide">
                                         <div class="project-one__img-holder">
                                             <img style="width: 100%;" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                                         </div>
                                     </div><!-- /.swiper-slide -->
                                 <?php endforeach; ?>

                             </div>
                         </div>
                         <div class="project-one__nav">
                             <div class="swiper-button-prev" id="project-one__swiper-button-next">
                                 <i class="fa fa-angle-right angle-left"></i>
                             </div>
                             <div class="swiper-button-next" id="project-one__swiper-button-prev">
                                 <i class="fa fa-angle-right"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-xl-12">
                 <div class="project-one__more-project">
                     <div class="project-one__more-project-content">
                         <a href="<?= site_url('article') ?>">View more</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--Project One End-->


 <!--Team Page Start-->
 <section class="team-page team-page--carousel">
     <div class="container">
         <div class="team-one__top">
             <div class="row">
                 <div class="col-xl-7 col-lg-6">
                     <div class="team-one__top-left">
                         <div class="section-title text-left">
                             <span class="section-title__tagline">Budaya Sumut</span>
                             <h2 class="section-title__title">Kabupaten Kota</h2>
                             <div class="section-title__line"></div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
         <div class="thm-owl__carousel owl-theme owl-carousel owl-with-shadow owl-dot-one owl-dot-one--md owl-nav-one owl-nav-one--md" data-owl-options='{
					"items": 3,
					"margin": 30,
					"smartSpeed": 700,
					"loop":true,
					"autoplay": 6000,
					"nav":true,
					"dots":true,
					"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
					"responsive":{
						"0":{
							"items":2
						},
						"575":{
							"items":3
						},
						"992":{
							"items": 5
						}
					}
				}'>
             <?php foreach ($kabkota1 as $r) : ?>
                 <div class="item">
                     <!--Team One single-->
                     <div class="team-one__single">
                         <div class="team-one__img-box">
                             <div class="team-one__img" style="padding:10px">
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

     </div>
     <div class="row">
         <div class="col-xl-12">
             <div class="project-one__more-project">
                 <div class="project-one__more-project-content">
                     <a href="<?= site_url('kabupaten-kota') ?>">View more</a>
                 </div>
             </div>
         </div>
     </div>

 </section>
 <!--Team Page End-->

 <!--Testimonial One Start-->
 <section class="testimonial-one">
     <div class="testimonial-one-bg-box">
         <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
     </div>
     <div class="container">

         <div class="row">
             <div class="col-xl-3">
                 <div class="testimonial-one__left">
                     <div class="section-title text-left">
                         <span class="section-title__tagline">Budaya Sumut</span>
                         <h2 class="section-title__title">Rekreasi & Hiburan</h2>
                         <div class="section-title__line"></div>
                     </div>

                 </div>
             </div>
             <div class="col-xl-9">

                 <div class="testimonial-one__right">
                     <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2.25545
                                    }
                                }
                            }'>
                         <?php foreach ($artikel1  as $r) : ?>
                             <div class="item">
                                 <!--Blog One Start-->
                                 <div class="blog-one__single">
                                     <div class="blog-one__img">
                                         <img style="height: 230px;" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                                         <a href="<?= site_url('article-detail/') . $r['slug'] ?>">
                                             <span class="blog-one__plus"></span>
                                         </a>
                                     </div>
                                     <div class="blog-one__content" style="height: 150px;">
                                         <div class="blog-one__date">
                                             <p><?= $r['published_at'] ?></p>
                                         </div>
                                         <ul class="list-unstyled blog-one__meta">
                                             <li><a href="<?= site_url('article-detail/') . $r['slug'] ?>"><i class="far fa-user-circle"></i> by <?= $r['nama_pengguna'] ?> </a>
                                             </li>


                                         </ul>
                                         <h3 class="blog-one__title"><a href="<?= site_url('article-detail/') . $r['slug'] ?>"><?= $r['judul'] ?></a></h3>
                                     </div>
                                 </div>
                             </div>

                         <?php endforeach; ?>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--Testimonial One End-->



 <!--Blog One Start-->
 <section class="blog-one">
     <div class="container">
         <div class="section-title text-center">
             <span class="section-title__tagline">Budaya Sumut</span>
             <h2 class="section-title__title">Peninggalan Budaya</h2>
             <div class="section-title__line"></div>
         </div>
         <div class="row">
             <?php foreach ($artikel1  as $r) : ?>
                 <div class="col-xl-3 col-lg-3   wow fadeInUp" data-wow-delay="100ms">
                     <!--Blog One Start-->
                     <div class="blog-one__single">
                         <div class="blog-one__img">
                             <img style="height: 230px;" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                             <a href="<?= site_url('article-detail/') . $r['slug'] ?>">
                                 <span class="blog-one__plus"></span>
                             </a>
                         </div>
                         <div class="blog-one__content" style="height: 150px;">
                             <div class="blog-one__date">
                                 <p><?= $r['published_at'] ?></p>
                             </div>
                             <ul class="list-unstyled blog-one__meta">
                                 <li><a href="<?= site_url('article-detail/') . $r['slug'] ?>"><i class="far fa-user-circle"></i> by <?= $r['nama_pengguna'] ?> </a>
                                 </li>


                             </ul>
                             <h3 class="blog-one__title"><a href="<?= site_url('article-detail/') . $r['slug'] ?>"><?= $r['judul'] ?></a></h3>
                         </div>
                     </div>
                 </div>
             <?php endforeach; ?>

         </div>
     </div>
 </section>
 <!--Blog One End-->