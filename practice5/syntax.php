<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PHP</title>
</head>
<body>

    <h1>Formulir PHP Sederhana</h1>

    <form method="post">
        Nama: <input type="text" name="nama">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            echo "<h2>Selamat datang, $nama!</h2>";
        }
    ?>

</body>
</html>
