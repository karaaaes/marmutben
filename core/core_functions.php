<?php 
include('database/conn.php');

if(isset($_POST['submitBuy'])){
    $marmutName = $_POST['nama_marmut'];
    $marmutJumlah = $_POST['jumlah'];
    $marmutHarga = $_POST['harga_marmut'];
    
    $text = "text=Halo%2C%20saya%20ingin%20membeli%20$marmutName%20dengan%20jumlah%20$marmutJumlah%20pcs%20dan%20mendapatkan%20harga%20Rp.%20$marmutHarga.%20Harga%20tersebut%20belum%20termasuk%20ongkir.";
    // Buat URL WhatsApp
    $url = "https://api.whatsapp.com/send?phone=6287780605997&$text";
    
    // Lakukan redirect ke URL WhatsApp
    header("Location: $url");
    exit; // Pastikan kode setelah header tidak dieksekusi
}

function getMarmutBestSeller(){
    global $conn;
    $sql = "SELECT a.id, a.marmut_id, a.jumlah_terjual, b.jenis_marmut, b.harga, b.categories_marmut, b.image_marmut, c.categories FROM t_marmutben_best_sellers as a
    LEFT JOIN t_marmutben_products as b on a.marmut_id = b.id
    LEFT JOIN t_marmutben_categories as c on b.categories_marmut = c.id
    ORDER BY a.jumlah_terjual DESC LIMIT 3";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getListPromo(){
    global $conn;
    $sql = "SELECT * FROM t_marmutben_promo 
    ORDER BY created_at DESC LIMIT 3";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getDetailMarmut($marmutId, $categoriesMarmutId){
    global $conn;
    $sql = "SELECT a.*, b.categories FROM `t_marmutben_products` as a
    LEFT JOIN t_marmutben_categories as b on a.categories_marmut = b.id
    WHERE a.id = $marmutId 
    AND a.categories_marmut = $categoriesMarmutId";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getKategoriMarmut($categoriesId){
    global $conn;
    $sql = "SELECT a.*, b.categories FROM `t_marmutben_products` as a
    LEFT JOIN t_marmutben_categories as b on a.categories_marmut = b.id
    WHERE a.categories_marmut = $categoriesId
    LIMIT 6";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getKategoriMarmutDetail($categoriesId, $itemsPerPage, $offset) {
    global $conn;
    $sql = "SELECT a.*, b.categories FROM `t_marmutben_products` as a
    LEFT JOIN t_marmutben_categories as b on a.categories_marmut = b.id
    WHERE a.categories_marmut = $categoriesId
    LIMIT $itemsPerPage OFFSET $offset"; // Menambahkan LIMIT dan OFFSET

    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getWilayah(){
    global $conn;
    $sql = "SELECT DISTINCT wilayah FROM t_marmutben_ongkir ORDER BY wilayah ASC";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getWilayahKecil($wilayah){
    global $conn;
    $sql = "SELECT DISTINCT wilayah_kecil FROM t_marmutben_ongkir WHERE wilayah = '$wilayah'";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function checkCategories($categoriesId){
    global $conn;
    $sql = "SELECT id FROM t_marmutben_categories WHERE id = $categoriesId";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getTotalItems($categories) {
    global $conn;
    $categories = $conn->real_escape_string($categories);
 
    $sql = "SELECT COUNT(*) as total FROM t_marmutben_products WHERE categories_marmut = $categories";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       return $row['total'];
    } else {
       return 0;
    }
 }

// Fungsi untuk menutup koneksi
function closeConnection($conn) {
    $conn->close();
}
?>