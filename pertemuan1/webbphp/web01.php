<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web01</title>
</head>
<body>
    <h1>Selamat Belajar PHP</h1>
    <?php
        $_nama = "Nurul Fikri Alamsyah";
        $_umur = 20;
        $_prodi = "Teknik Informatika";
        $_ipk = 3.5;
    ?>

    <p>Nama : <?php echo $_nama; ?></p>
    <p>Umur : <?=$_umur?></p>
    <p>Prodi : <?=$_prodi?></p>
    <p>IPK : <?=$_ipk?></p>

    
</body>
</html>