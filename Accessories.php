<?php
$title="Accessories";
include('header1.php');
include('navi.php');

?>
</br></br></br></br>
<?php
 $cat_id=$_REQUEST['id'];
 $sbac_id=$_REQUEST['ab'];
 $q="select * from accessories_master where Cat_id=$cat_id and Accsub_id=$sbac_id";
 $c=mysql_query($q);

?></br></br></br>
	<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->		
		
	<section class="container">	
		<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - --> 			
		<section class="holder clearfix">
			
            <div>	
            <table>
            	<tr>
				<?php while($r=mysql_fetch_array($c)){ ?>
                <td><a href="Accessories_info.php?id=<?php echo $r['Acc_id']; ?>""><img src="admin/img/car/<?php echo $r['Acc_img']; ?>" height="200" width="200"/><br/><b><?php echo $r['Acc_name'];?></b></a>
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