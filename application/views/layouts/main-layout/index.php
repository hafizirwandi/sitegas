<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="-">
    <title><?= $public['title'] ?> - Budaya Sumut</title>
    <link rel="apple-touch-icon" href="<?= base_url('assets/favicon-sumutprov.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/favicon-sumutprov.png') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/extensions/toastr.min.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/vendors/css/editors/quill/quill.snow.css">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/plugins/extensions/ext-component-toastr.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>app-assets/css/pages/page-blog.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin/') ?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->session->userdata('nama') ?></span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">

                        <a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="me-50" data-feather="power"></i>Keluar</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="<?= site_url() ?>">

                        <img width="100%" src="<?= base_url('assets/budaya-sumut-hitam.png') ?>" alt="">

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content" style="margin-top: 30px;">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= ($public['menu'] == 'home') ? 'active' : '' ?> nav-item">
                    <a class="d-flex align-items-center" href="<?= site_url('home') ?>">
                        <i data-feather="home"></i><span class="menu-title text-truncate">Dashboard</span>
                    </a>
                </li>

                <?php if ($this->session->userdata('role') == '1') : ?>
                    <li class="<?= ($public['menu'] == 'kab-kota') ? 'active' : '' ?> nav-item">
                        <a class="d-flex align-items-center" href="<?= site_url('kab-kota') ?>">
                            <i data-feather='folder'></i><span class="menu-title text-truncate">Kabupaten Kota</span>
                        </a>
                    </li>
                    <li class="<?= ($public['menu'] == 'kategori') ? 'active' : '' ?> nav-item">
                        <a class="d-flex align-items-center" href="<?= site_url('kategori') ?>">
                            <i data-feather='folder'></i><span class="menu-title text-truncate">Kategori</span>
                        </a>
                    </li>
                    <li class="<?= ($public['menu'] == 'pengguna') ? 'active' : '' ?> nav-item">
                        <a class="d-flex align-items-center" href="<?= site_url('pengguna') ?>">
                            <i data-feather='user'></i><span class="menu-title text-truncate">Pengguna</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="<?= ($public['menu'] == 'artikel') ? 'active' : '' ?> nav-item">
                    <a class="d-flex align-items-center" href="<?= site_url('artikel') ?>">
                        <i data-feather='folder'></i><span class="menu-title text-truncate">Artikel</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="<?= site_url('logout') ?>">
                        <i data-feather='log-out'></i><span class="menu-title text-truncate">Keluar</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
                <?= $this->session->flashdata('message'); ?>
                <?php $this->load->view($content); ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; <?= date('Y') ?><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block"></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('assets-admin/') ?>app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url('assets-admin/') ?>app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <script src="<?= base_url('assets-admin/') ?>app-assets/js/scripts/pages/page-blog-edit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        $(".dt-basic").DataTable()
    </script>
    <?php if ($public['script']) : ?>
        <?php $this->load->view($public['script']); ?>
    <?php endif; ?>
</body>
<!-- END: Body-->

</html>