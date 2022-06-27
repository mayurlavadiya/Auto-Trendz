<?php
$title="Showroom"; 
include('header1.php');
include('navi.php');

?>
</br></br></br></br>
	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
		
	<section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix bordered">
			<div class="two-third column"><img style="padding-top:19px" src="admin/img/car/new-cars-in-showroom1.jpg"/></div>
            <div class="one-third column">&nbsp;</div>
                        
            <div class="one-third column">
             <div class="bordered">
            	
                    <form action="Showrooms_info.php" method="post">
                    <h2><strong>Search Showrooms</strong></h2>
                    <label>Search Showroom at AutoTrendz</label><br/></br>
                   <?php 
					 	$q="select * from category_master";
       					$c=mysql_query($q);
					?>
					<div>
					   <select  name="Catsl" required id="Catsl" onChange="fillCat(this.value);">
        		        <option value="">-Select Category-</option>
						<?php while($r=mysql_fetch_array($c)){ ?>
						<option value="<?php echo $r['Cat_id'];?>"><?php echo $r['Cat_name'];?></option><?php }?></select><br/></br>
       			    </div>
					<div>
          				<select name="Cpnysel" required id="Cpnysel" onChange="fillCpny(this.value);">
             			<option value="">-Select Company-</option></select><br/></br>
        			</div>
					<div>
          				<select name="city" required id="city">
             			<option value="">-Select City-</option></select>
        			</div>   
                    <div align="center"></br>
                      <button class="btn btn-info">Search</button>
                    </div>
                      </form>
	         
             </div>
             </div>     
            </div><!--/ .detailimg-->
				</div><!--/ .detailimg-->
                <div class="clear"></div>
                
		</section><!--/ .holder-->
		
		<!-- - - - - - - - - - - - end Holder - - - - - - - - - - - - - -->

	</section><!--/ .main -->
    <!-- - - - - - - - - - - - - end Main - - - - - - - - - - - - - - - - -->			
   




<?php
include('footer1.php');
?>
<script>
function fillCat(Catsl)
{
	//alert('Cpnysel');
	if(document.getElementById('Catsl').value!=""){
		
		Categoryid =document.getElementById('Catsl').value;

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
				document.getElementById("Cpnysel").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","ajx/fetchcpny.php?Category_id="+Categoryid,true);
			xmlhttp.send();
				}
}

function fillCpny(Cpnysel)
{
	//alert('state');
	if(document.getElementById('Cpnysel').value!=""){
		
		countryid =document.getElementById('Cpnysel').value;

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
				document.getElementById("city").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","ajx/fetchcity.php?Cpny_id="+countryid,true);
			xmlhttp.send();
			
				}
}



</script>
