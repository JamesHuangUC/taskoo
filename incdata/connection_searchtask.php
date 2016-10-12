
<?php
session_start();
if(count($_GET)>0) {

  function getCategoryFilterSQL() {
    $sqlstring = "";
    $count = 0;
    if ($_GET["cat_cleaning"]) {
      $sqlstring .= "category='cleaning'";
      $count++;
    }
    if ($_GET["cat_furniture"]) {
      $sqlstring .= addOR($count);
      $sqlstring .= "category='furniture'";
      $count++;
    }
    if ($_GET["cat_moving"]) {
      $sqlstring .= addOR($count);
      $sqlstring .= "category='moving'";
      $count++;
    }
    if ($_GET["cat_errands"]) {
      $sqlstring .= addOR($count);
      $sqlstring .= "category='errands'";
      $count++;
    }
    if ($_GET["cat_handyman"]) {
      $sqlstring .= addOR($count);
      $sqlstring .= "category='handyman'";
      $count++;
    }
    if ($_GET["cat_virtual"]) {
      $sqlstring .= addOR($count);
      $sqlstring .= "category='virtual'";
      $count++;
    }
    $categorycount = $count;
    if ($sqlstring != "") {
      return "(" . $sqlstring . ")";
    }
  }

  function addOR($count) {
    if ($count > 0) {
      return " OR ";
    }
  }
  function getNoHelperSQL() {
    if ($_GET["cat_cleaning"] || $_GET["cat_furniture"] || $_GET["cat_moving"] ||
    $_GET["cat_errands"] || $_GET["cat_virtual"] || $_GET["cat_errands"]) {
      return "helper='none' AND";
    } else {
      return "helper='none'";
    }
  }

  function getOrderSQL() {
    $ordersql = "";
    if ($_GET["byprice"] == 'yes') {
      $ordersql .= "price DESC,";
    }
    if ($_GET["bydate"] == 'yes') {
      $ordersql .= "taskdate ASC,";
    }
    return $ordersql;
  }

  function getTitleSQL() {
    if ($_GET["searchtitle"]) {
      return "title LIKE '%".$_GET["searchtitle"]."%' AND";
    }
  }

  $dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
  or die('Could not connect: ' . pg_last_error());
  $query = "SELECT title, location, taskdate, timerange, price, taskid FROM taskoo_task
  WHERE ".getTitleSQL()." ".getNoHelperSQL(). " ".getCategoryFilterSQL()." ORDER BY ".getOrderSQL()." postdate DESC, posttime DESC";
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
    <a href="../taskdetails.php?taskid='.$row[5].'" class="secondary-content"><i class="material-icons">visibility</i></a></div>
    </div>
    </li>';
  }
  pg_free_result($result);
  pg_close($dbconn);
}
?>
