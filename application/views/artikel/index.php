<div class="card">
    <div class="card-header">
        <h4 class="card-title">Search</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="row justify-content-center">

                <div class="col-md-3">
                    <select name="kat" class="form-control">
                        <option value="99">Semua kategori</option>
                        <?php foreach ($kategori as $r) : ?>
                            <option value="<?= $r['id_kategori'] ?>" <?= $r['id_kategori'] == $this->input->get('kat') ? 'selected' : '' ?>><?= $r['nama_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <select name="kabkota" class="form-control">
                        <option value="99">Semua Kabupaten Kota</option>
                        <?php foreach ($kabkota as $r) : ?>
                            <option value="<?= $r['id_kk'] ?>" <?= $r['id_kk'] == $this->input->get('kabkota') ? 'selected' : '' ?>><?= $r['nama_kab_kota'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="status">
                        <option value="99">Semua Status</option>
                        <option value="1" <?= $this->input->get('status') == '1' ? 'selected' : '' ?>>Published</option>
                        <option value="2" <?= $this->input->get('status') == '2' ? 'selected' : '' ?>>Pending</option>
                        <option value="0" <?= $this->input->get('status') == '0' ? 'selected' : '' ?>>Draft</option>
                        <option value="3" <?= $this->input->get('status') == '3' ? 'selected' : '' ?>>Ditolak</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>


            </div>
        </form>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Artikel</h4>
        <a href="<?= site_url('artikel/add') ?>" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='file-plus'></i> Tambah</a>
    </div>
    <div class="card-body">

        <div style="overflow-y: hidden">
            <table class="table table-striped table-bordered table-hover dt-basic ">
                <thead>
                    <tr>

                        <th>Gambar Utama</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Publish Date</th>
                        <th>Kab Kota</th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th>Feedback</th>
                        <th>View</th>
                        <th style="width:100px ;">Aksi</th>

                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $r) : ?>
                        <tr>

                            <td><?php if ($r['gambar_utama']) : ?> <img style="width:200px ;" src="<?= base_url('uploads/artikel/') . $r['gambar_utama'] ?>" alt=""> <?php endif; ?></td>
                            <td><?= $r['judul'] ?></td>
                            <td><?php foreach ($r['kategori'] as $j) : ?>
                                    <span class="badge badge-light-primary"><?= $j['nama_kategori'] ?></span><br>
                                <?php endforeach; ?>
                            </td>
                            <td><?= $r['published_at'] ?></td>
                            <td><?= $r['nama_kab_kota'] ?></td>
                            <td><?= $r['nama_pengguna'] ?></td>
                            <td><?= statusTerbit($r['status']) ?></td>
                            <td><?= $r['jlh_comment'] ?></td>
                            <td><?= $r['view'] ?></td>


                            <td>
                                <a href="<?= site_url('artikel/detail/') . $r['id_artikel'] ?>" class="btn btn-sm btn-success btn-icon " title="Lihat">
                                    <i data-feather='eye'></i>
                                </a>
                                <?php if ($this->session->userdata('id_pengguna') == $r['created_by'] || $this->session->userdata('role') == '1') : ?>
                                    <a href="<?= site_url('artikel/edit/') . $r['id_artikel'] ?>" class="btn btn-sm btn-warning btn-icon" title="Edit">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <form class="d-inline" method="post" action="<?= site_url("artikel/delete") ?>">
                                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                        <input type="hidden" name="id" value="<?= $r['id_artikel'] ?>">
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-secondary btn-icon" title="Hapus">
                                            <i data-feather='trash'></i>
                                        </button>
                                    </form>
                                <?php endif; ?>

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
        $('#myModal .modal-header').html('Tambah Artikel');
        $('#myModal .modal-body').load('<?= site_url('artikel/add') ?>');
    }

    function edit(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Edit Artikel');
        $('#myModal .modal-body').load('<?= site_url('artikel/edit/') ?>' + id);
    }

    function detail(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Detail Artikel');
        $('#myModal .modal-body').load('<?= site_url('artikel/detail/') ?>' + id);
    }
</script>