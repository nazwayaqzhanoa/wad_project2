<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Perhitungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <?php
    $angka = isset($_GET['angka']) ? $_GET['angka'] : '';
    $hasil = isset($_GET['hasil']) ? $_GET['hasil'] : '';
    ?>

    <h1 class="text-center font-weight-bold">Hasil Perhitungan</h1>

    <div class="container">
        <p>Angka yang Anda masukkan: <?php echo $angka; ?></p>
        <p>Hasil perhitungan: <?php echo $hasil; ?></p>
    </div>

</body>
</html>
