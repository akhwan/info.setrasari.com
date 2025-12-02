<?php
// Folder tempat file slip gaji disimpan
$target_dir = "uploads/doc/";
// Ambil password dari parameter URL
if (isset($_GET['password'])) {
    $password = $_GET['password'];
    // Cari file yang sesuai dengan password
    $files = scandir($target_dir);
    $file_found = false;
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            // Ambil bagian nama file sebelum simbol _
            $file_password = explode('_', $file)[0];
            // Bandingkan password dengan bagian sebelum _
            if ($file_password === $password) {
                $file_found = true;
                $file_path = $target_dir . $file;
                echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Dokumen Ditemukan</title>
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
                            color: #28a745;
                        }

                        /* Paragraf */
                        p {
                            font-size: 1rem;
                            text-align: center;
                            margin-bottom: 20px;
                            color: #555;
                        }

                        /* Link download */
                        a {
                            display: inline-block;
                            margin-top: 20px;
                            padding: 10px 20px;
                            font-size: 1rem;
                            color: #fff;
                            background-color: #28a745;
                            text-decoration: none;
                            border-radius: 4px;
                            transition: background-color 0.3s ease;
                        }

                        /* Hover effect untuk link */
                        a:hover {
                            background-color: #218838;
                        }

                        /* Responsive adjustments */
                        @media (max-width: 600px) {
                            h1 {
                                font-size: 1.5rem;
                            }

                            p {
                                font-size: 0.9rem;
                            }

                            a {
                                padding: 8px 16px;
                                font-size: 0.9rem;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <h1>Dokumen Ditemukan</h1>
                        <p>Silakan klik link berikut untuk mendownload:</p>
                        <a href='$file_path' download>$file</a>
                        <p>Mohon jaga kerahasiaan dan backup dokumen anda!</p>
                    </div>
                </body>
                </html>";
                break;
            }
        }
    }
    if (!$file_found) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Oops</title>
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
                    background-color: #F9F9F9;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    margin-top: 50px;
                }

                /* Judul */
                h1 {
                    text-align: center;
                    font-size: 2rem;
                    margin-bottom: 20px;
                    color: #dc3545;
                }

                /* Paragraf */
                p {
                    font-size: 1rem;
                    text-align: center;
                    margin-bottom: 20px;
                    color: #555;
                }

                /* Link WA Admin */
                a {
                    color: #007bff;
                    text-decoration: none;
                    font-weight: bold;
                }

                /* Hover effect untuk link */
                a:hover {
                    text-decoration: underline;
                }

                /* Responsive adjustments */
                @media (max-width: 600px) {
                    h1 {
                        font-size: 1.5rem;
                    }

                    p {
                        font-size: 0.9rem;
                    }
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1>Oops</h1>
                <p>Dokumen belum tersedia, mohon cek berkala atau password /NIK tidak sesuai. Silahkan hub admin jika urgent.</p>
                <p>WA Admin: <a href='https://wa.me/62895366784288?text=hi, min'>0895366784288</a></p>
            </div>
        </body>
        </html>";
    }
} else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Password Tidak Valid</title>
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
                color: #dc3545;
            }

            /* Paragraf */
            p {
                font-size: 1rem;
                text-align: center;
                margin-bottom: 20px;
                color: #555;
            }

            /* Responsive adjustments */
            @media (max-width: 600px) {
                h1 {
                    font-size: 1.5rem;
                }

                p {
                    font-size: 0.9rem;
                }
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Password Tidak Valid</h1>
            <p>Silakan masukkan password yang benar.</p>
        </div>
    </body>
    </html>";
}
?>