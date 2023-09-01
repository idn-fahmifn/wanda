<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'wanda');
$query = "SELECT * FROM profile";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tampilkan Data</title>
</head>

<body>
    <h2>Data</h2>
    <a href="create.php">Tambah Data</a>
    <a href="create.php">Lihat Grafik</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['umur'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>






</body>

</html>