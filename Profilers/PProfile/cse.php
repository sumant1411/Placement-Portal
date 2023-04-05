<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	
	   }
   else {
	   header("location: index.php");
  }
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Manage CS Students</title>
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
  <div class="bg">
  <div class="templatemo-content-container">
 <centre><h2>Approved Students List of CS</h2></centre>
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
			<table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
              
                    <td><a class="white-text templatemo-sort-by">First Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Last Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">USN </a></td>
                    <td><a  class="white-text templatemo-sort-by">Mobile </a></td>
					   <td><a  class="white-text templatemo-sort-by">Email </a></td>
                       <td><a  class="white-text templatemo-sort-by">DOB</a></td>
   <td><a  class="white-text templatemo-sort-by">Sem </a></td>               
   <td><a  class="white-text templatemo-sort-by">Branch </a></td>
   <td><a  class="white-text templatemo-sort-by">SSLC </a></td>
   <td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
			      <td><a  class="white-text templatemo-sort-by">BE </a></td>
			      <td><a  class="white-text templatemo-sort-by">Backlogs </a></td>
				     <td><a class="white-text templatemo-sort-by">History Of Backlogs </a></td>
				     <td><a  class="white-text templatemo-sort-by">Detain Years </a></td>
				    
				  </thead>
			   </tr>
			   
 <?php

		
$num_rec_per_page=2;
mysql_connect('localhost','root','');
mysql_select_db('placement');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM basicdetails where Approve='1' and Branch='CS' LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query

while ($row = mysql_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 
 
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>"; 
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Sem'] . "</td>"; 
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSLC'] . "</td>"; 
print "<td>" . $row['PU/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";




print "</tr>"; 

}
	
?> 

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div>


   <div class="pagination-wrap">
   <ul class="pagination">
   <?php 
		
$num_rec_per_page=2;
mysql_connect('localhost','root','');
mysql_select_db('placement');
$sql = "SELECT * FROM basicdetails where Approve='1' and Branch='CS'"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page); 

 
$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
	 if($currentpage == 0)
	{
	   
	}
	else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
	{
	
		if( $currentpage > 1 && $currentpage <= $totalpage)
			{
				
				$prev = $currentpage-1;
				echo "<li><a  href='cse.php?page=".$prev."'><</a></li>";
				
			}
	
	if($totalpage > 1){
$prev = $currentpage-1;
	for ($i=$prev+1; $i<=$currentpage+2; $i++){
		echo "<li><a href='cse.php?page=".$i."'>".$i."</a></li>";
  }
  }
	
	
	if($totalpage > $currentpage  )
	{
		$nxt = $currentpage+1;
		echo "<li><a  href='cse.php?page=".$nxt."' >></a></li>";
	}

	 echo "<li><a>Total Pages:".$totalpage."</a></li>";
}	
 ?> 
 

</ul> 
</div>

</body>
</html>
