  




<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>update customer </title>
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
		
        <a class="active" href="?controller=homePage&action=custHome">Home</a> 
        <a  class="active" href="?controller=allDetails&action=allDetails">View details</a></li> 
		<a  class="active" href="?controller=&action=">Book Service</a></li>	
		<a class="active" href="?controller=homePage&action=custHome">Log Out</a>
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content">
<form action='' method=GET>
<table>
<?php

foreach($cust as $st)
{
	echo "<tr>

<td>Last name</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=lName value =".$st->lName."></td></tr>
<tr>
<td>First name</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=fName value =".$st->fName."></td></tr>
<tr>
<td>Email Address</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;' class='inputB' type=text name=email value =".$st->email."></td></tr>
    <tr>
    <td>City</td><td>
    <input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=text name=city value =".$st->city."></td></tr>
    <tr>
    
<td>Password</td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center; ' class='inputB'  type=text name=password value =".$st->password."></td></tr>
    <tr>
<td></td><td><input style='height:23px;width:200px; font-size:14pt;text-align: center;'  class='inputB' type=hidden name=cust_id value =".$st->cust_id."></td></tr>


<tr><td span=2><input type=hidden name=controller value='updateCustomerController'>
<input type=hidden name=action value='updateCustomer'>
</td></tr></table>
<input type=submit value=Update name=btnUpdate>


";
}
?>

    <input type="hidden" name="controller" value="updateCustomer">
   <input type="hidden" name="action" value="updateCustomer">
   
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
















