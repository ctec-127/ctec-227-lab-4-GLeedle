<?php
session_start();
require_once '../layout/header.inc.php';
require '../functions/login.inc.php';
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab 4 - File Uploader</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

</head>

<body>
    <?php include "../layout/navbar.inc.php"; ?>
    <div class="container bg-dark mt-5 p-5 text-center rounded shadow">
        <form class="mx-auto" action="login.php" method="POST">
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