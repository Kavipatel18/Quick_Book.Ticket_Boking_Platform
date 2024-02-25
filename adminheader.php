<?php ?>
<!DOCTYPE html>
<html>
<head>
  <title>Quick Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=3.0, minimum-scale=0.46">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

  <style>
    .navbar {
      background-color: #354f52; 
      margin: 0; 
      border: 0;
      padding: 10px;
      border-radius: 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      padding: 15px;
      font-size: 30px; 
      color: white !important; 
    }

    .navbar-toggle {
      border-color: black !important; 
    }

    .navbar-toggle .icon-bar {
      background-color: black !important;
    }

    .navbar-nav {
      margin-top: 10px;
    }

    .navbar-nav li a {
      color: #fff !important;
      text-transform: uppercase; 
      font-weight: 600; 
      letter-spacing: 1px; 
    }

    .navbar-nav li a:hover {
      background-color: #354f52 !important; 
      border-radius: 3px;
      color: goldenrod !important; 
    }

    /* Adjust the dropdown menu */
    .dropdown-menu {
      background-color: #354f52 !important;
    }

    .dropdown-menu li a {
      color: #fff !important;
    }

    .dropdown-menu li a:hover {
      background-color: #354f52 !important;
    }

    .open .dropdown-toggle {
      color:#fff;
      background-color:#354f52 !important;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a class="navbar-brand" href="admin.php">Quick-Book</a><li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin: <?php echo " " . $_SESSION['name'] . "" ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>-->
            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
