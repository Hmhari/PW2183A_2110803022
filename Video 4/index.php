<?php 
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Ubah data mahasiswa</a>
<br><br>

<table border="1" cellpading="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclik="return confirm('yakin?');"> Hapus</a>
    </td>
    <td><img src="<?= $row["gambar"]; ?>"
    width="60"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?>/td>
    <td><?= $row["jurusan"]; ?></td>

</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>