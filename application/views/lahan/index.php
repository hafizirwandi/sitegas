<div class="card">
    <div class="card-header">
        <h4 class="card-title">Lahan</h4>
        <button type="button" onclick="add()" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='file-plus'></i> Tambah</button>
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
                                <a href="javascript:;" onclick="edit(`<?= $r['id_lahan'] ?>`)" class="btn btn-sm btn-warning btn-icon" title="Edit">
                                    <i data-feather='edit'></i>
                                </a>
                                <form class="d-inline" method="post" action="<?= site_url("lahan/delete") ?>">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                    <input type="hidden" name="id" value="<?= $r['id_lahan'] ?>">
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-secondary btn-icon" title="Hapus">
                                        <i data-feather='trash'></i>
                                    </button>
                                </form>

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
    function add() {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Tambah Lahan');
        $('#myModal .modal-body').load('<?= site_url('lahan/add') ?>');
    }

    function edit(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Edit Lahan');
        $('#myModal .modal-body').load('<?= site_url('lahan/edit/') ?>' + id);
    }

    function detail(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Detail Lahan');
        $('#myModal .modal-body').load('<?= site_url('lahan/detail/') ?>' + id);
    }
</script>