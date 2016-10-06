<?php include 'inc/helperheader.php'; ?>
<?php
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
?>
<?php include 'inc/footer.php'; ?>
