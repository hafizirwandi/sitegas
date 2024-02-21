<form action="<?= site_url('footer/save-link') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <input type="hidden" name="id_link" value="">
    <input type="hidden" name="footer" value="<?= $footer ?>">
    <div class="row">

        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">Judul</label>
                <input class="form-control" name="judul" type="text" placeholder="Enter Text">
            </div>

        </div>
        <div class="col-md-12">

            <div class="mb-1">
                <label class="form-label">URL</label>
                <input class="form-control" name="url" type="text" placeholder="https://">
            </div>

        </div>

    </div>

    <div class="mb-1">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>

<script>
    // $(function() {
    //     $("#ambilDari").change(function() {
    //         let val = $(this).val();

    //         if (val == 1) {
    //             $("#kategori").removeClass('d-none');
    //             $("#kategori").addClass('d-block');

    //             $("#url").removeClass('d-block');
    //             $("#url").addClass('d-none');
    //         } else {
    //             $("#url").removeClass('d-none');
    //             $("#url").addClass('d-block');

    //             $("#kategori").removeClass('d-block');
    //             $("#kategori").addClass('d-none');
    //         }
    //     })
    // })
</script>