<?php
// Folder tujuan untuk menyimpan file yang diekstrak
$target_dir = "uploads/doc/";

// Pastikan folder tujuan ada
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Cek apakah file ZIP diupload
if (isset($_FILES['zipfile']) && $_FILES['zipfile']['error'] == 0) {
    $zip_file = $_FILES['zipfile']['tmp_name'];
    $zip = new ZipArchive;

    // Buka file ZIP
    if ($zip->open($zip_file) === TRUE) {
        // Ekstrak semua file ke folder tujuan
        $zip->extractTo($target_dir);
        $zip->close();
        echo "File ZIP berhasil diupload dan diekstrak.<br>";
    } else {
        echo "Gagal membuka file ZIP.";
    }
} else {
    echo "Silakan pilih file ZIP untuk diupload.";
}
?>