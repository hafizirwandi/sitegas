<div class="card">
    <div class="card-header">
        <h4 class="card-title">Pengguna</h4>
        <button type="button" onclick="add()" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='file-plus'></i> Tambah</button>
    </div>
    <div class="card-body">
        <div style="overflow-y: hidden">
            <table class="table table-striped table-bordered table-hover dt-basic ">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th width="20px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $r) : ?>

                        <tr>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['username']     ?></td>
                            <td><?= $r['level_login'] == '1' ? 'Super Admin' : 'Author'; ?></td>
                            <td><a href="javascript:;" onclick="edit(`<?= $r['id_pengguna'] ?>`)" class="btn btn-sm btn-warning btn-icon" title="Edit">
                                    <i data-feather='edit'></i>
                                </a>
                                <form class="d-inline" method="post" action="<?= site_url("pengguna/delete") ?>">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                    <input type="hidden" name="id" value="<?= $r['id_pengguna'] ?>">
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-secondary btn-icon" title="Hapus">
                                        <i data-feather='trash'></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade text-start" id="myModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-md">
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
        $('#myModal .modal-header').html('Tambah Pengguna');
        $('#myModal .modal-body').load('<?= site_url('pengguna/add') ?>');
    }

    function edit(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Edit Pengguna');
        $('#myModal .modal-body').load('<?= site_url('pengguna/edit/') ?>' + id);
    }
</script>