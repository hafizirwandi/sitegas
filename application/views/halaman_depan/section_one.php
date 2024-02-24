<form action="<?= site_url('halaman-depan/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_hd" value="<?= $hd['id_hd'] ?>">
    <input type="hidden" name="gambar_1" value="<?= $data['gambar_1'] ?>">
    <input type="hidden" name="gambar_2" value="<?= $data['gambar_2'] ?>">
    <div class="row">
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Judul</label>
                <input class="form-control" name="judul" value="<?= $data['judul'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Sub Judul</label>
                <input class="form-control" name="sub_judul" value="<?= $data['sub_judul'] ?>" type="text" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" placeholder="Enter Text"><?= $data['keterangan'] ?></textarea>
            </div>
            <img style="width: 30%;" src="<?= base_url('uploads/halaman/') . $data['gambar_1'] ?>" alt="">
            <div class="mb-1">

                <label class="form-label">Gambar 1</label>

                <input class="form-control" name="file_gambar_1" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data Ukuran (482px x 652px)</span>

            </div>
            <img style="width: 30%;" src="<?= base_url('uploads/halaman/') . $data['gambar_2'] ?>" alt="">
            <div class="mb-1">
                <img src="" alt="">
                <label class="form-label">Gambar 2</label>
                <input class="form-control" name="file_gambar_2" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data data Ukuran (232px x 312px)</span>
            </div>

        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>