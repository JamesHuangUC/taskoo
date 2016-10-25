<?php
include("inc/adminheader.php");
include("incdata/connection_edittask_admin.php");
?>
<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
    or die('Could not connect: ' . pg_last_error());
$query = "SELECT title, location, taskdate, timerange, price, description, category, helper FROM taskoo_task
  WHERE taskid=". $_GET["taskid"].";";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$row = pg_fetch_row($result);
pg_free_result($result);
pg_close($dbconn);
?>
<form method="POST" action="">
  <div class="row">
    <div class="col s1"></div>
    <div class="col s4"><br><br><br>
      <h5>Select Category</h5><br><br>
      <label>
        <input type="radio" name="category" <?php if ($row[6] == "cleaning") { echo "checked='checked'";}?> value="cleaning" required/>
        <img src="../img/btn-cleaning.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" <?php if ($row[6] == "errands") { echo "checked='checked'";}?> value="errands" />
        <img src="../img/btn-errands.jpg" height=160px>
      </label><br><br>
      <label>
        <input type="radio" name="category" <?php if ($row[6] == "moving") { echo "checked='checked'";}?> value="moving" />
        <img src="../img/btn-moving.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" <?php if ($row[6] == "virtual") { echo "checked='checked'";}?> value="virtual" />
        <img src="../img/btn-virtual.jpg" height=160px>
      </label><br><br>
      <label>
        <input type="radio" name="category" <?php if ($row[6] == "furniture") { echo "checked='checked'";}?> value="furniture" />
        <img src="../img/btn-furniture.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category"<?php if ($row[6] == "handyman") { echo "checked='checked'";}?>  value="handyman" />
        <img src="../img/btn-handyman.jpg" height=160px>
      </label><br><br>
    </div>
    <div class="col s5"><br><br><br>
      <h5>Edit Task</h5><br><br>
      <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" class="validate" value="<?php echo $row[0];?>" required>
          <label for="title" class="active">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="description" class="materialize-textarea"><?php echo $row[5];?></textarea>
          <label for="textarea1" class="active">Task Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" name="taskdate" class="datepicker">
          <label for="date"></label>
        </div>
        <div class="input-field col s6">
          <select name="timerange" required>
            <option disabled>Select Time Range</option>
            <option name="timerange" value="morning" <?php if ($row[3] == "morning") {echo "selected";};?>>Morning</option>
            <option name="timerange" value="afternoon" <?php if ($row[3] == "afternoon") {echo "selected";};?>>Afternoon</option>
            <option name="timerange" value="evening" <?php if ($row[3] == "evening") {echo "selected";};?>>Evening</option>
            <option name="timerange" value="any time" <?php if ($row[3] == "any time") {echo "selected";};?>>Any Time</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="location" type="text" name="location" class="validate" value="<?php echo $row[1];?>" required>
          <label for="location" class="active">Location</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="price" type="number" name="price" class="validate" value="<?php echo $row[4];?>" required>
          <label for="price">Price ($/hr)</label>
        </div>
          <div class="input-field col s6">
            <input id="helper" type="email" name="helperemail" class="validate" value="<?php echo $row[7];?>" required>
            <label for="helper">Helper Email</label>
          </div>
          <input type="hidden" name="taskid" value='<?php echo $_GET["taskid"];?>'>
        </div>
      <br>
      <button class="btn waves-effect waves-light" type="submit" name="action" style="float: right;">Update</button>
      <a href="taskerdashboard.php?page=pending" class="waves-effect waves-teal btn inbtn">Back</a> &nbsp;
    </div>
    <div class="col s1"></div>
  </div><br><br>
</form><br>

<?php include("inc/footer.php"); ?>
