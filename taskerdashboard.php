<?php include 'inc/taskerheader.php'; ?>
<?php
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
?>
<?php include 'inc/footer.php'; ?>
