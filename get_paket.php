<?php 
include('database/conn.php');

$id = $conn->real_escape_string($_GET['id']);

$sql = "SELECT * FROM t_marmutben_paket WHERE id = '$id'";
$result = $conn->query($sql);

$dataOngkir = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataOngkir[] = $row;
    }
}

echo json_encode($dataOngkir);

$conn->close();