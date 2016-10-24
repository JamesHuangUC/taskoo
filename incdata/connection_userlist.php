
<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT name, email, contact FROM taskoo_user ORDER BY email ASC";
// echo "<b>SQL:   </b>".$query."<br><br>";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($row = pg_fetch_row($result)){
  echo '<li class="collection-item"><div class="row" style="margin-bottom: 0px;">
  <div class="col s9"><span class="name"><b>'.
  $row[0].'</b></span><br><p><i class="material-icons" style="vertical-align: bottom;">the_email</i> &nbsp; '.
  $row[1].'<br><i class="material-icons" style="vertical-align: bottom;">the_contact</i> &nbsp; '.
  $row[2] . '</p></div>
  <div class="col s3"><br>
    <a href="../userdetails_adminview.php?email='.$row[3].'" class="secondary-content"><i class="material-icons">visibility</i></a></div>
</div>
  </li>';
}
pg_free_result($result);
pg_close($dbconn);
?>
