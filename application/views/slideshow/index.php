<div class="card">
    <div class="card-header">
        <h4 class="card-title">Slideshow</h4>
        <a href="<?= site_url('slideshow/add') ?>" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='file-plus'></i> Tambah</a>
    </div>
    <div class="card-body">

        <div style="overflow-y: hidden">
            <table class="table table-striped table-bordered table-hover dt-basic ">
                <thead>
                    <tr>

                        <th>Slideshow</th>
                        <th>Judul</th>
                        <th>Sub Judul</th>
                        <th>Status</th>
                        <th>Posisi</th>
                        <th style="width:100px ;">Aksi</th>

                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($data as $r) : ?>
                        <tr>

                            <td><?php if ($r['slideshow']) : ?> <img style="width:200px ;" src="<?= base_url('uploads/slideshow/') . $r['slideshow'] ?>" alt=""> <?php endif; ?></td>
                            <td><?= $r['judul'] ?></td>

                            <td><?= $r['sub_judul'] ?></td>
                            <td><?= $r['status'] ?></td>
                            <td><?= $r['posisi'] ?></td>
                            <td>


                                <a href="<?= site_url('slideshow/edit/') . $r['id_slideshow'] ?>" class="btn btn-sm btn-warning btn-icon" title="Edit">
                                    <i data-feather='edit'></i>
                                </a>
                                <form class="d-inline" method="post" action="<?= site_url("slideshow/delete") ?>">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                    <input type="hidden" name="id" value="<?= $r['id_slideshow'] ?>">
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
        $('#myModal .modal-header').html('Tambah Slideshow');
        $('#myModal .modal-body').load('<?= site_url('slideshow/add') ?>');
    }

    function edit(id) {
        $('#myModal').modal('show');
        $('#myModal .modal-header').html('Edit Slideshow');
        $('#myModal .modal-body').load('<?= site_url('slideshow/edit/') ?>' + id);
    }
</script>