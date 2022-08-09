<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sitegas - Sistem Data Legalitas Lahan Wakaf dan Hibah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/') ?>favicon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets-public/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-public/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets-public/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-public/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-public/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets-public/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets-public/') ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Tempo - v4.8.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="">Sitegas</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= site_url() ?>" class="logo"><img src="<?= base_url('assets/') ?>sitegas-putih.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto " href="#features">Data Lahan Hibah</a></li>
                    <li><a class="nav-link" href="<?= site_url('login') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">

            <h3>Selamat Datang </h3>
            <h1>SITEGAS</h1>
            <h2>Sistem Data Legalitas Lahan Hibah dan Wakaf <br>
                Tapanuli Selatan</h2>
            <a href="#about" class="btn-get-started scrollto">Tentang</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h3>Tentang <span>SiTeGas</span></h3>
                </div>

                <div class="row content " style="margin-top:30px;">
                    <div class="col-lg-6">
                        <p style="text-align: justify;">
                            Sistem ini akan digunakan untuk memonitor perkembangan adanya sengketa pemanfaatan lahan hibah di daerah kecamatan. Dengan adanya sistem ini lebih memudahkan untuk melihat perkembangan pelaksanaan reformasi birokrasi di perangkat daerah yang dibuktikan melalui data dukung yang di upload oleh Perangkat Daerah atas pelaksanaan pendataan legalitas lahan hibah dan wakaf yang ada di sistem.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <center> <img style="width:50%" src="<?= base_url('assets/favicon.png') ?>"></center>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-title">
                    <h3>Data Hibah dan Wakaf <span>SiTeGas</span></h3>

                </div>

                <div class="row mb-5">
                    <div class="col-lg-3 col-md-4 col-6 col-6">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="<?= site_url() ?>?kategori=1#features">MESJID</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="<?= site_url() ?>?kategori=2#features">GEREJA</a></h3>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="<?= site_url() ?>?kategori=3#features">SEKOLAH AGAMA</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="<?= site_url() ?>?kategori=4#features">TANAH PEMAKAMAN</a></h3>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div style="overflow-y: hidden;">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>Kategori</td>
                                        <td>Nama</td>
                                        <td>Luas</td>
                                        <td>Lokasi</td>
                                        <td>Serfikat</td>
                                        <td>Peta</td>

                                    </tr>

                                </thead>
                                <tbody>

                                    <?php foreach ($data as $r) : ?>
                                        <tr>
                                            <td><?= KELURAHAN[$r['kelurahan']] ?></td>
                                            <td><?= KATEGORI[$r['kategori']] ?></td>
                                            <td><?= $r['nama'] ?></td>
                                            <td><?= $r['luas_lahan'] . ' m<sup>2</sup>' ?></td>
                                            <td><?= $r['lokasi'] ?></td>
                                            <td><?= is_sertifikat($r['no_sertifikat']) ?></td>
                                            <td><a href="https://www.google.co.id/maps?q=<?= $r['long_lat'] ?>" class="btn btn-primary btn-sm" target="_blank">Lokasi</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Services Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span><?= date('Y') ?></span></strong>. All Rights Reserved
                </div>

            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets-public/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets-public/') ?>vendor/php-email-form/validate.js"></script>




    <!-- Template Main JS File -->
    <script src="<?= base_url('assets-public/') ?>js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>