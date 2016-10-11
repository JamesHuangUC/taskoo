<?php include 'inc/taskerheader.php'; ?>
<?php
session_start();
if($_SESSION["email"]) {
  if (isset($_GET["page"])) {
    if ($_GET["page"] == "create") {
      include 'inc/createtask.php';
    } else if ($_GET["page"] == "pending") {
      include 'inc/yourtasks.php';
    } else if ($_GET["page"] == "accepted"){
      include 'inc/taskhistory.php';
    }
  } else {
    include 'inc/createtask.php';
  }
} else {
  header("Location:index.php");
}
?>
<?php include 'inc/footer.php'; ?>
