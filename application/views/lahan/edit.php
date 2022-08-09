<form action="<?= site_url('lahan/save') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_lahan" value="<?= $data['id_lahan'] ?>">
    <input type="hidden" name="foto_lahan2" value="<?= $data['foto_lahan'] ?>">
    <input type="hidden" name="scan_sertifikat2" value="<?= $data['scan_sertifikat'] ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="">- Pilih -</option>
                    <?php foreach (KATEGORI as $key => $value) : ?>
                        <option value="<?= $key ?>" <?= ($key == $data['kategori']) ? 'selected' : '' ?>><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-1">
                <label class="form-label">Kelurahan</label>
                <select name="kelurahan" class="form-control" required>
                    <option value="">- Pilih -</option>
                    <?php foreach (KELURAHAN as $key => $value) : ?>
                        <option value="<?= $key ?>" <?= ($key == $data['kelurahan']) ? 'selected' : '' ?>><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-1">
                <label class="form-label">Nama</label>
                <input class="form-control" name="nama" type="text" placeholder="Enter Text" value="<?= $data['nama'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Batas Utara</label>
                <input class="form-control" name="batas_utara" type="text" placeholder="Enter Text" value="<?= $data['batas_utara'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Batas Selatan</label>
                <input class="form-control" name="batas_selatan" type="text" placeholder="Enter Text" value="<?= $data['batas_selatan'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Batas Timur</label>
                <input class="form-control" name="batas_timur" type="text" placeholder="Enter Text" value="<?= $data['batas_timur'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Batas Barat</label>
                <input class="form-control" name="batas_barat" type="text" placeholder="Enter Text" value="<?= $data['batas_barat'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Luas Lahan</label>
                <input class="form-control" name="luas_lahan" type="text" placeholder="Enter Text" value="<?= $data['luas_lahan'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Foto Lahan</label>
                <input class="form-control" name="foto_lahan" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data</span>
            </div>

        </div>
        <div class="col-md-6">

            <div class="mb-1">
                <label class="form-label">Lokasi</label>
                <input class="form-control" name="lokasi" type="text" placeholder="Enter Text" value="<?= $data['lokasi'] ?>" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Longitude & Latitude</label>
                <input class="form-control" name="long_lat" type="text" placeholder="49283042475475,893894757304" value="<?= $data['long_lat'] ?>" required>
            </div>

            <div class="mb-1">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" rows="4" name="alamat" placeholder="Enter Text" required><?= $data['alamat'] ?></textarea>
            </div>

            <div class="mb-1">
                <label class="form-label">No. Sertifikat</label>
                <input class="form-control" name="no_sertifikat" type="text" value="<?= $data['no_sertifikat'] ?>" placeholder="Enter Text">
            </div>
            <div class="mb-1">
                <label class="form-label">Tgl Sertifikat</label>
                <input class="form-control" name="tgl_sertifikat" type="date" placeholder="Enter Text" value="<?= $data['tgl_sertifikat'] ?>">
            </div>
            <div class="mb-1">
                <label class="form-label">Scan Sertifikat</label>
                <input class="form-control" name="scan_sertifikat" type="file" placeholder="Enter Text">
                <span style="color:red">Kosongkan jika tidak ada data</span>
            </div>
            <div class="mb-1">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" rows="4" name="keterangan" placeholder="Enter Text" required><?= $data['keterangan'] ?></textarea>
            </div>
        </div>
    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>