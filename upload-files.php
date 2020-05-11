<?php
session_start();
require "inc/layout/header.inc.php";
require "inc/functions/loggedin.inc.php";
require "inc/functions/upload.inc.php";
require "inc/display/display.inc.php";
?>

<body>
    <?php include "inc/layout/navbar.inc.php" ?>
    <?php include "inc/display/display.pics.inc.php" ?>
    <script src="js/script.js"></script>
</body>

</html>