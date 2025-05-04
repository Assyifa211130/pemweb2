<?php
// Menghubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpuskesmas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangani pengiriman form untuk menambahkan pemeriksaan baru
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pasien_id = $_POST['pasien_id'];
    $dokter_id = $_POST['dokter_id'];
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tensi = $_POST['tensi'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id)
            VALUES ('$tanggal', '$berat', '$tinggi', '$tensi', '$keterangan', '$pasien_id', '$dokter_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemeriksaan pasien berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengambil data pasien dan dokter
$pasien_query = "SELECT id, nama FROM pasien";
$pasien_result = $conn->query($pasien_query);

$dokter_query = "SELECT id, nama FROM paramedik WHERE kategori = 'Dokter'";
$dokter_result = $conn->query($dokter_query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan Pasien</title>
</head>
<body>
    <h2>Form Pemeriksaan Pasien</h2>
    <form action="pemeriksaan_pasien.php" method="POST">
        <label for="pasien_id">Pasien:</label>
        <select name="pasien_id" id="pasien_id" required>
            <option value="">Pilih Pasien</option>
            <?php while($row = $pasien_result->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <label for="dokter_id">Dokter:</label>
        <select name="dokter_id" id="dokter_id" required>
            <option value="">Pilih Dokter</option>
            <?php while($row = $dokter_result->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <label for="tanggal">Tanggal Pemeriksaan:</label>
        <input type="date" name="tanggal" id="tanggal" required>
        <br><br>

        <label for="berat">Berat Badan (kg):</label>
        <input type="number" step="any" name="berat" id="berat" required>
        <br><br>

        <label for="tinggi">Tinggi Badan (cm):</label>
        <input type="number" step="any" name="tinggi" id="tinggi" required>
        <br><br>

        <label for="tensi">Tensi Darah:</label>
        <input type="text" name="tensi" id="tensi" required>
        <br><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" id="keterangan" rows="4" required></textarea>
        <br><br>

        <button type="submit">Simpan Pemeriksaan</button>
    </form>

    <hr>

    <h3>Daftar Pemeriksaan Pasien</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Tensi Darah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $periksa_query = "SELECT p.tanggal, ps.nama as pasien, d.nama as dokter, p.berat, p.tinggi, p.tensi, p.keterangan
                              FROM periksa p
                              JOIN pasien ps ON p.pasien_id = ps.id
                              JOIN paramedik d ON p.dokter_id = d.id";
            $periksa_result = $conn->query($periksa_query);

            while ($row = $periksa_result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $row['tanggal'] ?></td>
                    <td><?= $row['pasien'] ?></td>
                    <td><?= $row['dokter'] ?></td>
                    <td><?= $row['berat'] ?></td>
                    <td><?= $row['tinggi'] ?></td>
                    <td><?= $row['tensi'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
