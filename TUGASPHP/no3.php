<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #094958;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1, h2, h4 {
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        h4 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    $namalengkap = $_POST['first']. " " . $_POST['last'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] :'Tidak Ada';
    $negara = $_POST['country'];
    $bahasa = isset($_POST['bahasa']) ? implode (", " , $_POST['bahasa']) : 'Tidak Ada';
    $bio = $_POST['bio'];
    ?>


    <h1>SELAMAT DATANG <?= $namalengkap?> ! </h1>
    <h2>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama.</h2>

    <h4>Nama Lengkap = <?= $namalengkap?> </h4>
    <h4>Jenis Kelamin = <?= $gender?> </h4>
    <h4>Negara = <?= $negara?> </h4>
    <h4>Bahasa yang dikuasai = <?= $bahasa?> </h4>
    <h4>Bio = <?= $bio?> </h4>
    
</body>
</html>