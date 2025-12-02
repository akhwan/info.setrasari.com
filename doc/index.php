<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dokumen Karyawan</title>
    <style>
        /* Reset default margin dan padding */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #9CCAFF;
            color: #333;
        }

        /* Container untuk konten utama */
        .container {
            max-width: 600px; /* Lebar maksimum konten */
            margin: 0 auto; /* Pusatkan konten */
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        /* Judul */
        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color: #3C448D;
        }

        /* Paragraf */
        p {
            font-size: 1rem;
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        /* Form */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Label */
        label {
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Input field */
        input[type="text"] {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        /* Tombol submit */
        button[type="submit"] {
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #3C448D;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect untuk tombol */
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 0.9rem;
            }

            input[type="text"] {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Portal Dokumen Karyawan</h1>
        <p><span>NOTE: </span>Dokumen pada portal ini bersifat temporary. Dokumen akan diganti setiap bulannya dengan dokumen terbaru. Setelah mendownload simpan dan jaga kerahasiaan dokumen anda.</p>
        
        <form action="download.php" method="get">
            <label for="password">NIK KTP:</label>
            <input type="text" name="password" id="password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>