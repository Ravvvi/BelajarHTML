<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff3e0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 450px;
            text-align: left;
            border-top: 8px solid #ff7043;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 28px;
            color: #e65100;
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .label {
            font-size: 18px;
            font-weight: bold;
            color: #ff7043;
            margin-top: 15px;
        }

        .value {
            font-size: 16px;
            padding: 12px;
            margin-top: 8px;
            border-radius: 8px;
            background-color: #ffe0b2;
            color: #bf360c;
            border-left: 5px solid #ff7043;
        }

        .thankyou {
            font-size: 16px;
            color: #e65100;
            text-align: center;
            margin-top: 25px;
            font-style: italic;
        }

        button {
            display: block;
            background-color: #ff7043;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 25px;
            transition: background-color 0.3s ease-in-out, transform 0.2s;
        }

        button:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

        button:active {
            background-color: #d84315;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $asal = htmlspecialchars($_POST['asal']);
    $tujuan = htmlspecialchars($_POST['tujuan']);
    $tanggal = htmlspecialchars($_POST['tanggal']);

    // Simpan data ke file
    $data = "Nama: $nama, Asal: $asal, Tujuan: $tujuan, Tanggal: $tanggal\n";
    file_put_contents('pemesanan.txt', $data, FILE_APPEND | LOCK_EX);

    // Tampilkan konfirmasi
    echo "
    <div class='container'>
        <h1>Konfirmasi Pemesanan Tiket</h1>

        <p class='label'>Nama Penumpang:</p>
        <p class='value'>$nama</p>

        <p class='label'>Kota Asal:</p>
        <p class='value'>$asal</p>

        <p class='label'>Kota Tujuan:</p>
        <p class='value'>$tujuan</p>

        <p class='label'>Tanggal Penerbangan:</p>
        <p class='value'>$tanggal</p>

        <p class='thankyou'>Terimakasih telah memesan tiket pesawat!</p>

        <button>Kembali</button>
    </div>";
} else {
    echo "Data tidak valid";
}
?>

</body>
</html>
