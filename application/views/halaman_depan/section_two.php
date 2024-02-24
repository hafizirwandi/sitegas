<form action="<?= site_url('halaman-depan/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_hd" value="<?= $hd['id_hd'] ?>">
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
                <label class="form-label">Tampil Berdasarkan</label>
                <select name="via" id="via" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1" <?= $data['via'] == '1' ? 'selected' : '' ?>>Kategori</option>
                    <option value="2" <?= $data['via'] == '2' ? 'selected' : '' ?>>Kab Kota</option>
                </select>
            </div>
            <div id="kategori" style="display: none;">
                <div class="mb-1">
                    <label class="form-label">Kategori</label>
                    <select name="id_kategori" class="form-control select2">
                        <option value="">Pilih</option>
                        <?php foreach ($kategori as $r) : ?>
                            <option value="<?= $r['id_kategori'] ?>" <?= $r['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>><?= $r['nama_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div id="kabkota" style="display: none;">
                <div class="mb-1">
                    <label class="form-label">kabkota</label>
                    <select name="id_kk" class="form-control select2">
                        <option value="">Pilih</option>
                        <?php foreach ($kabkota as $r) : ?>
                            <option value="<?= $r['id_kk'] ?>" <?= $r['id_kk'] == $data['id_kk'] ? 'selected' : '' ?>><?= $r['nama_kab_kota'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>


        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>