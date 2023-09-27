<?php 
include('database/conn.php');

$id = $conn->real_escape_string($_GET['id']);
$categoriesId = $conn->real_escape_string(($_GET['categories']));

$sql = "SELECT hit FROM t_marmutben_hit WHERE categories_id = '$categoriesId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $dataHit = $result->fetch_assoc();
    $hit = (int)$dataHit['hit'];
    $updateHit = $hit + 1;
}

$sqlUpdateHit = "UPDATE t_marmutben_hit SET `hit` = $updateHit WHERE categories_id = '$categoriesId'";
$resultHit = $conn->query($sqlUpdateHit);

if ($resultHit) {
    // Ambil data hit yang telah diperbarui
    $sqlSelectHit = "SELECT `hit` FROM t_marmutben_hit WHERE categories_id = '$categoriesId'";
    $resultSelectHit = $conn->query($sqlSelectHit);

    if ($resultSelectHit->num_rows > 0) {
        $dataUpdatehit = $resultSelectHit->fetch_assoc();
        $hitNow = (int)$dataUpdatehit['hit'];
        echo json_encode($hitNow);
    } else {
        echo "Data hit tidak ditemukan.";
    }
} else {
    echo "Terjadi kesalahan saat mengupdate hit.";
}

$conn->close();
?>