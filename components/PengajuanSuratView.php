<?php
// PengajuanSuratView.php
include '../config/koneksi.php';
include '../config/helpers/ViewPengajuanSuratHelper.php';

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
?>
<!DOCTYPE html>
<html lang="id">
<?php include 'header.php'; ?>
<body class="bg-light">
    <div class="detail-container mx-auto my-5 p-4 bg-white rounded-4 shadow-sm" style="max-width:600px;">
        <div class="detail-title">Detail Pengajuan Surat</div>
        <div style="margin-bottom:1.5rem;">
            <h3 style="font-size:1.1rem;font-weight:600;margin-bottom:0.5rem;color:#1976d2;">Data Pemohon</h3>
            <div class="detail-row"><span class="label">Nama Pemohon:</span> <span class="value"><?= htmlspecialchars($data['nama_lengkap']) ?></span></div>
            <div class="detail-row"><span class="label">NIK:</span> <span class="value"><?= htmlspecialchars($data['nik']) ?></span></div>
            <div class="detail-row"><span class="label">Tempat, Tgl Lahir:</span> <span class="value"><?= htmlspecialchars($data['tempat_lahir']) ?>, <?= date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></span></div>
            <div class="detail-row"><span class="label">Jenis Kelamin:</span> <span class="value"><?= htmlspecialchars($data['jenis_kelamin']) ?></span></div>
            <div class="detail-row"><span class="label">Agama:</span> <span class="value"><?= htmlspecialchars($data['agama']) ?></span></div>
            <div class="detail-row"><span class="label">Status Perkawinan:</span> <span class="value"><?= htmlspecialchars($data['status_perkawinan']) ?></span></div>
            <div class="detail-row"><span class="label">Pekerjaan:</span> <span class="value"><?= htmlspecialchars($data['pekerjaan']) ?></span></div>
            <div class="detail-row"><span class="label">Alamat:</span> <span class="value"><?= htmlspecialchars($data['alamat']) ?></span></div>
        </div>
        <div style="margin-bottom:1.5rem;">
            <h3 style="font-size:1.1rem;font-weight:600;margin-bottom:0.5rem;color:#1976d2;">Data Pengajuan Surat</h3>
            <div class="detail-row"><span class="label">Jenis Surat:</span> <span class="value"><?= htmlspecialchars($data['jenis_surat']) ?></span></div>
            <div class="detail-row"><span class="label">Keperluan:</span> <span class="value"><?= htmlspecialchars($data['keperluan']) ?></span></div>
            <div class="detail-row"><span class="label">Tanggal Pengajuan:</span> <span class="value"><?= date('d-m-Y', strtotime($data['tanggal_pengajuan'])) ?></span></div>
            <div class="detail-row"><span class="label">Status Pengajuan:</span> <span class="value"><?= htmlspecialchars($data['status_pengajuan']) ?></span></div>
        </div>
        <a href="ManajemenSurat.php" class="btn btn-secondary back-btn">Kembali</a>
    </div>
</body>
</html>
