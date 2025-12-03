<!DOCTYPE html>
<html>
<head>
    <title>Admin - Upload Dokumen Karyawan</title>
    <meta name="robots" content="noindex, follow">
</head>
<body>
    <h1>Upload dokumen (ZIP)</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="zipfile">Pilih file ZIP:</label>
        <input type="file" name="zipfile" id="zipfile" accept=".zip" required>
        <br><br>
        <button type="submit">Upload dan Proses</button>
    </form>
</body>
</html>