<?php
$title="Home";
include('header1.php');
include('navi.php');
?>
<!-- - - - - - - - - - - - - Slider - - - - - - - - - - - - - - - -->	
	
	<div class="fullwidthbanner-container">	
		
		<div class="fullwidthbanner">
			
			<ul>	

				<!-- FADE -->
                <!-- 1st Slide -->
			  <li data-transition="fade"> 										

					<img src="images/slides/Car3.jpg" height="850" width="1920" alt=""  >
				
					<div class="caption sft big_black"  data-x="20" data-y="100" data-speed="900" data-start="1300" data-easing="easeOutBack">Welocome to Auto Trendz</div>  
                    
				<div class="caption sft medium_black"  data-x="20" data-y="145" data-speed="900" data-start="1300" data-easing="easeOutBack">Start a New Way of Choosing Car</div>
                    <!--
                    <div class="caption sft small_text"  data-x="20" data-y="210" data-speed="900" data-start="1500" data-easing="easeOutBack">Write About site.</div> 
                    -->
                    
					<div class="caption sfb" data-x="20" data-y="320" data-speed="750" data-start="1900" data-easing="easeOutExpo"><a class="button dark small" href="About_us.php">About Us</a></div>
                    
				</li>
								
				<!-- SLIDEUP -->
                <!-- 2nd Slide -->
				<li data-transition="slideup" data-slotamount="7" data-thumb="images/thumbs/thumb2.jpg"> 

					<img src="images/slides/Car1.jpg" height="1800" width="3840" alt="" >
									
					<div class="caption lft big_yellow_dark_back"  data-x="20" data-y="100" data-speed="400" data-start="1300" data-easing="easeOutExpo">Whatever it takes to do</div>
					<div class="caption lft big_white_back"  data-x="20" data-y="146" data-speed="300" data-start="1550" data-easing="easeOutExpo">whatever God says</div>
                    <!--
					<div class="caption sfb medium_text"  data-x="20" data-y="240" data-speed="800" data-start="1800" data-easing="easeOutBack">Lorem ipsum dolor consectetur adipiscing</div>
					<div class="caption sfb medium_text"  data-x="20" data-y="276" data-speed="800" data-start="1800" data-easing="easeOutBack">nulla aliquet varius purus</div> -->
				</li>
				
				<!-- SLIDELEFT -->
                <!-- 3rd Slide -->
				<li data-transition="slideleft" data-slotamount="15" data-thumb="images/thumbs/thumb3.jpg"> 
					
					<img src="images/slides/Bike1.jpg" height="700" width="1200" alt="">	
					
					<div class="caption lft very_big_white"  data-x="80" data-y="300" data-speed="900" data-start="1200" data-easing="easeOutBack">choose your way</div>	
				</li>
								
				<!-- SLIDEUP -->
                <!-- 4th Slide -->
				<li data-transition="slideup" data-slotamount="15" data-thumb="images/thumbs/thumb5.jpg"> 
					
					<img src="images/slides/slide-5.jpg" alt="">
					<div class="caption lft big_yellow_dark_back"  data-x="580" data-y="165" data-speed="500" data-start="1650" data-easing="easeOutBack">Choose</div>
					<div class="caption lfr big_dark_back"  data-x="580" data-y="217" data-speed="500" data-start="2000" data-easing="easeOutBack">Click</div>
					<div class="caption lft big_yellow_dark_back"  data-x="580" data-y="269" data-speed="500" data-start="2350" data-easing="easeOutBack">Know</div>
				</li>
								
			</ul>
			
		</div><!--/ .fullwidthbanner-->	
		
	</div><!--/ .fullwidthbanner-container-->

	<!-- - - - - - - - - - - - - end Slider - - - - - - - - - - - - - - -->
	

	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
		
	<section class="container">	
		
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
			<div class="one-third column">
		      <section class="form class">
        			<div class="bordered">
                    <form action="Car_info.php" method="post">
                    <h2><strong>Search Car</strong></h2>
                    <label>Your new car at AutoTrendz</label><br/></br>
                   <?php 
					 	$q="select * from sub_category_master where Cat_id=13";
       					$c=mysql_query($q);
					?>
					<div>
					   <select  name="Car" required id="Car" onChange="fillstate(this.value);">
        		        <option value="">-Select Brand-</option>
						<?php while($r=mysql_fetch_array($c)){ ?>
						<option value="<?php echo $r['SubCat_id'];?>"><?php echo $r['SubCat_name'];?></option><?php }?></select><span></span><br/></br>
       			    </div>
					<div class="clear sep"></div>
					<div>
          				<select name="id" required id="id">
             			<option value="">-Select Car-</option></select>
        			</div>   
                    <div align="center"></br>
                      <button class="btn btn-info">Search</button>
                    </div>
                      </form>
			      </div><!--/ .bordered-->
					
				</div><!--/ .detailimg-->
                
                
                
                
                
            
            <div class="one-third column">
					<div class="bordered">
                    <form action="Bike_info.php" method="post">
                    <h2><strong>Search Bike</strong></h2>
                    <label>Your new bike at AutoTrendz</label><br/></br>
                    <?php 
					 	$q="select * from sub_category_master where Cat_id=14";
       					$c=mysql_query($q);
					?>
					<div>
					   <select  name="Company" required id="Company" onChange="fillbike(this.value);">
        		        <option value="">-Select Brand-</option>
						<?php while($r=mysql_fetch_array($c)){ ?>
						<option value="<?php echo $r['SubCat_id'];?>"><?php echo $r['SubCat_name'];?></option><?php }?></select><span></span><br/></br>
       			    </div>
					<div class="clear sep"></div>
					<div>
          				<select name="bike" required id="bike">
             			<option value="">-Select Bike-</option></select>
        			</div>   
                    <div align="center"></br>
                      <button class="btn btn-info">Search</button>
                    </div>
                      </form>
				   </div><!--/ .bordered-->
					
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
function fillstate(Car)
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
				document.getElementById("id").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","fetchstate.php?Category_id="+Categoryid,true);
			xmlhttp.send();
			
				}
}


function fillbike(Company)
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
				document.getElementById("bike").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","fetchstate.php?Category_id="+Categoryid,true);
			xmlhttp.send();
				}
}



</script>
