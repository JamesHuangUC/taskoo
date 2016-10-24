<?php
include("inc/profileheader.php");
session_start();
if ($_SESSION["email"]) {
?><br><br>
<div class="container">
  <div class="row">
    <div class="col m2"></div>
    <div class="col m8">
      <h5>Profile</h5>
      <br>
      <table>
        <thead>
          <tr>
            <th data-field="title">Title</th>
            <th data-field="value">Details</th>
          </tr>
        </thead>
        <tbody>
          <?php include("incdata/connection_profile.php"); ?>
        </tbody>
      </table><br><br>
      <a href="inc/logout.php" class="waves-effect waves-teal btn">Sign Out</a>
      <br><br><br>
    </div>
  </div>
</div>
<?php
} else {
  header("Location:index.php");
}
include("inc/footer.php");?>
