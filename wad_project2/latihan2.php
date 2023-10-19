<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Input Area dan Dropdown dengan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
    <?php
    $judul = "Selamat Datang";
    $angka = $pilihan = $hasil = "";

    if (isset($_POST['hitung'])) {
        $angka = $_POST['Angka']; // Perhatikan nama input yang sesuai dengan 'name'
        $pilihan = $_POST['pilihan']; // Perhatikan nama input yang sesuai dengan 'name'

        switch ($pilihan) {
            case "pilihan1":
                $hasil = $angka + 1;
                break;
            case "pilihan2":
                $hasil = $angka * 2;
                break;
            case "pilihan3":
                $hasil = $angka * 3;
                break;
            case "pilihan4":
                $hasil = $angka * 4;
                break;
            case "pilihan5":
                $hasil = $angka * 5;
                break;
            default:
                $hasil = "Pilihan tidak valid";
        }
    }
    if (!empty($hasil)) {
        header("Location: latihan3.php?angka=$angka&hasil=$hasil");
        exit;
    }
    ?>

    <h1 class="text-center font-weight-bold"><?php echo $judul; ?></h1>

    <section class="form-control" id="Angka">
        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <!-- Formulir untuk input angka -->
                    <form method="post">
                        <label for="Angka" class="form-label">Masukkan Angka:</label>
                        <input type="number" name="Angka" class="form-control" placeholder="...">
                    </div>
                    <!-- Formulir untuk input angka dan dropdown -->
                    <div class="mb-3">
                        <label for="inputGroupSelect01" class="form-label">Pilih Angka</label>
                        <select class="form-select" name="pilihan" id="inputGroupSelect01">
                            <option selected value="pilihan1">1</option>
                            <option value="pilihan2">2</option>
                            <option value="pilihan3">3</option>
                        </select>
                    </div>
                    <section class="form-label" id="Angka">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                        </form>
                    </body>
                </html>
