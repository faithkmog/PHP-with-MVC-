
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>adminHome </title>
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
	<div style="margin:0 auto;" class="navParent2"> 
 

		<div  class="topnav">
            <a class="active" href="#home">Home</a>
            <a  class="active" href="?controller=showAllCustomer&action=showAllCustomer">View Customer</a></li> 
			<a  class="active" href="?controller=allBookingZ&action=allBookingZ">View Bookings</a></li>
			<a  class="active" href="?controller=showAllStaff&action=showAllStaff">View Staff</a></li>
			<a  class="active" href="?controller=newService&action=insert">Add Service</a> </li>
		    <a  class="active" href="?controller=addStaff&action=addStaff">Add Staff</a></li>		
			 <a  class="active" href="?controller=allService&action=allService">List of Services</a></li>
			<a  class="active" href="?controller=bookingReport&action=bookingReport">Booking Report</a></li>	
			<a  class="active" href="?controller=amountReport&action=amountReport">Booking Finances Report</a></li>				
            <a  class="active" href="?controller=logout&action=logout">Log Out</a></li>
                  
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content">

<img  class="adminPic" src="public/images/administrator-2-512.png"; >

</div>
</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>
 
</body> 
</html>
















