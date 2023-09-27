<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

$mail = new PHPMailer();

include('database/conn.php');

if (isset($_POST['submitBuy'])) {
    $marmutName = $_POST['nama_marmut'];
    $marmutJumlah = $_POST['jumlah'];
    $marmutHarga = $_POST['harga_marmut'];
    $marmutCategories = $_POST['kategori_marmut'];
    $emailNotifications = $_POST['email_notifications'];

    // Buat pesan email
    $emailMessage = "Halo,\n\n";
    $emailMessage .= "Saya ingin membeli $marmutName $marmutCategories sebanyak $marmutJumlah pcs dan mendapatkan harga Rp. $marmutHarga. Harga tersebut belum termasuk ongkir.\n\n";
    $emailMessage .= "Terima kasih.";

    // Konfigurasi PHPMailer
    $mail = new PHPMailer();

        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.rakaeshardiansyah.my.id'; // Sesuaikan dengan SMTP Server Anda
        $mail->SMTPAuth = true;
        $mail->Username = 'marmutben@rakaeshardiansyah.my.id'; // Sesuaikan dengan username email Anda
        $mail->Password = 'kambing123'; // Sesuaikan dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Konfigurasi email
        $mail->setFrom('marmutben@rakaeshardiansyah.my.id', 'Marmutben Customer'); // Sesuaikan dengan email Anda
        $mail->addAddress($emailNotifications, 'Recipient Name');
        $mail->Subject = "[BUY] - $marmutName - $marmutCategories";
        $mail->Body = $emailMessage;

        // Kirim email
        if ($mail->send()) {
            echo 'Email berhasil dikirim';
        } else {
            echo 'Email gagal dikirim: ' . $mail->ErrorInfo;
        }

    // Lakukan redirect ke URL WhatsApp
    $text = "text=Halo%2C%20saya%20ingin%20membeli%20$marmutName%20dengan%20jumlah%20$marmutJumlah%20pcs%20dan%20mendapatkan%20harga%20Rp.%20$marmutHarga.%20Harga%20tersebut%20belum%20termasuk%20ongkir.";
    $url = "https://api.whatsapp.com/send?phone=6287780605997&$text";

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
    ORDER BY timestamp DESC LIMIT 3";
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
    ORDER BY id DESC 
    LIMIT 3";
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
    ORDER BY a.id DESC 
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

 function getPaketMarmut(){
    global $conn;
    $sql = "SELECT * FROM t_marmutben_paket ORDER BY jenis ASC";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

function getListMarmut(){
    global $conn;
    $sql = "
        SELECT a.*, b.categories FROM t_marmutben_products as a 
        LEFT JOIN t_marmutben_categories as b on a.categories_marmut = b.id 
        WHERE b.status != 0
        ORDER BY jenis_marmut ASC";
    $result = $conn->query($sql);
    $marmutArray = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marmutArray[] = $row;
        }
    }

    return $marmutArray;
}

// Fungsi untuk menutup koneksi
function closeConnection($conn) {
    $conn->close();
}
?>