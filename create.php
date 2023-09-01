<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];

    // Lakukan validasi data jika diperlukan

    // Simpan data ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'wanda');
    $query = "INSERT INTO profile (nama, email,umur) VALUES ('$nama', '$email','$umur')";
    mysqli_query($koneksi, $query);

    // Redirect atau tampilkan pesan sukses
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="email">Umur:</label>
        <input type="number" name="umur" required><br>

        <input type="submit" name="submit" value="Simpan">
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
