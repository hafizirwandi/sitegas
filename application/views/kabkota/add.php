<form action="<?= site_url('kab-kota/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_kk" value="">
    <input type="hidden" name="logo" value="">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Nama Kabupaten Kota</label>
                <input class="form-control" name="nama_kab_kota" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Logo</label>
                <input class="form-control" name="file_logo" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data</span>
            </div>

        </div>

    </div>
    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>