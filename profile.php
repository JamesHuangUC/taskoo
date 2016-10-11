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
          <tr>
            <td>Name</td>
            <td>Audrey Tan</td>
          </tr>
          <tr>
            <td>Email Address</td>
            <td><?php echo $_SESSION["email"];?></td>
          </tr>
          <tr>
            <td>Contact Number</td>
            <td>91234567</td>
          </tr>
        </tbody>
      </table><br><br>
      <a href="logout.php" class="waves-effect waves-teal btn">Sign Out</a>
      <br><br><br>
    </div>
  </div>
</div>
<?php
} else {
  header("Location:index.php");
}
include("inc/footer.php");?>
