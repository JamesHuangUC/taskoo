<?php include 'inc/adminheader.php'; ?>
<?php
session_start();
if ($_SESSION["admin"] == "isadmin") {
  include 'inc/admintasklist.php';
} else {
  header("Location:index.php");
}
?>
<?php include 'inc/footer.php'; ?>
