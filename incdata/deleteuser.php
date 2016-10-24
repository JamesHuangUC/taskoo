<?php
session_start();
echo $_GET["email"];
echo $_SESSION["email"];
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "DELETE FROM taskoo_user WHERE email='".$_SESSION["email"].";";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
header("Location:../admindashboard.php?page=users");
?>
