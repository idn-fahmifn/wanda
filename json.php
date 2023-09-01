<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'wanda');

// kalo mau ngambil semua isinya gpapa, tapi query dibawah ini aku cuma ambil kolom umur aja,
$query = "SELECT umur FROM profile";
$result = mysqli_query($koneksi, $query);

// ubah datanya ke aray, karena nanti akan diambil sama ajax yaaa... dan data nya berupa json
$data = array();

// looping agar semua data tampil
while ($row = mysqli_fetch_assoc($result)) { 
    $data[] = $row;
}

mysqli_close($koneksi);

echo json_encode($data);
?>
