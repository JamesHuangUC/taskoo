
<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT email, name, contact FROM taskoo_user WHERE email='" . $_SESSION["email"] . "'";
// echo "<b>SQL:   </b>".$query."<br><br>";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($row = pg_fetch_row($result)){
  echo "<tr>";
  echo "<td>Name</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Email</td>";
  echo "<td>" . $row[0] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Contact</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
}
pg_free_result($result);
pg_close($dbconn);
?>
