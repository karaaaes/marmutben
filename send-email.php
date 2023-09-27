<?php
// Alamat email penerima
$to = "recipient@example.com";

// Judul email
$subject = "Subject Email";

// Isi pesan email
$message = "Isi pesan email Anda.";

// Header email (optional)
$headers = 
    "From: sender@example.com" . "\r\n" .
    "Reply-To: sender@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Kirim email menggunakan fungsi mail()
if (mail($to, $subject, $message, $headers)) {
    echo "Email berhasil dikirim.";
} else {
    echo "Email gagal dikirim.";
}
?>
