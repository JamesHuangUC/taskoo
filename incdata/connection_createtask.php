<?php
session_start();
$message="";
if(count($_POST)>0) {
  $today = getdate();
  $formatDate = $today["year"] . "-". $today["mon"] . "-" . $today["mday"];
  echo $formatDate;
  $formatTime = $today["hours"] * 60 * 60 + $today["minutes"] * 60 + $today["seconds"];
  echo $formatTime;
  $dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
  or die('Could not connect: ' . pg_last_error());
  $query1 =
  "INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category,tasker,helper,postDate,postTime)
  VALUES(" ."'".$_POST["title"] ."','".$_POST["description"]."', '2010-11-11','".$_POST["timerange"].
  "','".$_POST["location"]."',". $_POST["price"].",'". $_POST["category"]."','".$_SESSION["email"]."', null,'".
  $formatDate."',". $formatTime .");";
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
