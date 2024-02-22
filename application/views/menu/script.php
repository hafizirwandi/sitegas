<script src="<?= base_url('assets-admin/menu-editor/jquery-menu-editor.js?v3') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets-admin/menu-editor/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets-admin/menu-editor/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') ?>"></script>
<script>
    jQuery(document).ready(function() {
        /* =============== DEMO =============== */
        // menu items
        var arrayjson = <?= $data['menu_json'] ?>;
        // icon picker options
        var iconPickerOptions = {
            searchText: "Buscar...",
            labelHeader: "{0}/{1}"
        };
        // sortable list options
        var sortableListOptions = {
            placeholderCss: {
                'background-color': "#cccccc"
            }
        };

        var editor = new MenuEditor('myEditor', {
            listOptions: sortableListOptions,
            iconPicker: iconPickerOptions
        });
        editor.setData(arrayjson);
        editor.setForm($('#frmEdit'));
        editor.setUpdateButton($('#btnUpdate'));
        // $('#btnReload').on('click', function() {
        //     editor.setData(arrayjson);
        // });

        $('#btnSave').on('click', function() {
            var str = editor.getString();
            // $("#out").text(str);
            var csrfName = '<?= $csrf['name'] ?>';
            var csrfHash = '<?= $csrf['hash'] ?>';
            $.ajax({
                url: '<?= site_url('menu/save') ?>',
                method: 'post',
                //dataType: 'json',
                data: {
                    id_menu: '1',
                    menu_json: str,
                    [csrfName]: csrfHash
                },
                success: function(data) {
                    alert('Data telah berhasil disimpan');
                    //location.reload();
                },
                error: function(xhr, status, error) {
                    alert('Data gagal disimpan');
                    console.error('Error:', status, error);
                }
            });
        });

        $("#btnUpdate").click(function() {
            editor.update();
        });

        $('#btnAdd').click(function() {
            editor.add();
        });
        /* ====================================== */

        /** PAGE ELEMENTS **/
        // $('[data-toggle="tooltip"]').tooltip();
        // $.getJSON("https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function(data) {
        //     $('#btnStars').html(data.stargazers_count);
        //     $('#btnForks').html(data.forks_count);
        // });
    });
</script>