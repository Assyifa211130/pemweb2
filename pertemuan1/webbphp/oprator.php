<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <form action="" method="GET">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1">
        <br>
        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2">
        <br>
        <label for="operasi">Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_GET['hitung'])) {
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operasi = $_GET['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "<h3>Error: Pembagian dengan nol tidak diperbolehkan</h3>";
                    exit;
                }
                break;
            default:
                echo "<h3>Error: Operasi tidak valid</h3>";
                exit;
        }
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>

</body>
</html>
