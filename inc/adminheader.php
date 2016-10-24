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
<body>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="profile.php">Profile</a></li>
</ul>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper" style="background-color: white;">
      <a href="taskerdashboard.php" class="brand-logo" style="margin-top: 20px;"><img src="../img/taskoo-logo.png" height=20px style="margin-left: 10px;"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admindashboard.php?page=users" class="linkcolor">Users</a></li>
        <li><a href="admindashboard.php?page=tasks" class="linkcolor">Tasks</a></li>
        <li><a class="dropdown-button linkcolor" href="#!" data-activates="dropdown1">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
  </div>
