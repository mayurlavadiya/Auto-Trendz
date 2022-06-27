<?php
$title="Bike";
include('header1.php');
include('navi.php');

?>
</br></br></br></br>
<?php
$sub_id=$_REQUEST['id'];
 $q="select * from product_master where SubCat_id=$sub_id";
 $c=mysql_query($q);

?>
	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
		
	<section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix">
			
            <div>	
            <table>
            	<tr><?php while($r=mysql_fetch_array($c)){ ?>
                <td><a href="Bike_info.php?bike=<?php echo $r['Pro_id']; ?>"><img src="admin/img/car/<?php echo $r['Pro_img']; ?>" height="200" width="200"/><br/><b><?php echo $r['Pro_name'];?></b></a>
                </td>
                <td  width="80">&nbsp;</td><?php } ?>
                </tr>
            </table>
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