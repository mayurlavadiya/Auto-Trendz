<?php session_start();
	
include "config.php";	

		$Category = $_REQUEST['Category_id'];
		$_SESSION['ct']=$Category;
		
	$q= "select SubCat_id,Pro_id,Pro_name from product_master where SubCat_id ='".$Category."' ";
	$c= mysql_query($q);
	
	$string = "<select name='states' id='states'>
				<option value=''>-Select Model-</option>";
		      while($r= mysql_fetch_array($c)){
		$string.= "<option value=".$r['Pro_id'].">".$r['Pro_name']."</option>  ";
               }
$string .="</select>";
echo $string;
?>