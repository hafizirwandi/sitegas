<script>
    $(function() {
        let via = <?= $data['via'] ?>;
        if (via == '1') {
            $("#kategori").show();
            $("#kabkota").hide();
        }
        if (via == '2') {
            $("#kategori").hide();
            $("#kabkota").show();
        }

        $("#via").change(function() {
            let via = $(this).val();

            if (via == '1') {
                $("#kategori").show();
                $("#kabkota").hide();
            }
            if (via == '2') {
                $("#kategori").hide();
                $("#kabkota").show();
            }
        })
    })
</script>