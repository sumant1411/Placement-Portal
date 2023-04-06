<?php
  session_start();
 if (isset($_SESSION['husername'])){
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
    <title>HOD Profile</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
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
        
        $RESULT=mysql_query("SELECT * from hlogin where Username ='" . $_SESSION["husername"] . "'");
        $data=mysql_fetch_assoc($RESULT);
        $FN = $data['Name'];
        echo "<h1>" . $FN . "<br></h1>";
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
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>    
            <li><a href="manage-student.php"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
            <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="../../Homepage/index.php">Home</a></li>
                <li><a href="../../Drives/index.php">Drives</a></li>
    <li><a href="Notif.php">Notification</a></li>
	<li><a href="Change Password.php">Change Password</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Welcome to the Portal</h2><hr>
              <p>Being The Head of the Department, Its the Duty of you to take your students and Faculties to the right way. Approve the details of students in Manage Students tab. You may Revoke the Details and Approve them if it is Wrong and Entered Correctly Respectively.</p> 
              <p><a href="manage-student.php">Approve the Students</a></p>
              <p><a href="Change Password.php">Change your account Password</a></p>            
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <a href="manage-users1.php"><h4 class="text-uppercase">View students</h4></a>
              <img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
            </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>                          
            </div>
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Latest News</h2>
                    <p>Get the Latest Placement News</p>  
                  </div>        
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
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Upcoming Events</h2>
                    <p>Get the Latest Upcoming Events in Our Campus and Fasten your Seat bealts to host them</p>  
                  </div>
                </div>                
              </div>            
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Faculty List</h2></div>
                <div class="table-responsive">
                <?php 
                  mysql_connect('localhost','root','');
                  mysql_select_db('placement');
                  $r1 = mysql_query("SELECT branch from hlogin where Username='" . $_SESSION["husername"] . "'");
                  $row1 = mysql_fetch_assoc($r1);

                  $RESULT=mysql_query("SELECT * from faculty where Dept ='" . $row1["branch"] . "'");
                    
                  print "<table>";
                  print '<tr><th style="padding: 0 15px;">Name</th><th style="padding: 0 15px;">Designation</th><th style="padding: 0 15px;">Email</th> </tr>';
                  while($row = mysql_fetch_assoc($RESULT))
                  {
                    print '<tr>';
                      print '<td style="padding: 0 15px;">'.$row['username'].'</td>';	
                      
                      print '<td style="padding: 0 15px;">'.$row['Designation'].'</td>';		
                      print '<td style="padding: 0 15px;">'.$row['Email'].'</td>';	
                     print '</tr>';
                 
                  }
                  print "</table>";
              
                
                ?>   
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->        
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>