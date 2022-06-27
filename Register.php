<?php
$title="Register";  
 include('header.php');
 include('navi.php');
 
 
?>
</br>
</br>
</br>
<?php
	if(isset($_POST['signup']))
	{
		$fsname=$_POST['fsnm'];
		$lsname=$_POST['lsnm'];
		$usname=$_POST['usnm'];
		$psword=$_POST['pswd'];
		$email=$_POST['eml'];
		$adres=$_POST['adrs'];
		$gen=$_POST['Gender'];
		$contact=$_POST['cno'];
		$stat=$_POST['state'];
		$cty=$_POST['city'];
		$zipc=$_POST['zc'];		
		$imup=$_FILES['im']['name'];
		
		include "config.php";
		
		$ck=explode(".",$imup);
	      if($ck[1]=="jpg" || $ck[1]=="bmp" || $ck[1]=="png")
	      {
	  	     move_uploaded_file($_FILES['im']['tmp_name'],"img/user/".$imup);
				
		      $q="insert into register_master(First_name,Last_name,Username,Password,Email_id,Address,Gender,Contact_no,State,City,Zip_code,Image)values('".$fsname."','".$lsname."','".$usname."','".$psword."','".$email."','".$adres."','".$gen."','".$contact."','".$stat."','".$cty."','".$zipc."','".$imup."')";			 
			 $c=mysql_query($q);
				if($c)
		   		{
			  ?>
<script>
				     alert("You have Register Successfully");
					 window.location="index.php";
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
		 else
		 { 
		       ?>
<script>
			  alert("invalid image please select only jpg bmp png");
		 	</script>
<?php
	      }
		
	}  
  
  ?>

<br/>
<br/>
<br/>
<br/>
<br/>
<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->

<section class="container">

<!-- - - - - - - - - - - - - Holder - - - - - - - - - - - - - - -->
<section class="holder clearfix">
<h5 style="color:#000000; font-family: 'Over the Rainbow', cursive; font-size: 20px;">&nbsp;&nbsp;&nbsp; Register User</h5>
</br>
<div class="one-third column">
<div class="widget widget_recent_entries">
  <form name="frmabc" role="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <h4>
        <label class="label label-default">First Name :</label>
      </h4>
      <input type="text" name="fsnm"  required class="form-control" placeholder="Enter First Name" onBlur="return Fname();">
      <label id="fsnm"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Last Name :</label>
      </h4>
      <input type="text" name="lsnm" onBlur="return Lname();" required class="form-control" placeholder="Enter Last Name">
      <label id="lsnm"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Username :</label>
      </h4>
      <input type="text" name="usnm" onBlur="return Usnm();" required class="form-control" placeholder="Enter Username">
      <label id="usnm"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Password :</label>
      </h4>
      <input type="password" name="pswd" required class="form-control" placeholder="Password">
      <label id="psmsg"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Confirm Password :</label>
      </h4>
      <input type="password" name="cpswd" onBlur="return abc();" required class="form-control" placeholder="re-type Password">
      <label id="cpsmsg"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">E-mail Address :</label>
      </h4>
      <input type="email" name="eml" onBlur="return Email();" required class="form-control" placeholder="Enter E-mail Address">
      <label id="msgemail"></label>    
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Address :</label>
      </h4>
      <textarea name="adrs" onBlur="return Add();" required class="form-control" placeholder="Enter Address" type="text"></textarea>
      <label id="msgadd"></label> 
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Gender :</label>
      </h4>
      <select name="Gender" onBlur="return gen();" required class="form-control">
        <option>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <label id="msggen"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Contact No. :</label>
      </h4>
      <input name="cno" type="text" required class="form-control" placeholder="Enter Number" onBlur="return number();" maxlength="10" />
      <label id="msgphone"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">State :</label>
      </h4>
      <input type="text" name="state" onBlur="return State();" required class="form-control" placeholder="Enter State" >
      <label id="states"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">City :</label>
      </h4>
      <input type="text" name="city" onBlur="return City();" required class="form-control" placeholder="Enter City" >
      <label id="msgcity"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">Zip Code :</label>
      </h4>
      <input name="zc" type="text" required class="form-control" placeholder="Enter Zip Code" onBlur="return zipcode();" maxlength="6" >
      <label id="msgzip"></label>
    </div>
    <div class="form-group">
      <h4>
        <label class="label label-default">File input :</label>
      </h4>
      <input type="file" name="im">
    </div>
    <button type="submit" name="signup" onBlur="rerun abc();" class="btn btn-primary">Sign Up</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-danger">Cancel</button>
  </form>
</div>
</section>
</section>
<?php
 
 include('footer1.php');

?>
<script type="text/javascript">

function Fname()
{
	name=document.frmabc.fsnm.value;
	var lnname = name.length;
	
  if (name=="") 
        {
            document.getElementById("fsnm").innerHTML = "Please Enter First Name";
            status_chk = false;
        }
        
        else 
		{

            if (!isNaN(name))
             {
                document.getElementById("fsnm").innerHTML = "Please Enter A Character";
                status_chk = false;
             }
            else 
            {
                document.getElementById("fsnm").innerHTML = "";
				
            }
        }
		
	
	}
	
function Lname()
{
	name=document.frmabc.lsnm.value;
	var lnname = name.length;
	
  if (name=="") 
        {
            document.getElementById("lsnm").innerHTML = "Please Enter Last Name";
            status_chk = false;
        }
        
        else 
		{

            if (!isNaN(name))
             {
                document.getElementById("lsnm").innerHTML = "Please Enter A Character";
                status_chk = false;
             }
            else 
            {
                document.getElementById("lsnm").innerHTML = "";
				
            }
        }
		
	
	}

function Usnm()
{
	name=document.frmabc.lsnm.value;
	var lnname = name.length;
	
  if (name=="") 
        {
            document.getElementById("usnm").innerHTML = "Please Enter Username";
            status_chk = false;
        }
        
        else 
		{

            if (!isNaN(name))
             {
                document.getElementById("usnm").innerHTML = "Please Enter A Character";
                status_chk = false;
             }
			 else if (lnname < 6)
             {
                document.getElementById("usnm").innerHTML = "Insert Minimum 6 character ";
                status_chk = false;
             }
            else 
            {
                document.getElementById("usnm").innerHTML = "";
				
            }
        }
		
	
	}
	
function Email()
{
	var emailID = document.frmabc.eml.value;
		
	
	if (emailID == "") 
        {
                document.getElementById("msgemail").innerHTML = "Please Enter Email Id ";
//                emailID.focus();
                status_chk = false;
        }
        else if (document.frmabc.eml.value.length > 0) 
        {
            var i = document.frmabc.eml.value.indexOf("@");
            var j = document.frmabc.eml.value.indexOf(".", i);
            var k = document.frmabc.eml.value.indexOf(",");
            var kk = document.frmabc.eml.value.indexOf(" ");
            var jj = document.frmabc.eml.value.lastIndexOf(".") + 1;
            var len = document.frmabc.eml.value.length;
            
            if ((i > 0) && (j > (1 + 1)) && (k == -1) && (kk == -1) && (len - jj >= 2) && (len - jj <= 3)) 
            {
                 document.getElementById("msgemail").innerHTML = " ";
           	}
                else
                 {
                    document.getElementById("msgemail").innerHTML = "Please Enter correct Email";
                    status_chk = false;
                 }
          }
            else
            {
                document.getElementById("msgemail").innerHTML = " ";
                
            }
  	
	}
	
function Add()
{
	var add = document.frmabc.adrs.value;
	
	if(add=="")
		{
			document.getElementById("msgadd").innerHTML = "Please Enter address";
            status_chk = false;
        }
		else 
        {
            document.getElementById("msgadd").innerHTML = "";

        }
	
	}

function gen()
{
	var sex = document.frmabc.Gender.value;
	
	if(sex=="Select Gender")
		{
			document.getElementById("msggen").innerHTML = "Please Select Your Gender";
            status_chk = false;
        }
		else 
        {
            document.getElementById("msggen").innerHTML = "";

        }
	
	}
	
function abc()
{
	var pswd = document.frmabc.pswd.value;
	var cpswd = document.frmabc.cpswd.value;
	
if (pswd == "") 
        {
            document.getElementById("psmsg").innerHTML = "Please Enter Password";
            status_chk = false;
        }
        else 
        {
            document.getElementById("psmsg").innerHTML = "";

        }
        if (cpswd == "") 
        {
            document.getElementById("cpsmsg").innerHTML = "Please ReEnter password";
            status_chk = false;
        }
        else 
        {
            document.getElementById("cpsmsg").innerHTML = "";

            if (pswd == cpswd) 
            {
                document.getElementById("psmsg").innerHTML = "";

            }
            else
             {
                document.getElementById("cpsmsg").innerHTML = "Confirm Password Does not match";
                status_chk = false;
            }
        }
   
}


function number()
{
	var phone = document.frmabc.cno.value;
	var lnphone = phone.length;
	
	if (phone=="") 
        {
            document.getElementById("msgphone").innerHTML = "Please Enter Contact Number";
            status_chk = false;
        }
        
        else 
		{

            if (isNaN(phone))
             {
                document.getElementById("msgphone").innerHTML = "Please Enter Valid Contact Number";
                status_chk = false;
             }

            else if (lnphone != 10)
             {
                document.getElementById("msgphone").innerHTML = "Please Enter 10 Digit";
                status_chk = false;
             }
            else 
            {
                document.getElementById("msgphone").innerHTML = "";
				
            }
        }
		
	
	}
	
function State()
{
	var stat = document.frmabc.state.value;
	
	if(stat=="")
		{
			document.getElementById("states").innerHTML = "Please Enter State Name";
            status_chk = false;
        }
		else 
        {
            document.getElementById("states").innerHTML = "";

        }
	}
	
function City()
{
	var cty = document.frmabc.city.value;
	
	if(cty=="")
		{
			document.getElementById("msgcity").innerHTML = "Please Enter City Name";
            status_chk = false;
        }
		else 
        {
            document.getElementById("msgcity").innerHTML = "";

        }
	}


function zipcode()
{
	var phone = document.frmabc.zc.value;
	var lnphone = phone.length;
	
	if (phone=="") 
        {
            document.getElementById("msgzip").innerHTML = "Please Enter ZipCode";
            status_chk = false;
        }
        
        else 
		{

            if (isNaN(phone))
             {
                document.getElementById("msgzip").innerHTML = "Please Enter Valid Zipcode";
                status_chk = false;
             }

            else if (lnphone != 6)
             {
                document.getElementById("msgzip").innerHTML = "Please Enter 6 Digit";
                status_chk = false;
             }
            else 
            {
                document.getElementById("msgzip").innerHTML = "";
				
            }
        }
}

</script>