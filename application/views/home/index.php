<!--/ Page layout -->
<h3>Dashboard</h3>
<div class="row">

    <div class="col-xl-12 col-md-12 col-12">

        <div class="card card-statistics">

            <div class="card-body statistics-body">
                <h4>Jumlah Artikel Publish per Kategori</h4>
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
                                    <h4 class="fw-bolder mb-0"><?= $r['jlh'] ?></h4>
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

<div class="row mt-3">
    <div class="col-xl-6 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-body statistics-body">
                <h4>Jumlah Artikel Publish per Kabkota</h4>
                <table class="table table-striped  dt-basic">
                    <thead>
                        <tr>
                            <td>Kab Kota</td>
                            <td>Jlh</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kabkota as $r) : ?>

                            <tr>
                                <td><?= $r['nama_kab_kota'] ?></td>
                                <td><?= $r['jlh'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-12">

        <div class="card card-statistics">
            <div class="card-body statistics-body">
                <h4>Top 5 Kabkota Terbanyak Publish Artikel</h4>
                <div id="chart1"></div>
            </div>
        </div>
    </div>

</div>
<div class="row mt-3">
    <div class="col-xl-12 col-md-12 col-12">
        <div class="card card-statistics">
            <div class="card-body statistics-body">
                <h4>Grafik Kabkota Publish Artikel Tahun 2024</h4>
                <div id="chart2"></div>
            </div>
        </div>
    </div>
</div>