<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sederhana</title>
</head>

<body>

    <h1>Aplikasi Sederhana</h1>
    <h2>Penilaian Raport</h2>

    <form action="" method="post">

        <input type="text" name="nil_indonesia" placeholder="Bahasa Indonesia" required>
        <input type="text" name="nil_inggris" placeholder="Bahasa Inggris" required>
        <input type="text" name="nil_matematika" placeholder="Matematika" required>
        <input type="text" name="nil_agama" placeholder="Pendidikan Agama" required>
        <input type="text" name="nil_olahraga" placeholder="Olahraga" required>
        <input type="text" name="nil_komputer" placeholder="Komputer" required>

        <input type="submit" name="hitung" value="Hitung">

    </form>

    <?php


    if (isset($_POST['hitung'])) {
        $indonesia = $_POST['nil_indonesia'];
        $inggris = $_POST['nil_inggris'];
        $matematika = $_POST['nil_matematika'];
        $agama = $_POST['nil_agama'];
        $olahraga = $_POST['nil_olahraga'];
        $komputer = $_POST['nil_komputer'];

        $hasil = ($indonesia + $inggris + $matematika + $agama + $olahraga + $komputer) / 6;

        if ($hasil >= 90 && $hasil <= 100) {
            $keterangan = 'Sangat Baik';
        } else if ($hasil >= 70 && $hasil <= 89) {
            $keterangan = 'Baik';
        } else if ($hasil >= 50 && $hasil <= 69) {
            $keterangan = 'Cukup';
        } else {
            $keterangan = 'Kurang';
        }
    }

    ?>

    <h2><?php if (isset($hasil)) {
            echo $hasil;
        } else {
            echo "Data Belum Ada";
        } ?></h2>
    <h2><?php if (isset($keterangan)) {
            echo $keterangan;
        } else {
            echo "Data Belum Ada";
        } ?></h2>

</body>

</html>