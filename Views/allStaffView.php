
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>Home </title>
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
		  <a  class="active" href="?controller=updateStaff&action=updateStaff">Update Staff</a></li>	
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content3">
<?php
 

echo "List of staff Members";
echo "<form method = GET><table border='1'><tr>
<th>Staff Lastname</th><th>Staff Firstname</th><th>Staff Email</th><th>Staff Hire-date</th>
</tr>";
foreach ($allStaff as $staf) {
echo "<tr>
<td>$staf->lName</td>
<td>$staf->fName</td>
<td>$staf->email</td>
<td>$staf->hireDate</td>
</tr>";
}
?>
</table></form>

<?php
echo "<input type=hidden name=controller value = addStaffController>";
echo "<input type=hidden name=action value = showAllStaff>";

?>


</div>
</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>

</body> 
</html>
















