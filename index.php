<?php
// Start the session
session_start();
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
<?php
// Set session variables
$_SESSION["auth"] = "none";
?>
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
    <div class="col m6"><br>
      <img src="img/landing-tulip.jpg">
    </div>
    <div class="col m4"><br><br><br><br>
      <h4>Get and give help the easy way</h4><br>
      <h6>Taskoo connects taskers with available helpers nearby.</h6><br>
      <a class="waves-effect waves-teal btn">Start Using</a>
    </div>
  </div><br><br><br>
<?php include("inc/footer.php"); ?>
