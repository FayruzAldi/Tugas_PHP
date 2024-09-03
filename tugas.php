<?php
include "function.php";
include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
$dataSiswa = query("SELECT * FROM tb_siswa");
?>

<div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataSiswa as $siswa) { ?>
                <tr>
                    <td><img src="<?= htmlspecialchars($siswa->gambar); ?>" alt="Gambar <?= htmlspecialchars($siswa->nama); ?>" class="img-fluid" style="width: 50px; height: 50px;"></td>
                    <td><?= htmlspecialchars($siswa->nama); ?></td>
                    <td><?= htmlspecialchars($siswa->asal); ?></td>
                    <td><?= htmlspecialchars($siswa->nilai); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    // Tutup koneksi database
    mysqli_close($connection);
    ?>
</div>
</body>
</html>