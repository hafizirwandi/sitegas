<div class="card">
    <div class="card-header">
        <h4 class="card-title">Halaman</h4>

    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <a href="<?= site_url('halaman') ?>" class="btn <?= $sub_content == 'halaman/hubungi_kami' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">Hubungi Kami</a>
            </div>
            <div class="col-md-9">

                <?php $this->load->view($sub_content); ?>
            </div>
        </div>
    </div>
</div>