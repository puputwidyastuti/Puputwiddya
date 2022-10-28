<?php
require 'connection.php';

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $stok = htmlspecialchars($_POST["stok"]);
    $varian = htmlspecialchars($_POST["varian"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO users VALUES ('','$nama', '$stok', '$varian', '$jenis')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="stok">Stok : </label>
        <input type="number" name="stok" required><br><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required><br><br>
        <label for="varian">Varian : </label>
        <input type="text" name="varian" required><br><br>
        <label for="jenis">Jenis : </label>
        <input type="text" name="jenis" required><br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>