<div class="row mb-3">
    <div class="col-md-12">
        <?php if ($data['foto_lahan']) : ?>
            <img style="width:100% ;" src="<?= base_url('uploads/foto_lahan/') . $data['foto_lahan'] ?>">
        <?php endif; ?>
    </div>
</div>
<div class="row mt-3">

    <div class="col-md-6">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td style="width:150px">Kelurahan</td>
                    <td style="width:5px">:</td>
                    <td><?= KELURAHAN[$data['kelurahan']] ?></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><?= KATEGORI[$data['kategori']] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>Luas Lahan</td>
                    <td>:</td>
                    <td><?= $data['luas_lahan'] ?></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td><?= $data['lokasi'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Maps</td>
                    <td>:</td>
                    <td><a href="https://www.google.co.id/maps?q=<?= $data['long_lat'] ?>" class="btn btn-primary btn-sm" target="_blank">Lokasi</a></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?= $data['keterangan'] ?></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td style="width:100px;">Bts. Utara</td>
                    <td>:</td>
                    <td><?= $data['batas_utara'] ?></td>
                </tr>
                <tr>
                    <td>Bts. Timur</td>
                    <td>:</td>
                    <td><?= $data['batas_timur'] ?></td>
                </tr>
                <tr>
                    <td>Bts. Selatan</td>
                    <td>:</td>
                    <td><?= $data['batas_selatan'] ?></td>
                </tr>
                <tr>
                    <td>Bts. Barat</td>
                    <td>:</td>
                    <td><?= $data['batas_barat'] ?></td>
                </tr>
                <tr>
                    <td style="width:150px">No. Sertifikat</td>
                    <td style="width:5px">:</td>
                    <td><?= $data['no_sertifikat'] ?></td>
                </tr>
                <tr>
                    <td>Tgl Sertifikat</td>
                    <td>:</td>
                    <td><?= tgl_indo($data['tgl_sertifikat']) ?></td>
                </tr>
                <tr>
                    <td>Scan Sertifikat</td>
                    <td>:</td>
                    <td>
                        <?php if ($data['scan_sertifikat']) : ?>
                            <a href="<?= base_url('uploads/scan_sertifikat/') . $data['scan_sertifikat'] ?>" class="btn btn-primary btn-sm" target="_blank">Scan</a>
                        <?php endif; ?>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>