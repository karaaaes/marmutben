<?php 
include('database/conn.php');

// Ambil kode promo dari permintaan POST
$promo = $_POST["promo"];

// Kueri untuk memeriksa validitas kode promo
$sql = "SELECT * FROM t_marmutben_promo WHERE kode_promo = '$promo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jumlahPromo = $row["jumlah_promo"];

    // Mengirimkan jumlah_promo sebagai respons
    echo json_encode(array("status" => "valid", "jumlahPromo" => $jumlahPromo));
} else {
    // Kode promo tidak valid
    echo json_encode(array("status" => "invalid"));
}

$conn->close();