<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kerucut</title>
</head>
<body>
    <h1>Hitung Volume dan Luas Permukaan Kerucut</h1>
    <form method="post">
        <label for="jari_jari">Jari-jari (r): </label>
        <input type="number" step="0.01" name="jari_jari" required>
        <br>
        <label for="tinggi">Tinggi (t): </label>
        <input type="number" step="0.01" name="tinggi" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    class Kerucut {
        public $jari_jari;
        public $tinggi;

        // Konstruktor untuk menginisialisasi jari-jari dan tinggi
        public function __construct($jari_jari, $tinggi) {
            $this->jari_jari = $jari_jari;
            $this->tinggi = $tinggi;
        }

        // Menghitung volume kerucut
        public function hitungVolume() {
            return (1/3) * pi() * pow($this->jari_jari, 2) * $this->tinggi;
        }

        // Menghitung luas permukaan kerucut
        public function hitungLuasPermukaan() {
            $s = sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2)); // panjang garis pelukis
            return (pi() * $this->jari_jari * $s) + (pi() * pow($this->jari_jari, 2)); // luas permukaan
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $jari_jari = $_POST['jari_jari'];
        $tinggi = $_POST['tinggi'];

        // Membuat objek kerucut
        $kerucut = new Kerucut($jari_jari, $tinggi);

        // Menghitung volume dan luas permukaan
        $volume = $kerucut->hitungVolume();
        $luas_permukaan = $kerucut->hitungLuasPermukaan();

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "Volume kerucut: " . number_format($volume, 2) . "<br>";
        echo "Luas permukaan kerucut: " . number_format($luas_permukaan, 2) . "<br>";
    }
    ?>
</body>
</html>