<?php
  session_start();
  if($_SESSION["username"]){
    
  }
   else {
	   header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
        
        mysql_connect('localhost','root','');
        mysql_select_db('placement');
        $RESULT=mysql_query("SELECT * from basicdetails where USN=" . $_SESSION["username"]);
        $data=mysql_fetch_assoc($RESULT);
        $FN = $data['FirstName'];
        $LN = $data['LastName'];
        echo "<h1>" . $FN . " " . $LN . "<br>". $_SESSION['username']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="../../Drives/products.php"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            
            <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li>
                  <a href="../../Homepage/index.php">Home </a>
                </li>
                <li>
                  <a href="../../Drives/index.php">Drives Homepage</a>
                </li>
                <li>
                  <a href="Notif.php">Notifications</a>
                </li>
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Final Year Project</h2>
              <hr>
                <?php 
                  mysql_connect('localhost','root','');
                  mysql_select_db('placement');
                  $RESULT=mysql_query("SELECT * from projects where USN ='" . $_SESSION["username"] . "'");
                  $row = mysql_fetch_assoc($RESULT);
                    
                  print '<br><h4>Project name:</h4> <p>'. $row["project"] .' </p> <br>';
                  print '<h4>Description:</h4> <p>'. $row["description"] .' </p> <br>';
              
                
                ?>
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <h2>Certifications</h2>
              <?php
                
                mysql_connect('localhost','root','');
                mysql_select_db('placement');
                $RESULT=mysql_query("SELECT * from projects where USN=" . $_SESSION["username"]);
                $row=mysql_fetch_assoc($RESULT);
                $certs = explode(",", $row['certifications']);
                print '<br>';
                for ($i=0; $i<count($certs);$i++) {
                  print '<p>' . $certs[$i] . '</p><br>'; 
                }

              ?>
            </div>
            <div class="templatemo-content-widget white-bg col-1">
            <?php
			
              mysql_connect('localhost','root','');
              mysql_select_db('placement');
              $RESULT=mysql_query("SELECT * from basicdetails where USN=" . $_SESSION["username"]);
              $row=mysql_fetch_assoc($RESULT);
              print '<h2>First Name: ' . $row['FirstName'] . ' ' . $row['LastName'] . '</h2><br>'; 
              print '<h2>Class X: ' . $row['SSLC'] . '</h2><br>'; 
              print '<h2>Class XII: ' . $row['PU/Dip'] . '</h2><br>'; 
              print '<h2>Btech: ' . $row['BE'] . '</h2><br>'; 
              print '<h2>Backlogs: ' . $row['Backlogs'] . '</h2><br>'; 
              
              ?>
            </div>
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <a href="../../Drives/latestdrives.php"> 
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Latest Drive</h2>
                    <p>Get the latest placement drive</p>
                  </div>
                  </a>
                  
                </div>
              </div>
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <a href="../../Drives/products.php"> 
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Current Drives</h2>
                    <p>Know the ongoing placement drives</p>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative">
                  <h2 class="text-uppercase">Lately Placed Students</h2>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Company</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Naachiket</td>
                        <td>Pant</td>
                        <td>Oracle</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Raj</td>
                        <td>Patil</td>
                        <td>Oracle</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Sumant</td>
                        <td>Rawat</td>
                        <td>Siemens</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Parth</td>
                        <td>Saklani</td>
                        <td>Google</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Mallika</td>
                        <td>Raj Verma</td>
                        <td>Standard Bakers</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Second row ends -->
          <footer class="text-right">
            		<p>
              <a href="placementportal.in" target="_parent"></a>
			  </p>
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>