<?php 
include('database/conn.php');

$selectedWilayah = $conn->real_escape_string($_GET['wilayah']);
$selectedWilayahKecil = $conn->real_escape_string($_GET['wilayahKecil']);

$sql = "SELECT ongkir_cod, ongkir_ojol, ongkir_ka_logistik FROM t_marmutben_ongkir WHERE wilayah = '$selectedWilayah' AND wilayah_kecil = '$selectedWilayahKecil'";
$result = $conn->query($sql);

$dataOngkir = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataOngkir[] = $row;
    }
}

echo json_encode($dataOngkir);

$conn->close();