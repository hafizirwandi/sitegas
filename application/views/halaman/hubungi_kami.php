<form action="<?= site_url('halaman/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_halaman" value="<?= $halaman['id_halaman'] ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">Judul</label>
                <input class="form-control" name="judul" value="<?= $data['judul'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Telepon</label>
                <input class="form-control" name="telepon" value="<?= $data['telepon'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="<?= $data['email'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Alamat</label>
                <input class="form-control" name="alamat" value="<?= $data['alamat'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Facebook</label>
                <input class="form-control" name="facebook" value="<?= $data['facebook'] ?>" type="text" placeholder="Enter Text">
            </div>
        </div>
        <div class="col-md-6">

            <div class="mb-1">
                <label class="form-label">Twitter</label>
                <input class="form-control" name="twitter" value="<?= $data['twitter'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Instagram</label>
                <input class="form-control" name="instagram" value="<?= $data['instagram'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Youtube</label>
                <input class="form-control" name="youtube" value="<?= $data['youtube'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Tiktok</label>
                <input class="form-control" name="tiktok" value="<?= $data['tiktok'] ?>" type="text" placeholder="Enter Text">
            </div>

        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>