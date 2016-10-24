<?php include 'inc/helperheader.php'; ?>
<?php
session_start();
if ($_SESSION["email"]) {
  if (isset($_GET["page"])) {
    if ($_GET["page"] == "find") {
      include 'inc/findtasks.php';
    } else if ($_GET["page"] == "accepted") {
      include 'inc/acceptedtasks.php';
    } else {
      include 'inc/findtasks.php';
    }
  } else {
    include 'inc/findtasks.php';
  }
} else {
  header("Location:index.php");
}
?>
<?php include 'inc/footer.php'; ?>
