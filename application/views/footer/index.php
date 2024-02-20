<div class="card">
    <div class="card-header">
        <h4 class="card-title">Kabupaten Kota</h4>

    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <a href="<?= site_url('footer') ?>" class="btn <?= $sub_content == 'footer/footer_one' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">Footer One</a>
                <a href="<?= site_url('footer?subcontent=footer-two') ?>" class="btn btn-outline-primary mt-1" style="width: 100%;">Footer Two</a>
                <a href="<?= site_url('footer?subcontent=footer-three') ?>" class="btn btn-outline-primary mt-1" style="width: 100%;">Footer Three</a>
                <a href="<?= site_url('footer?subcontent=footer-four') ?>" class="btn btn-outline-primary mt-1" style="width: 100%;">Footer Four</a>
            </div>
            <div class="col-md-9">

                <?php $this->load->view($sub_content); ?>
            </div>
        </div>
    </div>
</div>