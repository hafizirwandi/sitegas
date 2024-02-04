<!--Page Header Start-->
<section class="page-header" style="margin-top: 0px;">
    <div class="page-header-bg" style="background-image: url(<?= base_url() ?>assets/bg-page.png)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li>Home</li>
                <li><span>/</span></li>
                <li>Artikel</li>
            </ul>
            <br>
            <br>
            <div class="alert" style="background-color:#214c5d">
                <form method="get" action="<?= site_url('article') ?>">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <select name="cat" class="form-control" id="">
                                <option value="99">Semua kategori</option>
                                <?php foreach ($kategori as $r) : ?>
                                    <option value="<?= $r['slug'] ?>" <?= $r['slug'] == $this->input->get('cat') ? 'selected' : '' ?>><?= $r['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="kabkota" class="form-control" id="">
                                <option value="99">Semua Kabupaten Kota</option>
                                <?php foreach ($kab_kota as $r) : ?>
                                    <option value="<?= $r['slug'] ?>" <?= $r['slug'] == $this->input->get('kabkota') ? 'selected' : '' ?>><?= $r['nama_kab_kota'] ?></option>
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
            <div class="col-xl-8 col-lg-7">
                <div class="blog-sideabr__left">

                    <div class="blog-sidebar__content">
                        <!--Blog Sidebar Single-->
                        <?php if ($artikel) : ?>

                            <div class="blog-sidebar__single">
                                <div class="blog-sidebar__img">
                                    <img src="<?= base_url('uploads/artikel/') . $artikel['gambar_utama'] ?>" alt="">
                                </div>
                                <div class="blog-sidebar__content-box">
                                    <ul class="list-unstyled blog-sibebar__meta">
                                        <li><a href="<?= site_url('article-detail/') . $artikel['slug'] ?>"><i class="far fa-user-circle"></i> <?= $artikel['nama_pengguna'] ?>
                                            </a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><?= $artikel['published_at'] ?></li>
                                    </ul>
                                    <h3 class="blog-sidebar__title">
                                        <a href="<?= site_url('article-detail/') . $artikel['slug'] ?>"><?= $artikel['judul'] ?></a>
                                    </h3>
                                    <p class="blog-sidebar__text"><?= $artikel['artikel'] ?></p>

                                </div>
                            </div>
                            <hr>

                        <?php else : ?>
                            <center>
                                <h3>Data Tidak Ditemukan</h3>
                            </center>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 order-first">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php foreach ($latest_post as $r) : ?>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                            <a href="<?= site_url('article-detail/') . $r['slug'] ?>"><?= $r['judul'] ?></a>
                                        </h3>
                                    </div>
                                </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Kategori</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <?php foreach ($kategori as $r) :

                                if ($this->input->get('kabkota') && $this->input->get('kabkota') != '99') {
                                    $link = site_url('article?cat=') . $r['slug'] . '&kabkota=' . $this->input->get('kabkota');
                                } else {
                                    $link = site_url('article?cat=') . $r['slug'];
                                }
                            ?>

                                <li <?= $this->input->get('cat') == $r['slug'] ? "class='active'" : "" ?>><a href="<?= $link ?>"><?= $r['nama_kategori'] ?><span class="fa fa-angle-right"></span></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Page End-->