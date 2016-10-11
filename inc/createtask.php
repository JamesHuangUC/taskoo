<?php include("incdata/connection_createtask.php"); ?>
<form method="POST" action="">
  <div class="row">
    <div class="col s1"></div>
    <div class="col s4"><br><br><br>
      <h5>Select Category</h5><br><br>
      <label>
        <input type="radio" name="category" value="cleaning" required/>
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
          <input id="title" type="text" name="title" class="validate" required>
          <label for="title">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
          <label for="textarea1">Task Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" name="taskdate" class="datepicker">
          <label for="date"></label>
        </div>
        <div class="input-field col s6">
          <select name="timerange" required>
            <option disabled selected>Select Time Range</option>
            <option name="timerange" value="Morning">Morning</option>
            <option name="timerange" value="Afternoon">Afternoon</option>
            <option name="timerange" value="Evening">Evening</option>
            <option name="timerange" value="Any Time">Any Time</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="location" type="text" name="location" class="validate" required>
          <label for="location">Location</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="price" type="number" name="price" class="validate" required>
          <label for="price">Price ($/hr)</label>
        </div>
      </div><br>
      <button class="btn waves-effect waves-light" type="submit" name="action" style="float: right;">Submit Task
        <i class="material-icons right">send</i>
      </button>

    </div>
    <div class="col s1"></div>
  </div><br><br>
</form><br>
