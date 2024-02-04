<!-- Blog Detail -->
<div class="blog-detail-wrapper">
    <div class="row">
        <!-- Blog -->
        <div class="col-12">
            <div class="card">
                <img src="<?= base_url('uploads/artikel/') . $data['gambar_utama'] ?>" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                <div class="card-body">
                    <h4 class="card-title"><?= $data['judul'] ?></h4>
                    <div class="d-flex">
                        <div class="avatar me-50">
                            <img src="<?= base_url('uploads/logo_kab_kota/') . $data['logo'] ?>" alt="Avatar" width="24" height="24" />
                        </div>
                        <div class="author-info">
                            <small class="text-muted me-25">by</small>
                            <small><a href="#" class="text-body"><?= $data['nama_pengguna'] ?></a></small>
                            <span class="text-muted ms-50 me-25">|</span>
                            <small class="text-muted"><?= $data['published_at'] ?></small>
                        </div>
                    </div>
                    <div class="my-1 py-25">
                        <?php if ($kategori1) : ?>
                            <?php foreach ($kategori1 as $j) : ?>
                                <span class="badge badge-light-primary"><?= $j['nama_kategori'] ?></span><br>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <p class="card-text mb-2">
                        <?= $data['artikel'] ?>
                    </p>



                </div>
            </div>
        </div>
        <!--/ Blog -->

        <!-- Blog Comment -->
        <?php if ($comment) : ?>
            <div class="col-12 mt-1" id="blogComment">
                <h6 class="section-label mt-25">Comment</h6>
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($comment as $r) : ?>
                            <div class="d-flex align-items-start" style="margin-bottom: 10px; border:1px solid #eaeaea; padding:10px; border-radius:15px;">
                                <div class="avatar me-75">
                                    <img src="<?= base_url('uploads/logo_kab_kota/') . $r['logo'] ?>" width="38" height="38" alt="Avatar" />
                                </div>
                                <div class="author-info">
                                    <h6 class="fw-bolder mb-25"><?= $r['nama_pengguna'] ?></h6>
                                    <p class="card-text"><small class="text-muted"><?= $r['created_at'] ?></small></p>
                                    <p class="card-text">
                                        <?= $r['comment'] ?>
                                    </p>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!--/ Blog Comment -->

        <!-- Leave a Blog Comment -->
        <?php if ($this->session->userdata('id_pengguna') == $data['created_by'] || $this->session->userdata('role') == '1') : ?>
            <div class="col-12 mt-1">
                <h6 class="section-label mt-25">Leave a Comment</h6>
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="post" action="<?= site_url('artikel/save-comment') ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">
                            <input type="hidden" name="id_comment" value="">
                            <div class="row">

                                <div class="col-12">
                                    <textarea class="form-control mb-2" rows="4" name="comment" placeholder="Comment"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!--/ Leave a Blog Comment -->
    </div>
</div>
<!--/ Blog Detail -->