
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:400px;color: #fff;  }
  #section2 {padding-top:50px;height:500px;color: #fff; }
  #section3 {padding-top:200px;height:800px;color: #fff;}
  #section41 {padding-top:0px;height:700px;color: #fff;}
  #section42 {padding-top:0px;height:600px;color: #fff;;}
  </style>

     
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
                      <a class="" href="serverstatus.php">
                          <i class="icon_genius"></i>
                          <span>Server Status</span>
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
                            
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Server Service</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="serversms.php">SMS</a></li>
                          <li><a class="" href="serveremail.php">Email</a></li>
                      </ul>
                  </li>
                   <li>
                      <a class="" href="upsstatus.php">
                          <i class="icon_genius"></i>
                          <span>UPS Status</span>
                      </a>
                  </li>	

                  </li>
	  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>UPS Services</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub"> 
                          <li> <a class="" href="upssms.php">SMS </a></li>                          
                          <li><a class="" href="upsemail.php">Email </a></li>
                      </ul>
                  </li>

                  </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
    <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
<div id="section1" class="container-fluid">
<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
                                                <a href = "sampledatabase.php"><i class="fa fa- fa-mobile fa-5x"></i> </a>
					        <div class="count"><?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass123');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
$result = mysqli_query($con,"SELECT * FROM Upsmessages");
$num_rows = mysqli_num_rows($result);

echo "$num_rows ";
mysqli_close($con);
?>
</div>
						<div class="title">Number of Users recieving SMS upon UPS activity</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<a href = "upsemail-db.php"><i class="fa fa-envelope fa-5x"></i> </a>
						<div class="count"><?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');

define('DB_PASSWORD', 'pass123');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
$result = mysqli_query($con,"SELECT * FROM Upsemail");
$num_rows = mysqli_num_rows($result);

echo "$num_rows ";
mysqli_close($con);
?></div>
						<div class="title">Number of Users recieving Email upon UPS activity  </div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="info-box orange-bg">
						<a href = "sersmsdb.php"><i class="fa fa- fa-mobile fa-5x"></i></a>
						<div class="count"><?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass123');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
$result = mysqli_query($con,"SELECT * FROM Serversms");
$num_rows = mysqli_num_rows($result);

echo "$num_rows ";
mysqli_close($con);
?></div>
						<div class="title">Number of Users recieving SMS on Server Failure in Department</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<a href = "serveremail-db.php"><i class="fa fa-envelope fa-5x"></i></a>
						<div class="count"><?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass123');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
$result = mysqli_query($con,"SELECT * FROM Serveremail");
$num_rows = mysqli_num_rows($result);

echo "$num_rows ";
mysqli_close($con);
?></div>
						<div class="title"> Number of Users recieving Email on Server Failure in Department </div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
	
		</div><!--/.row--> 
</div>

<div id="section2" class="container-fluid">
<div class = "row">
<div class = "col-md-12 col-lg-12">
<div class = "well">
<?php
// full path to text file
define("TEXT_FILE", "speedtest.log");
// number of lines to read from the end of file
define("LINES_COUNT", 10);


function read_file($file, $lines) {
    //global $fsize;
    $handle = fopen($file, "r");
    $linecounter = $lines;
    $pos = -2;
    $beginning = false;
    $text = array();
    while ($linecounter > 0) {
        $t = " ";
        while ($t != "\n") {
            if(fseek($handle, $pos, SEEK_END) == -1) {
                $beginning = true; 
                break; 
            }
            $t = fgetc($handle);
            $pos --;
        }
        $linecounter --;
        if ($beginning) {
            rewind($handle);
        }
        $text[$lines-$linecounter-1] = fgets($handle);
        if ($beginning) break;
    }
    fclose ($handle);
    return array_reverse($text);
}

$fsize = round(filesize(TEXT_FILE)/1024/1024,2);

$lines = read_file(TEXT_FILE, LINES_COUNT);
$i = 0;
foreach ($lines as $line) {
if($i == 0)
{$date0 = substr($line,0,16); 
  $down0 = substr($line,24,4);
  $up0 = substr($line,30,4);
    }
elseif($i == 1)
{$date1 = substr($line,0,16); 
  $down1 = substr($line,24,4);
  $up1 = substr($line,30,4);
    }
elseif($i == 2)
{$date2 = substr($line,0,16); 
  $down2 = substr($line,24,4);
  $up2 = substr($line,30,4);
    }
elseif($i == 3)
{$date3 = substr($line,0,16); 
  $down3 = substr($line,24,4);
  $up3 = substr($line,30,4);
    }
elseif($i == 4)
{$date4 = substr($line,0,16); 
  $down4 = substr($line,24,4);
  $up4 = substr($line,30,4);
    }
elseif($i == 5)
{$date5 = substr($line,0,16); 
  $down5 = substr($line,24,4);
  $up5 = substr($line,30,4);
    }
elseif($i == 6)
{$date6 = substr($line,0,16); 
  $down6 = substr($line,24,4);
  $up6 = substr($line,30,4);
    }
elseif($i == 7)
{$date7 = substr($line,0,16); 
  $down7 = substr($line,24,4);
  $up7 = substr($line,30,4);
    }
elseif($i == 8)
{$date8 = substr($line,0,16); 
  $down8 = substr($line,24,4);
  $up8 = substr($line,30,4);
    }
elseif($i == 9)
{$date9 = substr($line,0,16); 
  $down9 = substr($line,24,4);
  $up9 = substr($line,30,4);
    }
$i++;

}

?>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'msline',
    renderAt: 'chart-container',
    width: '1200',
    height: '500',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Upload-Download Status",
            "subCaption": "DESE Department",
            "captionFontSize": "14",
            "subcaptionFontSize": "14",
            "subcaptionFontBold": "0",
            "paletteColors": "#0075c2,#1aaf5d",
            "bgcolor": "#ffffff",
            "showBorder": "0",
            "showShadow": "0",
            "showCanvasBorder": "0",
            "usePlotGradientColor": "0",
            "legendBorderAlpha": "0",
            "legendShadow": "0",
            "showAxisLines": "0",
            "showAlternateHGridColor": "0",
            "divlineThickness": "1",
            "divLineIsDashed": "1",
            "divLineDashLen": "1",
            "divLineGapLen": "1",
            "xAxisName": "Date",
            "yAxisName" : "MBps",
            "showValues": "0"
        },

        "categories": [{
            "category": [{
                "label": "<?php echo $date0 ?>"
            },
           {
                "label": "<?php echo $date1 ?>"
            }, {
                "label": "<?php echo $date2 ?>"
            },  {
                "label": "<?php echo $date3 ?>"
            }, {
                "label": "<?php echo $date4 ?>"
            }, {
                "label": "<?php echo $date5 ?>"
            }, {
                "label": "<?php echo $date6 ?>"
            },
 {
                "label": "<?php echo $date7 ?>"
            },
 {
                "label": "<?php echo $date8 ?>"
            },
 {
                "label": "<?php echo $date9 ?>"
            },]
        }],
        "dataset": [{
            "seriesname": "Download Speed",
            "data": [{
                "value": "<?php echo $down0 ?>"
            }, {
                "value": "<?php echo $down1 ?>"
            }, {
                "value": "<?php echo $down2 ?>"
            }, {
                "value": "<?php echo $down3 ?>"
            }, {
                "value": "<?php echo $down4 ?>"
            }, {
                "value": "<?php echo $down5 ?>"
            }, {
                "value": "<?php echo $down6 ?>"
            },
{
                "value": "<?php echo $down7 ?>"
            },
{
                "value": "<?php echo $down8 ?>"
            },
{
                "value": "<?php echo $down9 ?>"
            },]
        }, {
            "seriesname": "Upload Speed",
            "data": [{
                "value": "<?php echo $up0 ?>"
            }, {
                "value": "<?php echo $up1 ?>"
            }, {
                "value": "<?php echo $up2 ?>"
            }, {
                "value": "<?php echo $up3 ?>"
            }, {
                "value": "<?php echo $up4 ?>"
            }, {
                "value": "<?php echo $up5 ?>"
            }, {
                "value": "<?php echo $up6 ?>"
            },
{
                "value": "<?php echo $up7 ?>"
            },
{
                "value": "<?php echo $up8 ?>"
            },
{
                "value": "<?php echo $up9 ?>"
            },]
        }],
        "trendlines": [{
            "line": [{
                "startvalue": "<?php $a = ($up0+$up1+$up2+$up3+$up4+$up5+$up6+$up7+$up8+$up9)/10; echo $a ?>",
                "color": "#6baa01",
                "valueOnRight": "1",
                "displayvalue": "Average Upload Speed"

            }],
 "line2": [{
                "startvalue": "<?php $b = ($down0+$down1+$down2+$down3+$down4+$down5+$down6+$down7+$down8+$down9)/10; echo $b ?>",
                "color": "#6baa02",
                "valueOnRight": "1",
                "displayvalue": "Average Download Speed"
}]

        }]
    }
}
);
    fusioncharts.render();
});
</script>

<body>
  <div id="chart-container">FusionCharts XT will load here!</div>
</body>

</div>
</div>
</div>
<div class= "row">
			</div><!--/.info-box-->			
				</div><!--/.col-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
                                                <i class="fa fa- fa-globe fa-5x"></i>
					        <div class="count">
<?php
define("TEXT_FILE1", "speedlog.txt");
define("LINES_COUNT1", 2);


function read_filei($filei, $linesi) {
    $handlei = fopen($filei, "r");
    $linecounteri = $linesi;
    $posi = -2;
    $beginningi = false;
    $texti = array();
    while ($linecounteri > 0) {
        $ti = " ";
        while ($ti != "\n") {
            if(fseek($handlei, $posi, SEEK_END) == -1) {
                $beginningi = true; 
                break; 
            }
            $ti = fgetc($handlei);
            $posi --;
        }
        $linecounteri --;
        if ($beginningi) {
            rewind($handlei);
        }
        $texti[$linesi-$linecounteri-1] = fgets($handlei);
        if ($beginningi) break;
    }
    fclose ($handlei);
    return array_reverse($texti);
}

$fsizei = round(filesize(TEXT_FILE1)/1024/1024,2);

$linesi = read_file(TEXT_FILE1, LINES_COUNT1);
$j=0;
foreach ($linesi as $linei)
{
?>
  <center> <?php if ($j == 1) {echo "LAN speed:". substr($linei,1,8 );} ?></center> 
<?php
$j++;
}

?>
</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
	 </div>
 					</div><!--/.info-box-->			
				</div><!--/.col-->
				
	</div>   
</div>

<div id="section3" class="container-fluid">
<div class = "row">
<div class = "col-lg-6 col-md-6">
<?php

$file = "random.txt";
$content = file_get_contents($file);
$arr = explode(" ", $content);

?> 

<html>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'pie2d',
    renderAt: 'chart-container1',
    width: '600',
    height: '600',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Statistics for Interface",
            "subCaption": "Total Packets",
            "numberPrefix": "Packets",
            "showPercentValues": "1",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            "animateClockwise": "1",
            "theme": "fint"
        },
        "data": [ {
            "label": "Total IP Packets",
            "value": "<?php echo $arr[0]; ?>"
        }, {
            "label": "Total TCP Packets",
            "value": "<?php echo $arr[3]; ?>"
        }, {
            "label": "Total UDP Packets",
            "value": "<?php echo $arr[4]; ?>"
        },
  {
            "label": "Total ICMP Packets",
            "value": "<?php echo $arr[5]; ?>"
        },
{
            "label": "Total Other IP Packets",
            "value": "<?php echo $arr[6]; ?>"
        },
{
            "label": "Total Broadcast Packets",
            "value": "<?php echo $arr[7]; ?>"
        }] 
    },
    "events": {
      "rendered" : function(eventObj, argObject){
        var chartRef = eventObj.sender;
        console.log("test"); 
      
    },

    'beforeRender': function(eventObj, args) {
      // Form controllers div
      var controls = document.createElement('div'),
        chartContainer = args.container;

      if(!document.getElementById("controllers")) {

        chartContainer.parentNode.insertBefore(controls, chartContainer.nextSibling);

        var btnResize = document.getElementById('change');
        btnResize.addEventListener("click",  function() {
          var chartRef = eventObj.sender;
          chartRef.render();
        });
      }
    }
  }
}
);
    fusioncharts.render();
});
</script>

<body>
  <div id="chart-container1">FusionCharts XT will load here!</div>
</body>
</div>

<div class = "col-lg-6 col-md-6">
<?php
$file1 = "random.txt";
$content1 = file_get_contents($file1);
$arr1 = explode(" ", $content1);

?>

<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'doughnut2d',
    renderAt: 'chart-container2',
    width: '600',
    height: '600',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "IP Packet Monitoring on System",
            "subCaption": "Incoming - Outgoing IP packets on System",
            "numberPrefix": "Packets ",
            "startingAngle": "310",
            "decimals": "0",
            "defaultCenterLabel": "Total Number of Packets: <?php echo $arr1[0]; ?>",
            "centerLabel": "$label Packet : $value",
            "useDataPlotColorForLabels": "1",
            "theme": "fint"
        },
        "data": [{
            "label": "Outgoing",
            "value": "<?php echo $arr1[16]; ?>"
        }, {
            "label": "Incoming",
            "value": "<?php echo $arr1[9]; ?>"
        }]
    },
    "events": {
      "rendered" : function(eventObj1, argObject1){
        var chartRef1 = eventObj1.sender;
        console.log("test"); 
      
    },

    'beforeRender': function(eventObj1, args1) {
      // Form controllers div
      var controls1 = document.createElement('div'),
        chartContainer = args1.container;

      if(!document.getElementById1("controllers1")) {

        chartContainer.parentNode.insertBefore(controls1, chartContainer.nextSibling);

        var btnResize1 = document.getElementById('change');
        btnResize1.addEventListener("click",  function() {
          var chartRef1 = eventObj1.sender;
          chartRef1.render();
        });
      }
    }
  }
}
);
    fusioncharts.render();
});
</script>

<br><br><br>


   
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
