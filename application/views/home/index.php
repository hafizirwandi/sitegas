<!--/ Page layout -->
<div class="row">
    <h3>Dashboard</h3>
    <div class="col-xl-12 col-md-12 col-12">

        <div class="card card-statistics">

            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather='grid'></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0"><?= number_format($count['mesjid']) ?></h4>
                                <p class="card-text font-small-3 mb-0">MESJID</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-info me-2">
                                <div class="avatar-content">
                                    <i data-feather='grid'></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0"><?= number_format($count['gereja']) ?></h4>
                                <p class="card-text font-small-3 mb-0">Gereja</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-danger me-2">
                                <div class="avatar-content">
                                    <i data-feather='grid'></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0"><?= number_format($count['sekolah_agama']) ?></h4>
                                <p class="card-text font-small-3 mb-0">Sekolah Agama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-success me-2">
                                <div class="avatar-content">
                                    <i data-feather='grid'></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0"><?= number_format($count['tanah_pemakaman']) ?></h4>
                                <p class="card-text font-small-3 mb-0">Tanah Pemakaman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <h3>Sertifikat Lahan</h3>
    <div class="col-lg-3 col-md-6 col-12">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Mesjid</h4>

            </div>
            <div class="card-body p-0">
                <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                <div class="row border-top text-center mx-0">
                    <div class="col-6 border-end py-1">
                        <p class="card-text text-muted mb-0">Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $countada['mesjid'] ?></h3>
                    </div>
                    <div class="col-6 py-1">
                        <p class="card-text text-muted mb-0">Tidak Ada </p>
                        <h3 class="fw-bolder mb-0"><?= $count['mesjid'] - $countada['mesjid'] ?></h3>
                    </div>
                    <?php
                    if ($count['mesjid']) {
                        $persen = round($countada['mesjid'] / $count['mesjid'] * 100, 2);
                    } else {
                        $persen = 0;
                    }

                    ?>
                    <input type="hidden" id="mesjid" value="<?= $persen ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Gereja</h4>
            </div>
            <div class="card-body p-0">
                <div id="goal-overview-radial-bar-chart2" class="my-2"></div>
                <div class="row border-top text-center mx-0">
                    <div class="col-6 border-end py-1">
                        <p class="card-text text-muted mb-0">Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $countada['gereja'] ?></h3>
                    </div>
                    <div class="col-6 py-1">
                        <p class="card-text text-muted mb-0">Tidak Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $count['gereja'] - $countada['gereja'] ?></h3>
                    </div>
                    <?php
                    if ($count['gereja']) {
                        $persen = round($countada['gereja'] / $count['gereja'] * 100, 2);
                    } else {
                        $persen = 0;
                    }
                    ?>
                    <input type="hidden" id="gereja" value="<?= $persen ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Sekolah Agama</h4>
            </div>
            <div class="card-body p-0">
                <div id="goal-overview-radial-bar-chart3" class="my-2"></div>
                <div class="row border-top text-center mx-0">
                    <div class="col-6 border-end py-1">
                        <p class="card-text text-muted mb-0">Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $countada['sekolah_agama'] ?></h3>
                    </div>
                    <div class="col-6 py-1">
                        <p class="card-text text-muted mb-0">Tidak Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $count['sekolah_agama'] - $countada['sekolah_agama'] ?></h3>
                    </div>
                    <?php
                    if ($count['sekolah_agama']) {
                        $persen = round($countada['sekolah_agama'] / $count['sekolah_agama'] * 100, 2);
                    } else {
                        $persen = 0;
                    }
                    ?>
                    <input type="hidden" id="sekolah_agama" value="<?= $persen ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Tanah Pemakaman</h4>

            </div>
            <div class="card-body p-0">
                <div id="goal-overview-radial-bar-chart4" class="my-2"></div>
                <div class="row border-top text-center mx-0">
                    <div class="col-6 border-end py-1">
                        <p class="card-text text-muted mb-0">Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $countada['tanah_pemakaman'] ?></h3>
                    </div>
                    <div class="col-6 py-1">
                        <p class="card-text text-muted mb-0">Tidak Ada</p>
                        <h3 class="fw-bolder mb-0"><?= $count['tanah_pemakaman'] - $countada['tanah_pemakaman'] ?></h3>
                    </div>

                    <?php if ($count['tanah_pemakaman']) {
                        $persen = round($countada['tanah_pemakaman'] / $count['tanah_pemakaman'] * 100, 2);
                    } else {
                        $persen = 0;
                    }
                    ?>
                    <input type="hidden" id="tanah_pemakaman" value="<?= $persen ?>">
                </div>
            </div>
        </div>
    </div>

</div>