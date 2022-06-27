<?php 
session_start();

include "config.php";
?>

Select Type:
<?php 
		$q="select * from sub_category_master where Cat_id=14";
        $c=mysql_query($q);
?>
	<div>
		   <select  name="country" id="country" onChange="fillstate(this.value);">
                <option value="">Select Category</option>
					<?php while($r=mysql_fetch_array($c)){?>
					<option value="<?php echo $r['SubCat_id'];?>"><?php echo $r['SubCat_name'];?></option><?php }?></select>
        </div>
		<div class="clear sep"></div>
		Select Company:
		<div>
          <select name="states" id="states" onChange="fillcity(this.value);">
             <option value="">Select Subcat</option>
          </select>
        </div>
       

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



</script>

