<?php
session_start();
require "../layout/header.inc.php";
require "../functions/upload.inc.php";
require "display.inc.php";

if (!$_SESSION['username']) {
    header('location: login.php');
}
?>


<body>
    <?php include "../layout/navbar.inc.php";
    include "display.pics.inc.php";
    include '../layout/footer.inc.php'; ?>
    <script src="../../js/script.js"></script>
</body>

</html>