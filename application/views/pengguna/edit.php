<form role="form" method="post" action="<?php echo site_url("pengguna/save") ?>" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_pengguna" value="<?= $data['id_pengguna'] ?>">
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" placeholder="Enter Text" required>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Role</label>
                    <select class="form-control" name="level_login" placeholder="Enter Text" required>
                        <option value="1" <?= $data['level_login'] == '1' ? 'selected' : '' ?>>Admin</option>
                        <option value="2" <?= $data['level_login'] == '2' ? 'selected' : '' ?>>Author</option>
                    </select>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Kab Kota</label>
                    <select class="form-control" name="id_kk" placeholder="Enter Text" required>
                        <?php foreach ($kabkota as $r) : ?>
                            <option value="<?= $r['id_kk'] ?>" <?= $data['id_kk'] == $r['id_kk'] ? 'selected' : '' ?>><?= $r['nama_kab_kota'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" placeholder="Enter Text" required>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Password</label>
                    <input type="hidden" name="password2" value="<?= $data['password'] ?>">
                    <input type="password" class="form-control" name="password" placeholder="Enter Text">
                    <span style="color:red">Kosongkan jika tidak ingin merubah data.</span>
                </div>
            </div>


        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
    </div>
</form>