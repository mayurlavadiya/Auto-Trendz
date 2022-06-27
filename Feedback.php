<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="#">
	<title>Auto Trendz-Feedback</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</head>
<body role="document" class="feeddback">

<?php
	if(isset($_POST['FB']))
	{
		$usname=$_POST['user_name'];
		$Email=$_POST['eml'];
		$c_no=$_POST['phone'];
		$Fidbek=$_POST['Feedback'];
		include "config.php";
		 	
		      $q="insert into feedback_master(Username,Email,phone_no,Description)values('".$usname."','".$Email."','".$c_no."','".$Fidbek."')";
			 $c=mysql_query($q);
		 	    if($c)
		   		{
			  ?>
                  <script>
				     alert("Feedback  Submited");
					 window.close();
					 window.location="Home.php";
				  </script>
               <?php
		         }
				else
		 		{
			   ?>
            	<script>
					alert("Eroorrrrrr");
				</script>
               <?php
		    	}
		   
		
		
	}  
  
  ?>
    <div align="center">
    <div class="con jumbotron" >
    <form name="frmabc" role="form" action="#" id="form1" method="post">
    <div class="form-group"> 
          <label>User name:</label>          
          <input name="user_name" value="<?php echo $_SESSION['us']; ?>" required class="form-control"/><br/>   
      </div>
          <div class="form-group">
          <label>E-mail:</label>
          <input type="email" name="eml" required class="form-control" placeholder="Enter E-mail Address">
          </div>
          <div class="form-group">
          <label>Phone number:</label>
          <input name="phone" type="text" required class="form-control" placeholder="Enter Contact No." id="Phone_ID" onBlur="return number();" maxlength="10"/><br/>  
          </div>
          <div class="form-group">
          <label>Feedback:</label>
          <textarea name="Feedback" cols="20" rows="3" placeholder="Enter Your Feedback....." required class="form-control" id="Comments_ID"></textarea><br/>   
       </div>
       <div class="form-group">
          <input type="submit" name="FB" class="btn btn-success" value="Submit" />  
          <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.close()" />  
          </div>
     </form>
   </div>
   </div>
   
 	 <!-- script put on bottom for fast execution-->
     <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
	    
    </body>
</html>

<script type="text/javascript">
function number()
{
	cno=document.frmabc.phone.value;
	number=cno.length;
	
   if (number==10)
        {
			
             }
	else {
		alert("Plese enter 10 digit..");
		}
	
	}
</script>