<div class="container">
<div class="row"><br><br>
  <div class="col m4">
    <h5>Search</h5><br>
    <ul class="collection">
      <li class="collection-item">
          <div class="search-wrapper">
            <input id="search" style="width: 85%;" placeholder="search title">
            <a href="#search"><i class="material-icons" style="vertical-align: middle;">search</i></a>
          </div>
      </li>
      <li class="collection-item">
        <h6>CATEGORIES</h6>
        <p>
          <input type="checkbox" class="filled-in" id="cleaning" checked="checked" />
          <label for="cleaning">Cleaning</label><br>
          <input type="checkbox" class="filled-in" id="furniture" checked="checked" />
          <label for="furniture">Furniture</label><br>
          <input type="checkbox" class="filled-in" id="moving" checked="checked" />
          <label for="moving">Moving</label><br>
          <input type="checkbox" class="filled-in" id="handyman" checked="checked" />
          <label for="handyman">Handyman</label><br>
          <input type="checkbox" class="filled-in" id="virtual" checked="checked" />
          <label for="virtual">Virtual</label><br>
          <input type="checkbox" class="filled-in" id="errands" checked="checked" />
          <label for="errands">Errands</label><br>
        </p>
      </li>
      <li class="collection-item">
        <h6>RANK</h6>
        <p>
          <input type="checkbox" class="filled-in" id="byprice" checked="checked" />
          <label for="byprice">By Price</label><br>
          <input type="checkbox" class="filled-in" id="bydate" checked="checked" />
          <label for="bydate">By Earliest Date</label><br>
        </p>
      </li>
    </ul>
  </div>
  <div class="col m8">
    <h5>Available Tasks</h5><br>
    <ul class="collection">
      <?php include("incdata/connection_findtask.php");?>
  </ul><br><br><br>
  </div>
</div><br><br>
</div>
