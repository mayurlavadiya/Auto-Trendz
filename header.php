<?php
session_start(); 
if(isset($_POST['btnok']))
{
	$un=$_POST['usnm'];
	$pw=$_POST['pswd'];
	include "config.php";
	$q="select * from register_master";
	$c=mysql_query($q);
	$f=0;
	while($r=mysql_fetch_array($c))		
	{
		if($un==$r['Username'] && $pw==$r['Password'])
		{
			$f=1;
			break;
		}
	}
	if($f==1)
	{
		$_SESSION['us']=$un;
		?>
        <script>
			window.location="home.php";
		</script>
	<?php
    }
	else
	{
		?>
        <script>
			alert("Invalid Username password");
		</script>
        <?php
	}
}
?>

<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title> Auto Trendz | <?php echo $title; ?></title>
	<link rel="icon" href="favicon/AT.png">

	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/mediaelementplayer.css" media="screen" />
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
   
    
    
	
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen" />	
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
	<!-- HTML5 SHIV + DETECT TOUCH EVENTS -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body class="color-1 h-style-1 text-1">
	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	
	<header id="header">
		
		<div class="container">
			
			<!-- - - - - - - - - - - - Logo - - - - - - - - - - - - - -->	
			
			<a href="index.php" id="logo">
                <img src="favicon/Sample.jpg" />
			</a><!--/ #logo-->	
			
            <h6 align="right" style="color:#e5e1d8; font-family: 'Over the Rainbow', cursive; font-size: 20px;"> 
              
<form class="form-inline" role="form" method="post" enctype="multipart/form-data">
  <div class="form-group">
    
    <input type="text" name="usnm" required class="form-control" placeholder="Enter Username">
  </div>  
  <div class="form-group">
    
    <input type="password" name="pswd" required class="form-control" placeholder="Enter Password">
  </div>
  
  <button type="submit" name="btnok" class="btn btn-info">&nbsp; Login &nbsp;</button>
</form>
    <span style="color:#e5e1d8; font-family: 'Over the Rainbow', cursive; font-size: 15px;"><a href="register.php" >For Register click Here</a></span>
</h6>


			<!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->
<?php
function login()
{
if(!isset($_SESSION['us']))
{
	?>
    <script>
	  alert("Please Login First....");
	</script>
    <?php
} }
?>
