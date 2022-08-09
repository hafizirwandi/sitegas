<div class="card">
    <div class="card-header">
        <h4 class="card-title">Laporan Berdasarkan Kelurahan</h4>

        <div class="col-md-6 col-12 mb-1">
            <form action="" method="get">
                <div class="input-group">
                    <select class="form-control" name="kategori">
                        <option value="">Pilih Kategori</option>
                        <?php foreach (KATEGORI as $key => $value) : ?>
                            <option value="<?= $key ?>" <?= ($key == $this->input->get('kategori')) ? 'selected' : '' ?>><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-outline-primary waves-effect"><i data-feather='search'></i> Cari</button>
                </div>
            </form>
        </div>

    </div>
    <div class="card-body">

        <div style="overflow-y: hidden">
            <table class="table table-striped table-bordered table-hover dt-basic ">
                <thead>
                    <tr>
                        <th>Kelurahan</th>
                        <th>Jenis</th>
                        <th>Nama</th>
                        <th>Luas</th>
                        <th>Lokasi</th>
                        <th>Maps</th>
                        <th>Sertifikat</th>
                        <th style="width:100px ;">Aksi</th>

                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $r) : ?>
                        <tr>
                            <td><?= KELURAHAN[$r['kelurahan']] ?></td>
                            <td><?= KATEGORI[$r['kategori']] ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['luas_lahan'] ?></td>
                            <td><?= $r['lokasi'] ?></td>
                            <td><a href="https://www.google.co.id/maps?q=<?= $r['long_lat'] ?>" class="btn btn-primary btn-sm" target="_blank">Lokasi</a></td>
                            <td><?= is_sertifikat2($r['no_sertifikat']) ?></td>

                            <td>
                                <a href="javascript:;" onclick="detail(`<?= $r['id_lahan'] ?>`)" class="btn btn-sm btn-success btn-icon" title="Detail">
                                    <i data-feather='eye'></i>
                                </a>


                            </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade text-start" id="myModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<script>
    function detail(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Detail Lahan');
        $('#myModal .modal-body').load('<?= site_url('lahan/detail/') ?>' + id);
    }
</script>