<form action="<?= site_url('footer/save-footer/four') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id" value="<?= $footer['id'] ?>">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Judul</label>
                <input class="form-control" name="judul" value="<?= $footer['judul'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Telepon</label>
                <input class="form-control" name="telepon" value="<?= $footer['telepon'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="<?= $footer['email'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Alamat</label>
                <input class="form-control" name="alamat" value="<?= $footer['alamat'] ?>" type="text" placeholder="Enter Text">
            </div>


        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>