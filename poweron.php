<?php
include ('session.php');
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
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Turn ON Servers</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-desktop"></i>Server Action</li>
						<li><i class="fa fa-th-list"></i>Power On</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Wakeon LAN Servers
                          </header>
                          
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
$result = mysqli_query($con,"SELECT * FROM Poweron");
?>
<table class='table table-striped table-advance table-hover'>
<tbody>
<tr>
<th><i class='icon_profile'></i>Name of the Server</th>
<th><i class='icon_calendar'></i>MAC Address of Server</th>
<th><i class='icon_pin_alt'></i>Location</th>
<th><i class='icon_cogs'></i> Action</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<?php $var1=$row['ID']; ?>
<!--<td> <?php echo $row['ID'] ?> </td> -->
<td> <?php echo $row['Name'] ?> </td>
<td> <?php $var = $row['MAC']; echo $var ?> </td>
<td> <?php echo $row['Location'] ?> </td>
<td>
<a target="_blank" class="btn btn-success"  href="wakeonlan.php?varname=<?php echo $var ?> "> Power on</a>
<a class="btn btn-danger"  href="deletepoweron.php?varname=<?php echo $var1 ?> "> Delete Entry </a>
</td>
</tr>
<?php 
}
?>
  </tbody>

  </table>
 </section>

       <?php 
mysqli_close($con);
?>	
	</div>
<br>
<br>
<br>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Add Server to Power On
                          </header>
                          <div class="panel-body">
                              <form action = 'insertpoweron.php' class="form-horizontal " method="post">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Name</label>
                                      <div class="col-sm-10">
                                          <input name = "Name" type="text" class="form-control">
                                          </div>
                                        </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">MAC</label>
                                      <div class="col-sm-10">
                                          <input name ="MAC" class="form-control" id="focusedInput" type="text">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Location</label>
                                      <div class="col-sm-10">
                                          <input name = "loc" type="text"  class="form-control" >
                                      </div>
                                  </div>
                                  <input name = "submit" value="Submit" type="submit" id="submit">
                                  <input type="reset" value="Reset"> 

                               </form>
                          </div>
  
                    </section>
 <!--<?php
if (isset($_POST['submit']))
{
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'pass123');
    define('DB_DATABASE', 'NOC');
   
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                #declare variables
                $Name = $_POST['Name'];
                $MAC = $_POST['MAC'];
                $loc = $_POST['loc'];
                mysqli_query($db,"INSERT INTO Poweron(Name, MAC ,Location)
				VALUES('$Name','$MAC','$loc')");
                          
                 

                mysqli_close($db);
}
?> -->
<!--
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Delete Server from Database
                          </header>
                          <div class="panel-body">
                              <form class="form-inline" role="form" method = "post" action = "<?php $_PHP_SELF ?>">
                                  <div class="form-group">
                                      <label class="sr-only" for="Client ID">Enter Server ID</label>
                                      <input type="Client_ID" name = "emp_id" class="form-control" id="emp_id" placeholder="Enter Clients ID">
                                  </div>
                                  <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete"> 
                              </form>

                          </div>
                      </section>

                  </div>
              </div> -->

                  </div>

              </div>

     </section>
      </section>
<!-- 
   <?php

if(isset($_POST['delete'])) {
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass123');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
            			
$emp_id = $_POST['emp_id'];
            
$sql = "DELETE FROM Poweron WHERE Poweron.ID = $emp_id" ;
mysqli_select_db('Poweron_db');
mysqli_query($con, $sql);
mysqli_close($con);
 }
?> -->

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
