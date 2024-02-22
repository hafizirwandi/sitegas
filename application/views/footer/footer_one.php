<form action="<?= site_url('footer/save-footer/one') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id" value="<?= $footer['id'] ?>">
    <input type="hidden" name="logo" value="<?= $footer['logo'] ?>">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Facebook</label>
                <input class="form-control" name="facebook" value="<?= $footer['facebook'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Twitter</label>
                <input class="form-control" name="twitter" value="<?= $footer['twitter'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Instagram</label>
                <input class="form-control" name="instagram" value="<?= $footer['instagram'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Youtube</label>
                <input class="form-control" name="youtube" value="<?= $footer['youtube'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Tiktok</label>
                <input class="form-control" name="tiktok" value="<?= $footer['tiktok'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Logo</label>
                <input class="form-control" name="file_logo" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data</span>
            </div>

        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>