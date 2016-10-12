<?php include("inc/helperheader.php");
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT title, location, taskdate, timerange, price, description, category, t.name, t.contact, t.email, postdate FROM taskoo_task, taskoo_user t
WHERE helper=t.email AND taskid=". $_GET["taskid"].";";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$row = pg_fetch_row($result);
?>
<div class="row">
  <div class="col m3"></div>
  <div class="col m6">
    <table>
      <thead>
        <tr><br>
          <th data-field="title">Task Info</th>
          <th data-field="value"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        echo "<tr>";
        echo "<td>Task Title :</td>";
        echo "<td>".$row[0]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Location :</td>";
        echo "<td>".$row[1]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Task Date :</td>";
        echo "<td>".$row[2]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Time Range :</td>";
        echo "<td>".$row[3]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Price :</td>";
        echo "<td>$".$row[4]."/hr</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Description :</td>";
        echo "<td>".$row[5]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Category :</td>";
        echo "<td>".$row[6]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Helper Name :</td>";
        echo "<td>".$row[7]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Helper Contact :</td>";
        echo "<td>".$row[8]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Helper Email :</td>";
        echo "<td>".$row[9]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Post Date :</td>";
        echo "<td>".$row[10]."</td>";
        echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
  <div class="col m3"></div>
</div>
<div class="row"><br><br>
  <div class="col m3"></div>
  <div class="col m2">
    <a href="taskerdashboard.php?page=history" class="waves-effect waves-teal btn inbtn">Back</a><br><br><br>
  </div>
  <div class="col m4">
    <br><br><br>
  </div>
  <div class="col m3"></div>
</div>
<?php include("inc/footer.php"); ?>
