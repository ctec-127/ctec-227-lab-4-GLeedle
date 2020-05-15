<?php
if (!$_SESSION['username']) {
    header('location: inc/display/form.inc.php');
} else {
    header('location: inc/display/upload-files.php');
}
