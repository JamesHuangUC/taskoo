<?php
session_start();
$message="";
if(count($_POST)>0) {
  $dbconn = pg_connect("host=localhost port=5432 dbname=taskoo user=postgres password=tessa")
  or die('Could not connect: ' . pg_last_error());
  $query = "INSERT INTO taskoo_user VALUES ('". $_POST["email"]. "','".$_POST["password"].
  "','".$_POST["name"]."','".$_POST["contact"]."','FALSE')";
  echo "<b>SQL:   </b>".$query."<br><br>";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  $row = pg_fetch_row($result);
  $_SESSION["email"] = $_POST["email"];
}
if(isset($_SESSION["email"])) {
  header("Location:taskerdashboard.php");
}
?>

<html>
<head>
  <title>Taskoo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <script src="https://use.fontawesome.com/ed57d295ba.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body style="background-color: white;">
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper" style="background-color: white;">
      <a href="taskerdashboard.php" class="brand-logo" style="margin-top: 20px;"><img src="../img/taskoo-logo.png" height=20px style="margin-left: 10px;"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="signup.php" class="linkcolor">Sign Up</a></li>
        <li><a href="login.php" class="linkcolor">Login</a></li>
      </ul>
    </div>
  </nav>
  </div>
  <div class="row"><br>
    <div class="col m4"><br>
    </div>
    <div class="col m4"><br><br><br><center>
      <img src="img/taskoo-logo.png" style="width: 40%;"></center><br><br>
      <form action="" method="POST">
        <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="contact" name="contact" type="text" class="validate">
          <label for="contact">Contact Number</label>
        </div>
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
          <br><br><br>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action" style="float: right;">SIGNUP
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
  </div><br><br><br>
<?php include("inc/footer.php"); ?>
