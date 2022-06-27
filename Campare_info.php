<?php
$title="Camapare Cars";
include('header1.php');
include('navi.php');

?></br></br></br></br>
<?php
$Car1=$_REQUEST['car1'];
$Car2=$_REQUEST['car2'];
 $q="select * from product_master where Pro_id=$Car1";
 $q1="select * from product_master where Pro_id=$Car2";
 $c=mysql_query($q);
 $c1=mysql_query($q1);

?>


	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
	
    <section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
          <?php while($r=mysql_fetch_array($c)){ ?>
           <?php while($r1=mysql_fetch_array($c1)){ ?>
                                     
                 <table align="center" class="table table-striped">
		           <tr align="center">
                     <td><img src="admin/img/car/<?php echo $r['Pro_img']; ?>" height="200" width="200"/></br></br><b style="font-family:bubblegum-sans; font-size:30px"><?php echo $r['Pro_name']; ?></b></td>
                     <td></td>
                     <td><img src="admin/img/car/<?php echo $r1['Pro_img']; ?>" height="200" width="200"/></br></br><b style="font-family:bubblegum-sans; font-size:30px"><?php echo $r1['Pro_name']; ?></b></td>
                  </tr>
                  </table>
                  
                 <table align="center" class="table table-striped showhide">
                  <tr align="center" class="success">
                    <td><h4><strong>Performance</strong></h4></td>
                  </tr>
                  </table>
                  <table align="center" class="table table-striped slidediv">
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_engn_des']; ?></strong></td>
                    <td>Engine Description</td>
                    <td class="active"><strong><?php echo $r1['Pro_engn_des']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_engn_dsplsmt']; ?></strong></td>
                    <td>Engine Displacement</td>
                    <td class="active"><strong><?php echo $r1['Pro_engn_dsplsmt']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_Torque']; ?></strong></td>
                    <td>Torque</td>
                    <td class="active"><strong><?php echo $r1['Pro_Torque']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_gear']; ?></strong></td>
                    <td>No. of Gears</td>
                    <td class="active"><strong><?php echo $r1['Pro_gear']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_fueltype']; ?></strong></td>
                    <td>Fuel type</td>
                    <td class="active"><strong><?php echo $r1['Pro_fueltype']; ?></strong></td>
                  </tr>
                  </table>
                  </div>
                  <!-- Perfomance part over -->
                  
                  <table align="center" class="table table-striped showhide1">
                  <tr align="center" class="success">
                    <td><h4><strong>Capacity</strong></h4></td>
                  </tr>
                  </table>
                  <table align="center" class="table table-striped slidediv1">
                  <tr align="center">
                    <td width="450" class="active"><strong><?php echo $r['Pro_seat']; ?></strong></td>
                    <td width="220">Seating Capacity</td>
                    <td class="active"><strong><?php echo $r1['Pro_seat']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_length']; ?>mm</strong></td>
                    <td>length</td>
                    <td class="active"><strong><?php echo $r1['Pro_length']; ?>mm</strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_width']; ?>mm</strong></td>
                    <td>width</td>
                    <td class="active"><strong><?php echo $r1['Pro_width']; ?>mm</strong></td>
                  </tr>
                  </table>
                  </div>
                  <!-- Capacity part over -->
                  
                  <table align="center" class="table table-striped showhide2">
                  <tr align="center" class="success">
                    <td><h4><strong>Comfort</strong></h4></td>
                  </tr>
                  </table>
                  <table align="center" class="table table-striped slidediv2">
                  <tr align="center">
                    <td width="450" class="active"><strong><?php if($r['Pro_AC'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_AC'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td width="220">Air Conditioner</td>
                    <td class="active"><strong><?php if($r1['Pro_AC'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_AC'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_pwr_str'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_pwr_str'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Power Steering</td>
                    <td class="active"><strong><?php if($r1['Pro_pwr_str'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_pwr_str'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php echo $r['Pro_trans_typ']; ?></strong></td>
                    <td>Transmission Type</td>
                    <td class="active"><strong><?php echo $r1['Pro_trans_typ']; ?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_GPS'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_GPS'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Navigation System</td>
                    <td class="active"><strong><?php if($r1['Pro_GPS'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_GPS'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_plyr'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_plyr'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Music PLayer</td>
                    <td class="active"><strong><?php if($r1['Pro_plyr'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_plyr'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  </table>
                  </div>
                  <!-- Comfort part over -->
                  
                  <table align="center" class="table table-striped showhide3">
                  <tr align="center" class="success">
                    <td><h4><strong>Safety</strong></h4></td>
                  </tr>
                  </table>
                  <table align="center" class="table table-striped slidediv3">
                  <tr align="center">
                    <td width="450" class="active"><strong><?php if($r['Pro_parksens'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_parksens'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td width="220">Parking Sensore</td>
                    <td class="active"><strong><?php if($r1['Pro_parksens'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_parksens'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_cntrllok'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_cntrllok'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Central locking</td>
                    <td class="active"><strong><?php if($r1['Pro_cntrllok'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_cntrllok'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_ABS'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_ABS'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Driver Airbag</td>
                    <td class="active"><strong><?php if($r1['Pro_ABS'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_ABS'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="center">
                    <td class="active"><strong><?php if($r['Pro_rearcam'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_rearcam'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                    <td>Rear Camera</td>
                    <td class="active"><strong><?php if($r1['Pro_rearcam'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r1['Pro_rearcam'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <!-- Safety part over -->
                  </table>
				  </div>
				  <?php } ?><?php } ?>
                   <div class="clear"></div>
                
		</section><!--/ .holder-->
		
		<!-- - - - - - - - - - - - end Holder - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - - Bottom Sidebar - - - - - - - - - - - - - - - - -->	


		<!-- - - - - - - - - - - - - end Bottom Sidebar - - - - - - - - - - - - - - - -->	

	</section><!--/ .main -->

	<!-- - - - - - - - - - - - - end Main - - - - - - - - - - - - - - - - -->			

<script>
function fillstate(country)
{
	//alert('state');
	if(document.getElementById('country').value!=""){
		
		Categoryid =document.getElementById('country').value;

		var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					//alert(xmlhttp.responseText);
				document.getElementById("states").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","fetchstate.php?Category_id="+Categoryid,true);
			xmlhttp.send();
			
				}
}


function fillbike(brand)
{
	//alert('state');
	if(document.getElementById('brand').value!=""){
		
		Categoryid =document.getElementById('brand').value;

		var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					//alert(xmlhttp.responseText);
				document.getElementById("bike").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","fetchstate.php?Category_id="+Categoryid,true);
			xmlhttp.send();
				}
}



</script>
<script type="text/javascript">
$(function() {
$('.showhide').click(function() {
$(".slidediv").slideToggle();
});
});
</script>
<script type="text/javascript">
$(function() {
$('.showhide1').click(function() {
$(".slidediv1").slideToggle();
});
});
</script>
<script type="text/javascript">
$(function() {
$('.showhide2').click(function() {
$(".slidediv2").slideToggle();
});
});
</script>
<script type="text/javascript">
$(function() {
$('.showhide3').click(function() {
$(".slidediv3").slideToggle();
});
});
</script>



<?php
include('footer1.php');
?>