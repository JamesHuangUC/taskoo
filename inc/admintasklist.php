
<div class="container">
  <div class="row"><br><br>
    <div class="col m4">
      <form method="GET" action="">
        <h5>Search</h5><br>
        <ul class="collection">
          <li class="collection-item">
            <div class="search-wrapper">
              <input id="search" style="width: 85%;" name="searchtitle" placeholder="search title">
              <a><i class="material-icons" style="vertical-align: middle;">search</i></a>
            </div>
          </li>
          <li class="collection-item">
            <h6>CATEGORIES</h6>
            <p>
              <input type="checkbox" class="filled-in" id="cleaning" name="cat_cleaning" value="cleaning" checked="checked" />
              <label for="cleaning">Cleaning</label><br>
              <input type="checkbox" class="filled-in" id="furniture" name="cat_furniture" value="furniture" checked="checked" />
              <label for="furniture">Furniture</label><br>
              <input type="checkbox" class="filled-in" id="moving" name="cat_moving" value="moving" checked="checked" />
              <label for="moving">Moving</label><br>
              <input type="checkbox" class="filled-in" id="handyman" name="cat_handyman" value="handyman" checked="checked" />
              <label for="handyman">Handyman</label><br>
              <input type="checkbox" class="filled-in" id="virtual" name="cat_virtual" value="virtual" checked="checked" />
              <label for="virtual">Virtual</label><br>
              <input type="checkbox" class="filled-in" id="errands" name="cat_errands" value="errands" checked="checked" />
              <label for="errands">Errands</label><br>
            </p>
          </li>
          <li class="collection-item">
            <h6>RANK</h6>
            <p>
              <input type="checkbox" class="filled-in" id="byprice" name="byprice" value="yes" checked="checked" />
              <label for="byprice">By Highest Price</label><br>
              <input type="checkbox" class="filled-in" id="bydate" name="bydate" value="yes" checked="checked" />
              <label for="bydate">By Earliest Date</label><br>
            </p><br>
            <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%;">Search
            </button>
            <br><br>
          </li>
        </ul>
      </form>
    </div>
    <div class="col m8">
      <h5>Available Tasks</h5><br>
      <ul class="collection">
        <?php
        if (isset($_GET["cat_cleaning"]) || isset($_GET["searchtitle"])) {
          include("incdata/connection_searchtask.php");
        } else {
          include("incdata/connection_findtask.php");
        }?>
      </ul><br><br><br>
    </div>
  </div><br><br>
</div>
