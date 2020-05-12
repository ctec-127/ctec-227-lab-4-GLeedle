<?php

require_once "../sql/db_connect.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $db->real_escape_string(strtolower($_POST["username"]));
    $email = $db->real_escape_string(strtolower($_POST["email"]));
    $first_name = $db->real_escape_string(ucwords(strtolower($_POST["first_name"])));
    $last_name = $db->real_escape_string(ucwords(strtolower($_POST["last_name"])));
    $password = hash("sha512", $db->real_escape_string($_POST["password"]));

    $sql = "INSERT INTO user (username,email,first_name,last_name,password) 
                    VALUES('$username','$email','$first_name','$last_name','$password')";

    // echo $sql;
    $result = $db->query($sql);

    if (!$result) {
        echo "<div class=\"alert-danger w-25 mt-5 p-2 mx-auto text-center rounded shadow\">There was a problem registering your account, Please try again</div>";
    } else {
        echo "<div class=\"alert-success w-25 mt-5 p-2 mx-auto text-center rounded shadow\">Thank you for registering " . $first_name . ", Please Login</div>";
        echo '<div class=\"login btn btn-primary mx-auto\"><a href="login.php" title="Login Page">Login</a></div>';
    }

    

    unset($username);
    unset($email);
    unset($first_name);
    unset($last_name);
}
