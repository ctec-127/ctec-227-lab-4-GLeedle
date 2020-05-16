<?php
session_start();
require_once "../layout/header.inc.php";
require "../functions/upload.inc.php";
require "display.inc.php";
?>


<body>   
    <?php include "../layout/navbar.inc.php" ?>
    <?php include "display.pics.inc.php" ;
    ?>
    <script src="js/script.js"></script>
</body>

</html>