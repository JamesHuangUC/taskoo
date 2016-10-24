<?php include 'inc/adminheader.php'; ?>
<?php
session_start();
if($_SESSION["email"]) {
  if (isset($_GET["page"])) {
    if ($_GET["page"] == "users") {
      include 'inc/userlist.php';
    } else if ($_GET["page"] == "tasks") {
      include 'inc/tasklist.php';
    }
  } else {
    include 'inc/userlist.php';
  }
} else {
  header("Location:index.php");
}
?>
<?php include 'inc/footer.php'; ?>
