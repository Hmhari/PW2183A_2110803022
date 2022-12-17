<?php 

include 'Function.php';

$title = 'Profil Mahasiswa';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<div class="container mt=5">
    <h1>Data <?= $mhs['nama']; ?> </h1>
    <hr>

    <table class="table table-bordered table-striped mt=3">
        <tr>
            <td>NRP</td>
            <td>: <?= $mhs['nrp'] ?> </td>
        </tr>
    
        <tr>
            <td>Nama</td>
            <td>: <?= $mhs['nama'] ?> </td>
        </tr>

        <tr>
            <td>email</td>
            <td>: <?= $mhs['email'] ?> </td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>: <?= $mhs['jurusan'] ?> </td>
        </tr>

        <tr>
            <td>gambar</td>
            <td><img src="<?= $mhs["gambar"]; ?>" width="100"></td> <br>
        </tr>
    </table>
    <a href="home.php" class="btn btn=secondary btn=sm">Kembali</a>
</div>