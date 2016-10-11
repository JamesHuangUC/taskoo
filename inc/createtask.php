<form method="POST" action="taskersubmitted.php">
  <div class="row">
    <div class="col s1"></div>
    <div class="col s4"><br><br><br>
      <h5>Select Category</h5><br><br>
      <label>
        <input type="radio" name="category" value="cleaning" />
        <img src="../img/btn-cleaning.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" value="errands" />
        <img src="../img/btn-errands.jpg" height=160px>
      </label><br><br>
      <label>
        <input type="radio" name="category" value="moving" />
        <img src="../img/btn-moving.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" value="virtual" />
        <img src="../img/btn-virtual.jpg" height=160px>
      </label><br><br>
      <label>
        <input type="radio" name="category" value="furniture" />
        <img src="../img/btn-furniture.jpg" height=160px>
      </label> &nbsp; &nbsp;
      <label>
        <input type="radio" name="category" value="handyman" />
        <img src="../img/btn-handyman.jpg" height=160px>
      </label><br><br>
    </div>
    <div class="col s5"><br><br><br>
      <h5>Describe Task</h5><br><br>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Task Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="datepicker">
          <label for="email"></label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="text" class="validate">
          <label for="email">Time Range</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Location</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="text" class="validate">
          <label for="email">Price</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="text" class="validate">
          <label for="email">Contact Number</label>
        </div>
      </div><br>
      <button class="btn waves-effect waves-light" type="submit" name="action" style="float: right;">Submit Task
        <i class="material-icons right">send</i>
      </button>

    </div>
    <div class="col s1"></div>
  </div><br><br>
</form><br>
