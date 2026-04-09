<?php
session_start();

if(!isset($_SESSION['user'])) {
header("LocaƟon: login.php");
exit();
}
?>

<h2>Dashboard</h2>

<?php
echo "<h3>Welcome " . $_SESSION['user'] . "</h3>";

if(isset($_COOKIE['user'])) {
echo "<p>Cookie User: " . $_COOKIE['user'] . "</p>";
}
?>
<a href="logout.php">Logout</a>
