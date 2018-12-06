
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>update staff </title>
<link rel="stylesheet" href="public/styling.css" /> 
</head>

<body class="body">

<div class="toptop" style="align:center;">

 
<div  class="logoHolder"> 
     
		        <img  class="logo" src="public/images/lastLogo2.png"; >
				
		  </div>	
</div>
    
 
<div class="betweens"> 
 <h2> </h2>

 
</div>
	<div style="margin:0 auto;" class="navParent"> 
 

		<div  class="topnav">
                  <a class="active" href="?controller=homePage&action=adminHome">Home</a> 
                  <a  class="active" href="?controller=showAllCustomer&action=showAllCustomer">View Customer</a></li> 
		  <a  class="active" href="?controller=newService&action=insert">Add Service</a> </li>
		 <a  class="active" href="?controller=allBooking&action=allBooking">View Bookings</a></li>
                  <a  class="active" href="?controller=addStaff&action=addStaff">Add Staff</a></li>		  
		  <a  class="active" href="?controller=showAllStaff&action=showAllStaff">View Staff</a></li>		  	
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content">
<form action='' method=GET>
<table>
<?php

foreach($staff as $st)
{
	echo "<tr>

<td>Last name</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=lName value =".$st->lName."></td></tr>
<tr>
<td>First name</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=fName value =".$st->fName."></td></tr>
<tr>
<td>Email Address</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=email value =".$st->email."></td></tr>
<td>Staff Id</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=staff_id value =".$st->staff_id."></td></tr>


<tr><td span=2><input type=hidden name=controller value='updateStaffController'>
<input type=hidden name=action value='updateStaff'>
</td></tr></table>
<input type=submit value=Update name=btnUpdate>


";
}
?>

    <input type="hidden" name="controller" value="updateStaff">
   <input type="hidden" name="action" value="updateStaff">
   
   </form>


</div>
</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>
<div class="foot">
  <a class="watsappPic" href="https://www.google.com"> <img  class="watsappPic" src="public/images/facebook-5-32.png"; > </a>
		 			 
	<img  class="watsappPic" src="public/images/whatsapp-32.png"; >				
		 
  
  </div>
</body> 
</html>
















