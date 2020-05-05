<?php
require "inc/upload.inc.php";
require "inc/display.inc.php";
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
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

</head>

<body>
    <?php include "inc/navbar.inc.php" ?>
    <div class="concert-bg"><img class="concert-bg" src="img/concert.jpg" alt="Concert"></div>
    <br>
    <h1>Welcome to the Concert photo uploader from &copy;Fractal Productions</h1>
    <div class="main-text">
        <p class="uploader-text">This is an area that members can use to show off their great photos of artists and photos of concerts that you've attended. Please make sure all photos uploaded are appropriate and are family friendly. </p>
    </div>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label text-center">Upload Your concert photos</label>
                            <div class="preview-zone hidden">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <div><b>Preview</b></div>
                                    </div>
                                    <div class="box-body"></div>
                                </div>
                            </div>
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Click Here to upload image or drag image here.</p>
                                </div>
                                <input type="file" name="file_upload" class="dropzone">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Upload</button>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-danger btn-xs remove-preview">
                                <i class="fa fa-times"></i>Reset Form</button>
                        </div>
                        <?php
                        if (!empty($message)) {
                            echo "<p id=\"alert\" class=\"alert alert-primary mt-4 text-center\">{$message}</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap flex-row align-items-center justify-content-between">
                    <?php display_images(); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>



</html>