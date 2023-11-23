<?php
require 'functions.php';

if( isset($_POST["register"]) ) {
  
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-registrasi.css">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <img src="img/fhrd-put.png" alt="">
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2" required>
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
            <li>
                <a href="index.html">Kembali ke home</a>
            </li>
        </ul>
    </form>
    
</body>
</html>