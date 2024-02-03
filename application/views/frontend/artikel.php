 <!--Page Header Start-->
 <section class="page-header" style="margin-top: 0px;">
     <div class="page-header-bg" style="background-image: url(assets-public/assets/images/backgrounds/page-header-bg.jpg)">
     </div>
     <div class="container">
         <div class="page-header__inner">
             <ul class="thm-breadcrumb list-unstyled">
                 <li><a href="index.html">Home</a></li>
                 <li><span>/</span></li>
                 <li>Artikel</li>
             </ul>
             <br>
             <br>
             <div class="alert" style="background-color:#214c5d">
                 <form action="">
                     <div class="row justify-content-center">
                         <div class="col-md-5">
                             <select name="" class="form-control" id="">
                                 <option value="99">Semua kategori</option>
                                 <?php foreach ($kategori as $r) : ?>
                                     <option value="<?= $r['id_kategori'] ?>" <?= $r['slug'] == $this->input->get('cat') ? 'selected' : '' ?>><?= $r['nama_kategori'] ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="col-md-6">
                             <select name="" class="form-control" id="">
                                 <option value="99">Semua Kabupaten Kota</option>
                                 <?php foreach ($kab_kota as $r) : ?>
                                     <option value="<?= $r['id_kk'] ?>"><?= $r['nama_kab_kota'] ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="col-md-1">
                             <button class="btn btn-primary" style="width: 100%;">Cari</button>
                         </div>

                     </div>


                 </form>
             </div>

         </div>
     </div>
 </section>
 <!--Page Header End-->

 <!--Blog Page Start-->
 <section class="blog-one" style="margin-bottom:50px">
     <div class="container">
         <div class="row">

             <div class="blog-sidebar__content">
                 <!--Blog Sidebar Single-->
                 <?php foreach ($artikel as $r) : ?>
                     <div class="blog-sidebar__single">
                         <div class="blog-sidebar__img">
                             <img src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                         </div>
                         <div class="blog-sidebar__content-box">
                             <ul class="list-unstyled blog-sibebar__meta">
                                 <li><a href="<?= site_url('article-detail/') . $r['slug'] ?>"><i class="far fa-user-circle"></i> <?= $r['nama_pengguna'] ?>
                                     </a>
                                 </li>
                                 <li><span>/</span></li>
                                 <li><?= $r['published_at'] ?></li>
                             </ul>
                             <h3 class="blog-sidebar__title">
                                 <a href="<?= site_url('article-detail/') . $r['slug'] ?>"><?= $r['judul'] ?></a>
                             </h3>
                             <p class="blog-sidebar__text"><?= $r['artikel'] ?></p>
                             <div class="blog-sidebar__bottom-btn-box">
                                 <a href="<?= site_url('article-detail/') . $r['slug'] ?>" class="blog-sidebar__btn thm-btn">Read More</a>
                             </div>
                         </div>
                     </div>
                     <hr>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </section>
 <!--Blog Page End-->