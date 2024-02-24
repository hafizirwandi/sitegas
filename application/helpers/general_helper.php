<?php
function alert($class, $str = null)
{
    return "
    <div class='alert alert-" . $class . "' role='alert'>
        <div class='alert-body'>$str</div>
    </div>";
}

function jenis_lahan($str = null)
{
    if ($str == '1') return "Mesjid";
    if ($str == '2') return "Gereja";
    if ($str == '3') return "Sekolah Agama";
    if ($str == '4') return "Tanah Pemakaman";
}
function rupiah($angka = 0)
{
    return 'Rp. ' . number_format($angka, 0, ',', '.');
}

function makeColorFromString($string)
{
    return '#' . substr(md5($string), 0, 6);
}
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    if ($tanggal != '0000-00-00' && $tanggal == null) {
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    } else {
        return;
    }
}
function dd($params)
{
    echo "<pre>";
    print_r($params);
    echo "</pre>";
    die();
}
function is_sertifikat($str)
{
    if ($str) {
        return "<span class='badge rounded-pill text-bg-primary'>Ada</span>";
    } else {
        return "<span class='badge rounded-pill text-bg-danger'>Tidak Ada</span>";
    }
}
function is_sertifikat2($str)
{
    if ($str) {
        return "<span class='badge bg-primary'>Ada</span>";
    } else {
        return "<span class='badge bg-danger'>Tidak Ada</span>";
    }
}
function  statusTerbit($str)
{
    if ($str == '1') return "Published";
    if ($str == '2') return "Pending";
    if ($str == '0') return "Draft";
    if ($str == '3') return "Rejected";
}

function createReadMore($text, $maxLength = 250, $suffix = '...')
{

    // Memotong teks dan menambahkan suffix
    return  $trimmedText = substr($text, 0, $maxLength) . $suffix;
}
function listBulan($bulan)
{
    $daftarSingkatan = array(
        1 => "Jan",
        2 => "Feb",
        3 => "Mar",
        4 => "Apr",
        5 => "Mei",
        6 => "Jun",
        7 => "Jul",
        8 => "Agu",
        9 => "Sep",
        10 => "Okt",
        11 => "Nov",
        12 => "Des"
    );

    $hasil = array();
    for ($i = 1; $i <= $bulan; $i++) {
        if (isset($daftarSingkatan[$i])) {
            $hasil[] = $daftarSingkatan[$i];
        }
    }
    return $hasil;
}
function menu()
{
    $CI = &get_instance();
    $CI->load->model('Menu_model', 'menu');
    $menu = json_decode($CI->menu->find('1')['menu_json'], TRUE);

    $str = "<ul class='main-menu__list one-page-scroll-menu'>";
    foreach ($menu as $r) {
        if (isset($r['children'])) {
            $str .= "<li class='dropdown'><a href='#'>$r[text]<span class='main-menu-border'></span></a><ul>";
            foreach ($r['children'] as $j) {
                $str .= "<li><a href='$j[href]'>$j[text]</a></li>";
            }
            $str .= "</ul></li>";
        } else {
            $str .= "<li class='scrollToLink'><a href='$r[href]'>$r[text]</a></li>";
        }
    }
    $str .= "</ul>";
    return $str;
}

function footer_one()
{
    $CI = &get_instance();
    $CI->load->model('Footer_one_model', 'footer');
    $footer = $CI->footer->find('1');
    $str = "<div class='footer-widget__column footer-widget__about'>
            <div class='footer-widget__logo'>
                <a href='" . site_url() . "'> <img style='width: 100%;' src='" . base_url('uploads/footer/') . $footer['logo'] . "' class='light-logo' alt='></a>
            </div>
            <div class='site-footer__social'>";
    if ($footer['twitter']) {
        $str .= "<a href='" . $footer['twitter'] . "'><i class='fab fa-twitter'></i></a>";
    }
    if ($footer['facebook']) {
        $str .= "<a href='" . $footer['facebook'] . "'><i class='fab fa-facebook'></i></a>";
    }
    if ($footer['tiktok']) {
        $str .= "<a href='" . $footer['tiktok'] . "'><i class='fab fa-tiktok'></i></a>";
    }
    if ($footer['instagram']) {
        $str .= "<a href='" . $footer['instagram'] . "'><i class='fab fa-instagram'></i></a>";
    }
    $str .= "</div></div>";

    return $str;
}
function footer_two()
{
    $CI = &get_instance();

    $CI->load->model('Link_model', 'link');
    $CI->load->model('Footer_two_model', 'footer2');
    $link = $CI->link->findAllWhere(['footer' => 'footer-two']);
    $footer = $CI->footer2->find('1');
    // dd($footer);
    $str = "<div class='footer-widget__column footer-widget__explore clearfix'>
                <h3 class='footer-widget__title'>" . $footer['judul'] . "</h3>
                <ul class='footer-widget__explore-list list-unstyled clearfix'>";
    foreach ($link as $r) {
        $str .= "<li><a href='" . $r['url'] . "'>" . $r['judul'] . "</a></li>";
    }

    $str .= "</ul></div>";
    return $str;
}
function footer_three()
{
    $CI = &get_instance();

    $CI->load->model('Link_model', 'link');
    $CI->load->model('Footer_two_model', 'footer3');
    $link = $CI->link->findAllWhere(['footer' => 'footer-three']);
    $footer = $CI->footer3->find('1');
    // dd($footer);
    $str = "<div class='footer-widget__column footer-widget__explore clearfix'>
                <h3 class='footer-widget__title'>" . $footer['judul'] . "</h3>
                <ul class='footer-widget__explore-list list-unstyled clearfix'>";
    foreach ($link as $r) {
        $str .= "<li><a href='" . $r['url'] . "'>" . $r['judul'] . "</a></li>";
    }

    $str .= "</ul></div>";
    return $str;
}

define(
    'KELURAHAN',
    array(
        '1' => 'Bandar Hapinis',
        '2' => 'Pardamean',
        '3' => 'Muara Manompas',
        '4' => 'Hutaraja',
        '5' => 'Tarapung Raya',
    )
);

define(
    'KATEGORI',
    array(
        '1' => 'Mesjid',
        '2' => 'Gereja',
        '3' => 'Sekolah Agama',
        '4' => 'Tanah Pemakaman',
    )
);
