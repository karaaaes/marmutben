<?php
include('database/conn.php');
$selectedWilayah = $conn->real_escape_string($_GET['wilayah']);

$sql = "SELECT DISTINCT wilayah_kecil FROM t_marmutben_ongkir WHERE wilayah = '$selectedWilayah'";
$result = $conn->query($sql);

$dataWilayahKecil = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataWilayahKecil[] = $row;
    }
}

echo json_encode($dataWilayahKecil);

$conn->close();