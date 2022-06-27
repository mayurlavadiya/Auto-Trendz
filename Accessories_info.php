<?php
$title="Accessories Information";
include('header1.php');
include('navi.php');


?></br></br></br></br>
<?php
$P_id=$_REQUEST['id'];
 $q="select * from accessories_master where Acc_id=$P_id";
 $c=mysql_query($q);

?>


	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
	
    <section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
          <?php while($r=mysql_fetch_array($c)){ ?>
          <div class="col-sm-6 col-md-8">
		  <table class="table table-striped">
            <tr>
              <td colspan="2"><b style="font-family:bubblegum-sans; font-size:30px"><?php echo $r['Acc_name']; ?></b></td>
              
            </tr>
            <tr align="left" class="success">
              <td colspan="2"><h4><strong>Details</strong></h4></td>
            </tr> 
            <tr>
              <td>Description</td>
              <td class="active"><strong><?php echo $r['Acc_desc']; ?></strong></td>
            </tr> 
            <tr>
              <td>Price</td>
              <td class="active"><strong><?php echo $r['Acc_price']; ?></strong></td>
            </tr>
          </table></div>
          <div><img src="admin/img/car/<?php echo $r['Acc_img']; ?>" height="200" width="200"/></div>
		  <?php } ?>
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