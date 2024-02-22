<link rel="stylesheet" href="<?= base_url('assets-admin/menu-editor/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css') ?>">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Menu</h4>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <br>
                <ul id="myEditor" class="sortableLists list-group">
                </ul>
                <button type="button" id="btnSave" class="btn btn-success mt-1"><i class="fas fa-save"></i> Simpan</button>
            </div>
            <div class="col-md-6">
                <br>
                <form id="frmEdit" class="form-horizontal">
                    <div class="mb-1">
                        <div class="form-group">
                            <label for="text">Text</label>
                            <div class="input-group">
                                <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
                                <!-- <div class="input-group-append">
                                    <button type="button" id="myEditor_icon" class="btn btn-outline-secondary"></button>
                                </div> -->
                            </div>
                            <input type="hidden" name="icon" class="item-menu">
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-group">
                            <label for="href">URL</label>
                            <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-group">
                            <label for="target">Target</label>
                            <select name="target" id="target" class="form-control item-menu">
                                <option value="_self">Self</option>
                                <option value="_blank">Blank</option>
                                <option value="_top">Top</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-group">
                            <label for="title">Tooltip</label>
                            <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
                        </div>
                    </div>
                    <div class="mb-1">
                        <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Update</button>
                        <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>