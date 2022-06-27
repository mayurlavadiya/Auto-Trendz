<?php
$title="Bike Information";
include('header1.php');
include('navi.php');

?></br></br></br></br>
<?php
$P_id=$_REQUEST['bike'];
 $q="select * from product_master where Pro_id=$P_id";
 $c=mysql_query($q);

?>


	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
	
    <section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
          <?php while($r=mysql_fetch_array($c)){ ?>
		  <img src="admin/img/car/<?php echo $r['Pro_img']; ?>" height="200" width="200"/></br></br><b style="font-family:bubblegum-sans; font-size:30px"><?php echo $r['Pro_name']; ?></b>
          <div>
                 <table align="center" class="table table-striped">
                  <tr align="left" class="success">
                    <td colspan="2"><h4><strong>Specification</strong></h4></td>
                  </tr>
                  <tr align="left">
                    <td width="500">Engine Displacement </td>
                    <td class="active"><strong><?php echo $r['Pro_engn_dsplsmt']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>length</td>
                    <td class="active"><strong><?php echo $r['Pro_length']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>width</td>
                    <td class="active"><strong><?php echo $r['Pro_width']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>No. of Gears</td>
                    <td class="active"><strong><?php echo $r['Pro_gear']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Trasmission Type</td>
                    <td class="active"><strong><?php echo $r['Pro_trans_typ']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Fuel Capacity  (in Litres)</td>
                    <td class="active"><strong><?php echo $r['Pro_fuelcap']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Speedo Meter</td>
                    <td class="active"><strong><?php echo $r['Pro_spdmetr']; ?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Electric Start</td>
                    <td class="active"><strong><?php if($r['Pro_elestrt'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Pro_elestrt'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Trip Meter</td>
                    <td class="active"><strong><?php if($r['Prob_tripmetr'] == "Yes"){echo '<span style="color:green;" class="glyphicon glyphicon-ok">';}elseif($r['Prob_tripmetr'] == "No"){echo '<span style="color:red;" class="glyphicon glyphicon-remove">';}?></strong></td>
                  </tr>
                  <tr align="left">
                    <td>Price</td>
                    <td class="active"><strong><?php echo $r['Pro_price']; ?></strong></td>
                  </tr>
                </table><?php } ?>
                   <div class="clear"></div>
                
		</section><!--/ .holder-->
		
		<!-- - - - - - - - - - - - end Holder - - - - - - - - - - - - - -->

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



<?php
include('footer1.php');
?>