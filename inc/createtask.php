<form method="POST" action="taskersubmitted.php" class"form-inline">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <h3>Select Category</h3><br><br>

      <label>
        <input type="radio" name="category" value="cleaning" />
        <img src="../img/btn-cleaning.jpg" height=140px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" value="errands" />
        <img src="../img/btn-errands.jpg" height=140px>
      </label><br><br>
      <label>
        <input type="radio" name="category" value="moving" />
        <img src="../img/btn-moving.jpg" height=140px>
      </label> &nbsp; &nbsp;
      <label>
      <input type="radio" name="category" value="virtual" />
      <img src="../img/btn-virtual.jpg" height=140px>
      </label><br><br>
      <label>
        <input type="radio" name="category" value="furniture" />
        <img src="../img/btn-furniture.jpg" height=140px>
      </label> &nbsp; &nbsp;
      <label>
      <input type="radio" name="category" value="handyman" />
      <img src="../img/btn-handyman.jpg" height=140px>
      </label><br><br>
    </div>

    <div class="col-md-4">

      <h3>Describe Task</h3><br><br>
      <div class="form-group col-sm-12">
        <input class="form-control forminput" placeholder="Title" />
      </div><br>
      <div class="form-group col-sm-12">
        <textarea class="formtext form-control" rows="5" placeholder="Task Description"></textarea>
      </div><br>
      <div class="form-group col-sm-6">
        <input class="form-control forminput" placeholder="Task Date">
      </div>
      <div class="form-group col-sm-6">
        <input class="forminput form-control col-sm-1" placeholder="Time Range" />
      </div><br>
      <div class="form-group col-sm-12">
        <input class="form-control forminput" placeholder="Location" />
      </div><br>
      <div class="form-group col-sm-4">
        <input class="form-control forminput" placeholder="Price" />
      </div>
      <div class="form-group col-sm-8">
        <input class="form-control forminput" placeholder="Contact Number" /><br>
      </div><br><br><br>
      <a class="btn btn-default submitbtn2" style="margin-left: 18px; padding: 14px 150px 14px 150px;" href="taskerdashboard.php">Submit</a><br><br>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
</form>
