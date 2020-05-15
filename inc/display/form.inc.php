<?php
require '../layout/header.inc.php';
session_start();
?>

<body>
    <?php include "../layout/navbar.inc.php";
    require "../create/register.inc.php";   
    ?>
    <div class="form-errors" data-errors></div>
    <div class="container-fluid bg-secondary w-50 mt-5 mb-5 text-center rounded shadow">
        <div class="reg-wrapper bg-dark mx-auto w-50 p-2 text-white">
            <div class="registration-form  mt-5">
                <p>I can see that you're not logged in</p>
                <hr>
                <p>please <a href="login.php">login</a> or register to proceed.</P>
                <p>Please choose a username and fill out the information below to register.</p>
            </div>
            <hr>
            <h1>Registration</h1>
            <hr>
            <form class="form-group mt-5" action="form.inc.php" method="POST">
                <label for="username">Username</label>
                <div id="errorUserName"></div>
                <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($username) ? $username : ""); ?>">
                <br>
                <label for="first_name">First name</label>
                <div id="errorFirstName"></div>
                <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First Name" value="<?php echo (isset($first_name) ? $first_name : ""); ?>">
                <br>
                <label for="last_name">Last name</label>
                <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo (isset($last_name) ? $last_name : ""); ?>">
                <br>
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="email" value="<?php echo (isset($email) ? $email : ""); ?>">
                <br>
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <br>
                <input class="btn btn-primary" type="submit" value="Register">
            </form>
            <p>Already a member? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <script src="../../js/form.js"></script>

</body>