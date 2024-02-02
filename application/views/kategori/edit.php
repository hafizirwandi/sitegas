<form action="<?= site_url('kategori/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Nama Kategori</label>
                <input class="form-control" name="nama_kategori" type="text" placeholder="Enter Text">
            </div>


        </div>

    </div>
    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>