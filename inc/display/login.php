<?php
session_start();
require_once '../layout/header.inc.php';
require '../functions/login.inc.php';
?>

<body>
    <?php include "../layout/navbar.inc.php"; ?>
    <div class="container bg-dark mt-5 p-5 text-center rounded shadow w-50">
        <form class="mx-auto border border-secondary p-5" action="login.php" method="POST">
        <p class="registration-form">Not a member yet? <a href="form.inc.php">Register here</a></p><br>
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password</label>
            <!-- <span id="showPassword" onclick="showPassword();">Show Password</span> -->
            <br>
            <input type="password" name="password" id="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <script src="js/script.js"></script>
</body>