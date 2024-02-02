<!-- Blog List -->
<div class="blog-list-wrapper">
    <!-- Blog List Items -->
    <div class="row">
        <?php foreach ($data as $r) : ?>
            <div class="col-md-6 col-12">
                <div class="card" style="height: 550px;">
                    <a href="page-blog-detail.html">
                        <?php if ($r['gambar_utama']) : ?>
                            <img class="card-img-top img-fluid" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt="Blog Post pic" />
                        <?php endif; ?>
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading"><?= $r['judul'] ?></a>
                        </h4>
                        <div class="d-flex">
                            <div class="avatar me-50">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                            </div>
                            <div class="author-info">
                                <small class="text-muted me-25">by</small>
                                <small><a href="#" class="text-body">Ghani Pradita</a></small>
                                <span class="text-muted ms-50 me-25">|</span>
                                <small class="text-muted">Jan 10, 2020</small>
                            </div>
                        </div>
                        <div class="my-1 py-25">
                            <?php foreach ($r['kategori'] as $j) : ?>
                                <a href="#">
                                    <span class="badge rounded-pill badge-light-primary"><?= $j['nama_kategori'] ?></span>
                                </a>
                            <?php endforeach; ?>

                        </div>
                        <p class="card-text blog-content-truncate">
                            Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                        </p>
                        <hr />
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="page-blog-detail.html#blogComment">
                                <div class="d-flex align-items-center">
                                    <i data-feather="message-square" class="font-medium-1 text-body me-50"></i>
                                    <span class="text-body fw-bold">76 Comments</span>
                                </div>
                            </a>
                            <a href="page-blog-detail.html" class="fw-bold">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
    <!--/ Blog List Items -->


</div>
<!--/ Blog List -->