
<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT title, location, taskdate, timerange, price, taskid FROM taskoo_task WHERE helper='none' AND tasker='".$_SESSION["email"]."' ORDER BY postdate DESC, posttime DESC";
// echo "<b>SQL:   </b>".$query."<br><br>";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($row = pg_fetch_row($result)){
  echo '<li class="collection-item"><div class="row" style="margin-bottom: 0px;">
  <div class="col s9"><span class="title"><b>'.
  $row[0].'</b></span><br><p><i class="material-icons" style="vertical-align: bottom;">my_location</i> &nbsp; '.
  $row[1].'<br><i class="material-icons" style="vertical-align: bottom;">schedule</i> &nbsp; '.
  $row[2] .', ' . $row[3]. '<br><i class="material-icons" style="vertical-align: bottom;">credit_card</i> &nbsp; $'.
  $row[4] . '/hr</p></div>
  <div class="col s3"><br>
    <a href="../taskdetails.php?taskid='.$row[5].'" target="_blank" class="secondary-content"><i class="material-icons">visibility</i></a></div>
</div>
  </li>';
}
pg_free_result($result);
pg_close($dbconn);
?>
