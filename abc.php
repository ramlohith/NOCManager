<?php
include ('session.php');
?>
<?php
$var= $_GET['varname'];

include("fusioncharts.php");

$hostdb = "localhost";  // MySQl host
$userdb = "root";  // MySQL username
$passdb = "chavali9813";  // MySQL password
$namedb = "NOC";  // MySQL database name

$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

if ($dbhandle->connect_error) {
  exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NOC Manager">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta http-equiv="refresh" content="6000" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.zune.js"></script>
   
     
    <title>NOC Manager</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
            
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">DESE <span class="lite">Admin</span></a>
            <!--logo end-->


             <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                   <!-- <li class="dropdown">
                        <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#"> -->
                            <span class="profile-ava">
                                <i class = "fa fa-sign-out"> </i>
                            </span>
                           <a href = "logout.php"> <span class="username"> Logout!</span> </a>
                            <!-- <b class="caret"></b>
                        <!-- </a>
                        <!--<ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
               <!-- </ul> -->
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
		<li>
                      <a class="" href="serverstatus1.php">
                          <i class="icon_genius"></i>
                          <span>Server Status</span>
                      </a>
                  </li>	     
               <li>
                  <a class = "" href="monitorix.php">
                      <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                          <span> Monitorix </span>
                      </a>
                  </li>   
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Server Action</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#"><font color = "red"><b>Shut Down</b></font></a></li>
                          <li><a class="" href="poweron.php"><font color = "green"><b>Power ON</b></font></a></li>                

                      </ul>
                  </li>
              </li>
	   <li class="sub-menu">
                 <a href="javascript:;" class="">
                     <i class="icon_table"></i>
                         <span>Configuration</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                   <li><a class="" href="serversms.php">Server SMS</a></li>
                   <li><a class="" href="serveremail.php">Server Email</a></li>
                   <li> <a class="" href="upssms.php"> UPS SMS </a></li>                          
                   <li><a class="" href="upsemail.php">UPS Email </a></li>
                      </ul>
                 </li>
               </ul>
            <!-- sidebar menu end-->
         </div>
     </aside>
   <!--sidebar end-->


      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_genius"></i>Server Status</li>
                                                <li><i class="fa fa-desktop"></i>Check Status</li>						  	
					</ol>
				</div>
			</div>

        <?php
// Displaying the Graph
  $strQuery = "SELECT * FROM network WHERE network.ip = '$var'; ";  //To display graph for the IP Address selected by user from DB
  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
  if ($result) {

  $arrData = array(
        "chart" => array(
            "caption"=> "Ping Statistics",
            "subCaption"=> "RTT of the Server ",
            "xAxisname"=> "Server IP Address",
            "yAxisName"=> "Time (msec)",
            "numberPostfix"=> "msec",
            "legendItemFontColor"=> "#666666",
            "theme"=> "zune"
            )
          );
          // creating array for categories object

          $categoryArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();
          $dataseries4=array();

          // pushing category array values
          while($row = mysqli_fetch_array($result)) {
            array_push($categoryArray, array(
            "label" => $row["ip"]
          )
        );
        array_push($dataseries1, array(
          "value" => $row["min"]
          )
        );

        array_push($dataseries2, array(
          "value" => $row["max"]
          )
        );
        array_push($dataseries3, array(
          "value" => $row["avg"]
          )
         );
        array_push($dataseries4, array(
          "value" => $row["mdev"]
          )
        );

      }

      $arrData["categories"]=array(array("category"=>$categoryArray));
      // creating dataset object
      $arrData["dataset"] = array(array("seriesName"=> "Minimum", "data"=>$dataseries1), array("seriesName"=> "Maximum", "data"=>$dataseries2),array("seriesName"=> "Average",   "data"=>$dataseries3), array("seriesName"=> "Mdev",   "data"=>$dataseries4));


      /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
      $jsonEncodedData = json_encode($arrData);

      // chart object
      $msChart = new FusionCharts("mscombi2d", "chart1" , "600", "350", "chart-container", "json", $jsonEncodedData);

      // Render the chart
      $msChart->render();

      $dbhandle->close();

   }

?>

            <center>
                <div id="chart-container">Chart will render here!</div>
            </center>

	
      
<div class = "row">
<div class="col-lg-12">
                        <center> <h2> <b> Servers </b> </h2> </center>
                        <div class="table-responsive">
                            
<?php
// Connecting to DB NOC
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//Running SQL Command for given IP Address   

$result = mysqli_query($con,"SELECT * FROM network where network.ip = '$var'");

//Display Table for User from Network Table

echo "<table class='table table-hover table-striped'>
                          
<tr>
<th>Fname</th>
<th>Sname</th>
<th>IP Address </th>
<th> Packet Loss </th>
<th> Min </th>
<th> Max </th>
<th> Average </th>
<th> Mdev </th>
</tr>";

//display values for all rows present in the Database

while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td> <?php echo $row['fname'] ?> </td>
<td> <?php echo $row['sname'] ?> </td>
<td> <?php echo $row['ip'] ?> </td>
<td> <?php echo $row['packet_loss'] ?> </td>
<td> <?php echo $row['min'] ?> </td>
<td><?php echo $row['max'] ?> </td>

<td><?php echo $row['avg'] ?> </td>
 

<td><?php echo $row['mdev'] ?> </td>
</tr>
<?php
}
//close connection
mysqli_close($con);
?>
</table>

</div>
</div>
</div> 


<!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	
  </script>

    </body>

    </html>
