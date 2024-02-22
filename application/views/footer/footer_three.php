<form action="<?= site_url('footer/save-footer/three') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id" value="<?= $footer['id'] ?>">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Judul</label>
                <input class="form-control" name="judul" value="<?= $footer['judul'] ?>" type="text" placeholder="Enter Text">
            </div>

        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>

<button class="btn btn-sm btn-success btn-icon mb-1 mt-2" onclick="add()"> <i data-feather='plus'></i></button>

<table class="table">
    <thead>
        <tr>
            <th>Nama Link</th>
            <th>Link</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($link as $r) : ?>
            <tr>
                <td><?= $r['judul'] ?></td>
                <td><?= $r['url'] ?></td>
                <td>
                    <a href="javascript:;" onclick="edit(`<?= $r['id_link'] ?>`)" class="btn btn-sm btn-warning btn-icon" title="Edit">
                        <i data-feather='edit'></i>
                    </a>
                    <form class="d-inline" method="post" action="<?= site_url("footer/delete-link") ?>">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <input type="hidden" name="id" value="<?= $r['id_link'] ?>">
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-secondary btn-icon" title="Hapus">
                            <i data-feather='trash'></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



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
        $('#myModal .modal-header').html('Tambah Link');
        $('#myModal .modal-body').load('<?= site_url('footer/add-link/footer-three') ?>');
    }

    function edit(id) {

        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Edit Link');
        $('#myModal .modal-body').load('<?= site_url('footer/edit-link/') ?>' + id);

    }
</script>