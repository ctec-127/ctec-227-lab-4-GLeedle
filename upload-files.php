<?php 
    require "inc/upload.inc.php";
?>
<!DOCTYPE html>
<!-- 
    Name: Garth Leedle
    Teacher: Bruce Elgort
    Class: CTEC 227 - PHP / SQL II
    Assignment: Lab 4 - File uploader
 -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4 - File Uploader</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    


    <div class="container">
    <?php if (!empty($message)) {
            echo "<p class=\"alert alert-primary\">{$message}</p>";
        } ?>
        <div class="upload-area">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                <input type="file" name="file_upload"><br><br>
                <input class="btn btn-primary" type="submit" name="submit" value="Upload">
            </form>            
        </div>
        <br/>
        <div class="photo-list">
        <?php include "inc/display.inc.php" ?>
        </div>        
    </div>
</body>
</html>