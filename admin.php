<?php

session_start();
if ($_SESSION['username'])
  echo "Welcome, ".$_SESSION['username']."!";
else
  header("Location: loginfirst.php");
?>
<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>ALMALIKA - WEDDING, DECOR and CATERING</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="w3.css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;09176154643 | 09477743895
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;rodel.bayan66@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <img src="assets/img/Picture11.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home">Home</a>
                                    </li>
                                    <li>
                                        <span class="fa-gears ">Services</span>
                                        <ul>
                                            <li>
                                            <a href="ordinary.php">Ordinary Occassions</a>
                                            </li>
                                            <li class="parent">
                                                <span>Menu Packages</span>
                                                <ul>
                                                    <li>
                                                        <a href="350.php">350PHP/pax</a>
                                                    </li>
                                                    <li>
                                                        <a href="450.php">450PHP/pax</a>
                                                    </li>
                                                    <li>
                                                        <a href="desserts.php">Choices for Desserts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="amenities.php">Amenities</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="order.php" class="fa-copy active">Order</span></a>
                                    </li>
                                    <li>
                                        <a href="gallery.php"><span class="fa-th ">Gallery</span></a>
                                    </li>
                                    <li>
									<span class="fa-font">About Us</span>
                                        <ul>
                                            <li>
                                                <a href="mission.php">Mission & Vision</a>
                                            </li>
                                            <li>
                                                <a href="bghistory.php">Background & History</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
								<li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
								<li class="social-facebook">
                                    <a href="http://www.facebook.com/rodele" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
<?php
$persons = array();
$info = array();
$servername = "xo4";
$username = "almalik2_service";
$password = "almalika";
$dbname = "almalik2_catering2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT customer_no, name FROM order2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
		$ctr = 1;
		$info['Customer No'] = $row["customer_no"];
		$info['Name'] = $row["name"];
		
$persons[] = $info;}
}
?>

<table id = "mytable" class="w3-table w3-striped w3-border w3-hoverable" width = "90%">
<thead>
<tr class="w3-yellow">
  <th><font class = "fontsize3">Customer No</font></th>
  <th><font class = "fontsize3">Name</font></th>
  
</tr>
</thead>
<tbody>
			<?php
			if(isset($persons)){
				foreach($persons as $p){
					echo '
						<tr class = "tablerow" onclick="myFunction(this)">
						<td class="center">'.$p['Customer No'].'</td>
						<td>'.$p['Name'].'</td>
												
				</tr>
					';
					$ctr++;
				}
			}
			
			?>
				
			</tbody>
</font>
</table>

<script>
function myFunction(x) {
	    
        var table = document.getElementById('mytable');		
		var y = table.rows[x.rowIndex].cells[0].innerHTML;
		window.location="laman.php?index=" + y; 
}
	
</script>
<div class="container">
<div class="row container margin-vert-30">
<form action="logout.php">
  <input type="submit" class="btn btn-primary pull-right col-xs-4" value="Logout" size = 30>
</form>
</div>
</div>
                                        </div>
                                    </div>
                            <!-- End Primary Panel -->
  
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Globe:</span>09176154643
                                <br>
                                <span class="fa-phone">Smart:</span>09477743895
                                <br>
                                <span class="fa-facebook">Facebook:</span>
                                <a href="http://www.facebook.com/rodele">www.facebook.com/rodele</a>
                            </p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Address -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Address</h3>
                            <p>#47 Pulong Bunga,
                                <br>Silang,
                                <br>Cavite,
                                <br>Philippines</p>
                        </div>
                        <!-- End Address -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Other Links</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-copy" href="order.php">Order</a>
                                </li>
                                <li>
                                    <a class="fa-th" href="gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a class="fa-font" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-12">
                            <p>Copyright 2016 - All Rights Reserved. | ALMALIKA - Wedding, Decor, and Catering </p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->