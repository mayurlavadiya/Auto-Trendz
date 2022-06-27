<?php
$title="Service Information"; 
include('header1.php');
include('navi.php');

?>
</br></br></br></br>
	
 <?php
 $City_id=$_REQUEST['city'];
 $sub_id=$_REQUEST['Cpnysel'];
 $q="select * from service_master where Ser_city='$City_id' and SubCat_id=$sub_id";
 $c=mysql_query($q);
 
?>


	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
	
    <section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix"> 
			  <table align="center" class="table table-striped">
                  <tr align="left" class="success">
                    <td class="active"><strong>Name</strong></td>
                    <td class="active"><strong>Address</strong></td>
                    <td class="active"><strong>City</strong></td>
                    <td class="active"><strong>Contact No.</strong></td>
                    <td class="active"><strong>Images</strong></td>
                  </tr>
			  <?php while($r=mysql_fetch_array($c)){ ?>
                  <tr align="left" class="active">
                    <td class="active"><strong><?php echo $r['ser_name']; ?></strong></td>
                    <td class="active"><strong><?php echo $r['ser_address']; ?></strong></td>
                    <td class="active"><strong><?php echo $r['ser_city']; ?></strong></td>
                    <td class="active"><strong><?php echo $r['ser_c_no']; ?></strong></td>
                    <td class="active"><strong><img height="50" width="50" src="admin/img/car/<?php echo $r['ser_img']; ?>"/></strong></td>
                  </tr><?php } ?>
                </table>
		        
		</section><!--/ .holder-->
		
		<!-- - - - - - - - - - - - end Holder - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - - Bottom Sidebar - - - - - - - - - - - - - - - - -->	


		<!-- - - - - - - - - - - - - end Bottom Sidebar - - - - - - - - - - - - - - - -->	

	</section><!--/ .main -->

	<!-- - - - - - - - - - - - - end Main - - - - - - - - - - - - - - - - -->			
   




<?php
include('footer1.php');
?>
