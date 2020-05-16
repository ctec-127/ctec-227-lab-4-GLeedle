<?php
if (!$_SESSION['username']) {
    header('location: inc/display/login.php');
} else {
    header('location: inc/display/upload-files.php');
}
