<?php
$title="Camapare Cars";
include('header1.php');
include('navi.php');
?></br></br></br></br>
	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
		
	<section class="container">	
		
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
			<div class="one-third column">
        			<div class="bordered">
                    <form action="Campare_info.php" method="post">
                    <h2><strong>Search Car</strong></h2>
                    <label>Select 1st Car to Campare</label><br/></br>
                   <?php 
					 	$q="select * from sub_category_master where Cat_id=13";
       					$c=mysql_query($q);
					?>
					<div>
                       
					   <select  name="Car" required id="Car" onChange="fillcmp1(this.value);">
        		        <option value="">-Select Brand-</option>
						<?php while($r=mysql_fetch_array($c)){ ?>
						<option value="<?php echo $r['SubCat_id'];?>"><?php echo $r['SubCat_name'];?></option><?php }?></select><span></span><br/></br>
       			    </div>
					<div class="clear sep"></div>
					<div>
          				<select name="car1" required id="car1">
             			<option value="">-Select Car-</option></select>
        			</div>
			      </div><!--/ .bordered-->
					
				</div><!--/ .detailimg-->
            
            
            <div class="one-third column">
					<div class="bordered">
                    <h2><strong>Search Car</strong></h2>
                    <label>Select 2nd Car to Campare</label><br/></br>
                    <?php 
					 	$q="select * from sub_category_master where Cat_id=13";
       					$c=mysql_query($q);
					?>
					<div>
					   <select  name="Company" required id="Company" onChange="fillcmp2(this.value);">
        		        <option value="">-Select Brand-</option>
						<?php while($r=mysql_fetch_array($c)){ ?>
						<option value="<?php echo $r['SubCat_id'];?>"><?php echo $r['SubCat_name'];?></option><?php }?></select><span></span><br/></br>
       			    </div>
					<div class="clear sep"></div>
					<div>
          				<select name="car2" required id="car2">
             			<option value="">-Select Car-</option></select>
        			</div>  
				   </div><!--/ .bordered-->
				</div><!--/ .detailimg-->
                
                <div class="clear"></div>
                <div class="col-sm-6 col-md-7" align="center"></br>
                      <button class="btn btn-info">Search</button>
                </div>
                </form>    
            
		</section><!--/ .holder-->
        
		<!-- - - - - - - - - - - - end Holder - - - - - - - - - - - - - -->
        
	</section><!--/ .main -->

	<!-- - - - - - - - - - - - - end Main - - - - - - - - - - - - - - - - -->			




<?php
include('footer1.php');
?>

<script>
function fillcmp1(Car)
{
	//alert('state');
	if(document.getElementById('Car').value!=""){
		
		Categoryid =document.getElementById('Car').value;

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
				document.getElementById("car1").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","ajx/fetchcmp1.php?Category_id="+Categoryid,true);
			xmlhttp.send();
			
				}
}


function fillcmp2(Company)
{
	//alert('state');
	if(document.getElementById('Company').value!=""){
		
		Categoryid =document.getElementById('Company').value;

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
				document.getElementById("car2").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","ajx/fetchcmp2.php?Category_id="+Categoryid,true);
			xmlhttp.send();
				}
}



</script>
