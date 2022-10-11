<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </header>

    <h1>Uploader File</h1>
    <?php if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) : ?>
        <p><?= $_SESSION['msg'] ?></p>
        <?php unset($_SESSION['msg']) ?>
    <?php endif ?>
    <div class="frame">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Browse :
            <label for="id" class="custom-btn btn-1">
                Choose File
                <input id="id" type="file" hidden name="uploadFile">
            </label>
            <button type="submit" name="btn" value="Upload" class="custom-btn btn-12"><span>Click!</span><span>Read More</span></button>
        </form>
    </div>

</body>

</html>