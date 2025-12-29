<?php
// Fungsi untuk mengambil data pengajuan surat berdasarkan id
function getPengajuanSuratById($koneksi, $id_pengajuan) {
    $query = mysqli_query($koneksi, "SELECT * FROM pengajuan_surat WHERE id_pengajuan='$id_pengajuan'");
    return mysqli_fetch_assoc($query);
}

$id_pengajuan = isset($_GET['id']) ? $_GET['id'] : '';
if ($id_pengajuan == '') {
    echo '<div style="padding:2rem;">ID pengajuan tidak ditemukan.</div>';
    exit();
}
$data = getPengajuanSuratById($koneksi, $id_pengajuan);
if (!$data) {
    echo '<div style="padding:2rem;">Data pengajuan tidak ditemukan.</div>';
    exit();
}
