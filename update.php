<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];

    // Validasi data

    // Update data di database
    $koneksi = mysqli_connect('localhost', 'root', '', 'wanda');
    $query = "UPDATE profile SET nama='$nama', email='$email', umur='$umur', WHERE id=$id";
    mysqli_query($koneksi, $query);

    // bisa Redirect atau tampilkan pesan sukses
    header('Location: index.php');
} else {
    $id = $_GET['id'];
    $koneksi = mysqli_connect('localhost', 'root', '', 'wanda');
    $query = "SELECT * FROM profile WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br>

        <label for="email">Umur</label>
        <input type="number" name="umur" value="<?= $row['umur'] ?>" required><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
