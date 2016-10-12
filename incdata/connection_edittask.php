<?php
session_start();
$message="";
if(count($_POST)>0) {
  $dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
  or die('Could not connect: ' . pg_last_error());
  $query1 = "UPDATE taskoo_task SET title='".$_POST["title"]."', category='".$_POST["category"]
  ."',description='".$_POST["description"]."',timerange='".$_POST["timerange"]
  ."',taskdate='".$_POST["taskdate"]."',location='".$_POST["location"]."',price=".$_POST["price"]." WHERE taskid=".$_POST["taskid"].";";
  $result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
//  $result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());
  pg_free_result($result1);
//  pg_free_result($result2);
  pg_close($dbconn);
  $_SESSION["created"] = true;
}
if(isset($_SESSION["created"])) {
  unset($_SESSION["created"]);
  header("Location:taskerdashboard.php?page=pending");
}
?>
