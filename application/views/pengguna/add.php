<form role="form" method="post" action="<?php echo site_url("pengguna/save") ?>" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_pengguna" value="">
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Enter Text" required>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Role</label>
                    <select class="form-control" name="level_login" placeholder="Enter Text" required>
                        <option value="1">Admin</option>
                    </select>
                </div>
            </div>


            <div class="form-body">
                <div class="form-group">
                    <label class="required">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Text" required>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="required">Password</label>
                    <input type="hidden" name="password2" value="">
                    <input type="password" class="form-control" name="password" placeholder="Enter Text" required>
                </div>
            </div>


        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
    </div>
</form>