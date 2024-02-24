<div class="card">
    <div class="card-header">
        <h4 class="card-title">Halaman Depan</h4>

    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <a href="<?= site_url('halaman-depan') ?>" class="btn <?= $sub_content == 'halaman_depan/section_one' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">About</a>
                <a href="<?= site_url('halaman-depan?subcontent=section-two') ?>" class="btn <?= $sub_content == 'halaman_depan/section_two' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">Section One</a>
                <a href="<?= site_url('halaman-depan?subcontent=section-four') ?>" class="btn <?= $sub_content == 'halaman_depan/section_four' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">Section Two</a>
                <a href="<?= site_url('halaman-depan?subcontent=section-five') ?>" class="btn <?= $sub_content == 'halaman_depan/section_five' ? 'btn-primary' : 'btn-outline-primary' ?> mt-1" style="width: 100%;">Section Three</a>
            </div>
            <div class="col-md-9">

                <?php $this->load->view($sub_content); ?>
            </div>
        </div>
    </div>
</div>