<?php
// Fungsi untuk mengambil data pengajuan surat berdasarkan id
function getPengajuanSuratById($koneksi, $id_pengajuan) {
    $query = mysqli_query($koneksi, "SELECT * FROM pengajuan_surat WHERE id_pengajuan='$id_pengajuan'");
    return mysqli_fetch_assoc($query);
}
