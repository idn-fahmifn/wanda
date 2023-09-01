<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi = mysqli_connect('localhost', 'root', '', 'wanda');
    $query = "DELETE FROM profile WHERE id=$id";
    mysqli_query($koneksi, $query);
    header('Location: index.php');
    echo "anda Berhasil Menghapus";
}
?>