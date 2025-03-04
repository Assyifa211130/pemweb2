<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form class="form-horizontal" method="POST" action="nilai_siswa.php"> <!-- Specify method and action -->
  <div class="form-group">
    <label for="nama" class="control-label col-xs-4">Nama Lengkap</label> 
    <div class="col-xs-8">
      <input id="nama" name="nama" type="text" class="form-control" required> <!-- Changed name and added required -->
    </div>
  </div>
  <div class="form-group">
    <label for="matkul" class="control-label col-xs-4">Mata Kuliah</label> 
    <div class="col-xs-8">
      <select id="matkul" name="matkul" class="form-control" required> <!-- Changed name and added required -->
        <option value="">Pilih Mata Kuliah</option> <!-- Added default option -->
        <option value="basis data">Basis Data</option>
        <option value="pemograman web">Pemograman Web 2</option>
        <option value="statistik dan probabilitas">Statistik dan Probabilitas</option>
        <option value="jaringan komputer">Jaringan Komputer</option>
        <option value="bahasa inggris 1">Bahasa Inggris 1</option>
        <option value="komunikasi efektif">Komunikasi Efektif</option>
        <option value="pendidikan dan kewarganegaraan">Pendidikan dan Kewarganegaraan</option>
        <option value="user interface &amp; user experience">User  Interface &amp; User Experience</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uts" class="control-label col-xs-4">Nilai UTS</label> 
    <div class="col-xs-8">
      <input id="nilai_uts" name="nilai_uts" type="number" class="form-control" required> <!-- Changed name and added required -->
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uas" class="control-label col-xs-4">Nilai UAS</label> 
    <div class="col-xs-8">
      <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" required> <!-- Changed name and added required -->
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_tugas" class="control-label col-xs-4">Nilai Tugas/Praktikum</label> 
    <div class="col-xs-8">
      <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control" required> <!-- Changed name and added required -->
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-xs-offset-4 col-xs-8">
      <input name="proses" type="submit" class="btn btn-primary" value="simpan">
    </div>
  </div>
</form>
</body>
</html>