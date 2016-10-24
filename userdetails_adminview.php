<?php include("inc/adminheader.php");
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT name, email, password, contact, isadmin FROM taskoo_user
WHERE email=". $_GET["email"].";";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$row = pg_fetch_row($result);
?>
<div class="row">
  <div class="col m3"></div>
  <div class="col m6">
    <table>
      <thead>
        <tr><br>
          <th data-field="name">User Info</th>
        </tr>
      </thead>
      <tbody>
        <?php
        echo "<tr>";
        echo "<td>Name :</td>";
        echo "<td>".$row[0]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email :</td>";
        echo "<td>".$row[1]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Password :</td>";
        echo "<td>".$row[2]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Contact :</td>";
        echo "<td>".$row[3]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Isadmin :</td>";
        echo "<td>$".$row[4]."/hr</td>";
        echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
  <div class="col m3"></div>
</div>
<div class="row"><br>
  <div class="col m3"></div>
  <div class="col m6">
    <a href="admindashboard.php?page=users" class="waves-effect waves-teal btn inbtn">Back</a> &nbsp;
    <a href='incdata/deleteuser.php?<?php echo "email=".$_GET["email"];?>' class="waves-effect waves-teal btn inbtn">Delete</a> &nbsp;<br><br>
  </div>
  <div class="col m3"></div>
</div>
<?php include("inc/footer.php"); ?>
