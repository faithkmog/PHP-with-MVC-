
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>customer details </title>
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
		  <a  class="active" href="?controller=allBookingZ&action=allBookingZ">View Bookings</a></li> 
                 	     	  		  
		  <a  class="active" href="?controller=updateStaff&action=updateStaff">Update Staff</a></li>
 <a class="active" href="?controller=logout&action=logout">Log Out</a>
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content">
<?php
 

echo "Customer / Member List";
echo "<form method = GET><table border='1'><tr>
<th>Customer Lastname</th><th>Customer Firstname</th><th>Customer Gender</th><th>Customer Email</th><th>Customer City</th>
</tr>";
foreach ($allCustomer as $cust) {
echo "<tr>
<td>$cust->cust_lName</td>
<td>$cust->cust_fName</td>
<td>$cust->cust_gender</td>
<td>$cust->cust_email</td>
<td>$cust->cust_city</td>
</tr>";
}
?>
</table></form>

<?php
echo "<input type=hidden name=controller value = custDetailsController>";
echo "<input type=hidden name=action value = showAllCustomer>";

?>


</div>
</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>

</body> 
</html>
















