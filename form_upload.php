<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <?php
    $file1="";
    $file1 = isset($_POST['file1']) ? $_POST['file1']:'';
    $file1 = !empty($_POST['file1']) ? $_POST['file1'] : '';
    ?>
    <h2>Penggunaan upload</h2>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        File : <input type="file" name="file1"> <input type="submit" name="upload" value="upload">
    </form>
</body>

</html>