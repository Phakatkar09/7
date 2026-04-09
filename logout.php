<?php
session_start();
session_destroy();

// Delete cookie
setcookie("user", "", time() - 3600);

header("Location: login.php");
exit();
?>

<h2>Login Page</h2>
<form method="post">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<input type="submit" name="login" value="Login">
</form>
