<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Tanggal</title>
</head>
<body>
    <h2>Penggunaan tanggal</h2>
    <?php
    echo("Hari ini ".date("l")."<br>");
    echo("Tanggal ".date("d F Y")."<br>");
    date_default_timezone_set('Asia/Jakarta');
    echo("Jam ".date("H:i:s"));
    ?>
</body>
</html>