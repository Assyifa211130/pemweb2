<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $proses = htmlspecialchars($_POST['proses']);
    $nama_siswa = htmlspecialchars($_POST['nama']);
    $mata_kuliah = htmlspecialchars($_POST['matkul']);
    $nilai_uts = isset($_POST['nilai_uts']) ? (float)$_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? (float)$_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? (float)$_POST['nilai_tugas'] : 0;

    if (!empty($proses)) {
        echo 'Proses: ' . $proses;
        echo '<br/>Nama: ' . $nama_siswa;
        echo '<br/>Mata Kuliah: ' . $mata_kuliah;
        echo '<br/>Nilai UTS: ' . $nilai_uts;
        echo '<br/>Nilai UAS: ' . $nilai_uas;
        echo '<br/>Nilai Tugas Praktikum: ' . $nilai_tugas;

        // Calculate total score
        $total_nilai = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $nilai_tugas);
        echo '<br/>Total Nilai: ' . number_format($total_nilai, 2);

        // Determine passing status
        if ($total_nilai >= 55) {
            echo '<br/>Status: LULUS';
        } else {
            echo '<br/>Status: GAGAL';
        }

        // Determine grade using switch
        switch (true) {
            case ($total_nilai >= 85):
                $grade = 'A';
                break;
            case ($total_nilai >= 80):
                $grade = 'B';
                break;
            case ($total_nilai >= 66):
                $grade = 'C';
                break;
            case ($total_nilai >= 36):
                $grade = 'D';
                break;
            default:
                $grade = 'E';
                break;
        }

        echo '<br/>Grade: ' . $grade;

        // Additional prediction based on the new table
        switch ($grade) {
            case 'A':
                $predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $predikat = 'Memuaskan';
                break;
            case 'C':
                $predikat = 'Cukup';
                break;
            case 'D':
                $predikat = 'Kurang';
                break;
            case 'E':
                $predikat = 'Sangat Kurang';
                break;
            default:
                $predikat = 'Tidak Ada';
                break;
        }

        echo '<br/>Predikat: ' . $predikat;
    } else {
        echo 'Tidak ada proses yang dilakukan.';
    }
} else {
    echo 'Silakan kirim data melalui form.';
}
?>
</from>
</body>
</html>