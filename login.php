<?php
session_start();

$username = "admin";
$password = "1234";

Login.php
if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == $username && $pass == $password) {
        $_SESSION['user'] = $user;

        // Set cookie for 1 hour
        setcookie("user", $user, time() + 3600);

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<h3 style='color:red;'>Invalid Credentials!</h3>";
    }
}
?>
