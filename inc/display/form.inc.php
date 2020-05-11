<?php
require '../layout/header.inc.php';
?>

<body>
    <?php include "../layout/navbar.inc.php";
    require '../create/register.inc.php'
    ?>

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
                <input class="form-control" type="text" id="username" required name="username" placeholder="Username" value="<?php echo (isset($username) ? $username : ""); ?>">
                <br><br>
                <label for="first_name">First name</label>
                <input class="form-control" type="text" id="first_name" required name="first_name" placeholder="first_name" value="<?php echo (isset($first_name) ? $first_name : ""); ?>">
                <br><br>
                <label for="last_name">Last name</label>
                <input class="form-control" type="text" id="last_name" required name="last_name" placeholder="last_name" value="<?php echo (isset($last_name) ? $last_name : ""); ?>">
                <br><br>
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" required name="email" placeholder="email" value="<?php echo (isset($email) ? $email : ""); ?>">
                <br><br>
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" required name="password">
                <br>
                <input class="btn btn-primary" type="submit" value="Register">
            </form>
            <p>Already a member? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>