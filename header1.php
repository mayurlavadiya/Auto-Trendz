<?php 
session_start();
if(!isset($_SESSION['us']))
{
	?>
    <script>
	alert("Please Login First");
	window.location="index.php";
	</script>
    <?php
}
?>
<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Over+the+Rainbow|Open+Sans:300,400,400italic,600,700|Arimo|Oswald|Lato|Ubuntu' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Auto Trendz | <?php echo $title; ?></title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon/AT.png" />

	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/mediaelementplayer.css" media="screen" />
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="css/slider.css" media="screen" />
    
    
	
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
               <label><?php echo $_SESSION['us']; ?> </label>
               <a href="logout.php"><button name="btnok" class="btn btn-primary">Logout</button></a>
                </h6>




			<!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->
            
