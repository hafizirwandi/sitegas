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
