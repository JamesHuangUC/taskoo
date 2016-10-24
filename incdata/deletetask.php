<?php
session_start();
echo $_GET["taskid"];
echo $_SESSION["email"];
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "DELETE FROM taskoo_task WHERE tasker='".$_SESSION["email"]."' AND taskid=".$_GET["taskid"].";";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
header("Location:../taskerdashboard.php?page=pending");
?>
