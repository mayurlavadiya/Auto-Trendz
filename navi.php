<!-- - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - -->	

			<nav id="navigation" class="navigation clearfix">
            <?php 
			include "config.php";
    		    $c=mysql_query("select * from sub_category_master where Cat_id=13");
			?>

				<ul class="nav nav-pills">
					<li class="current-menu-item"><a href="home.php">Home</a></li>
					<li><a href="#">Car</a>
                        <ul>                           
						<?php while($r=mysql_fetch_array($c)){ ?>
                        <li value="<?php echo $r['SubCat_id'];?>"><a><?php echo $r['SubCat_name'];?></a> 
                            <ul> <?php
                                $cb=mysql_query("select * from subcat_master");
                                while($r1=mysql_fetch_array($cb)){ ?>
									<li value="<?php echo $r['msc_id'];?>"><a href="Car.php?id=<?php echo $r1['msc_id'];?>& ab=<?php echo $r['SubCat_id']; ?>"><?php echo $r1['msc_name'];?></a></li><?php }?>
							</ul>
                        </li><?php }?>     
                        </ul>
					</li>
					
                    
                    <li><a>Bike</a>
						<ul>                           
						<?php 
						$c=mysql_query("select * from sub_category_master where Cat_id=14");
						while($r=mysql_fetch_array($c)){ ?>
						<li value="<?php echo $r['SubCat_id'];?>"><a href="Bike.php?id=<?php echo $r['SubCat_id']; ?>"><?php echo $r['SubCat_name'];?></a>
                        </li><?php }?>
                        </ul>
					</li>
                    <li><a href="Campare.php">Compare</a>
					<li><a href="Service.php">Service</a></li>
					<li><a>Accessories</a>
						<ul>
							<li><a>Car</a>
                            	<ul>                           
								<?php 
								$c=mysql_query("select * from accsub_master where Cat_id=13");
								while($r=mysql_fetch_array($c)){ ?>
								<li value="<?php echo $r['Accsub_id'];?>"><a href="Accessories.php?id=<?php echo $r['Cat_id'];?> && ab=<?php echo $r['Accsub_id'];?>"><?php echo $r['Accsub_name'];?></a>
                        		</li><?php }?>
                        </ul>
							</li>
							<li><a>Bike</a>
                            	<ul>                           
								<?php 
								$c=mysql_query("select * from accsub_master where Cat_id=14");
								while($r=mysql_fetch_array($c)){ ?>
								<li value="<?php echo $r['Accsub_id'];?>"><a href="Accessories.php?id=<?php echo $r['Cat_id'];?> && ab=<?php echo $r['Accsub_id']; ?>"><?php echo $r['Accsub_name'];?></a>
                        		</li><?php }?>
                        		</ul>
							</li>
						</ul>
					</li>
                    
					<li><a href="Showrooms.php">Showrooms</a></li>
                    <li><a onclick="window.open('Feedback.php','FeedBack','address=no,width=700,height=600,left=2000,top=700,scrollbars=yes')"  title="Auto Trendz-Feedback" rel="nofollow">Feedback</a></li>
                    <li><a href="About_us.php">About us</a></li></ul>
                    </nav><!--/ #navigation-->

			<!-- - - - - - - - - - - - end Navigation - - - - - - - - - - - - - -->	
			
		</div><!--/ .container-->
		
	</header><!--/ #header-->
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	

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
