<!--/ Page layout -->
<div class="row">
    <h3>Dashboard</h3>
    <div class="col-xl-12 col-md-12 col-12">

        <div class="card card-statistics">

            <div class="card-body statistics-body">
                <div class="row">
                    <?php foreach ($kategori as $r) : ?>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mt-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather='grid'></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0"></h4>
                                    <p class="card-text font-small-3 mb-0"><?= $r['nama_kategori'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>