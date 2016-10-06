<?php include 'inc/taskerheader.php'; ?>
<?php
if (isset($_GET["page"])) {
  if ($_GET["page"] == "create") {
    include 'inc/createtask.php';
  } else if ($_GET["page"] == "tasks") {
    include 'inc/yourtasks.php';
  } else {
    include 'inc/createtask.php';
  }
} else {
  include 'inc/createtask.php';
}
?>
<?php include 'inc/footer.php'; ?>
