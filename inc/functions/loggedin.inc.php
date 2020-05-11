<?php
if (!$_SESSION['username']) {
    header('location: inc/display/form.inc.php');
}
