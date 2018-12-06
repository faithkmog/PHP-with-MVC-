
<!DOCTYPE html>
<?php
  //session_start();
?>
<html>
<head>
<script language="javascript">

//alert ("haha");
</script>

<title>Customer Home </title>
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
          <a class="active" href="?controller=homePage&action=booking">Home</a>  
            <a  class="active" href="?controller=allDetails&action=allDetails">View details</a></li> 
        
        <a  class="active" href="?controller=updateCustomer&action=updateCustomer">Update My Details</a></li>
		 
 <a  class="active" href="?controller=makeBooking&action=makeBooking">Book a Service</a></li>
<a class="active" href="?controller=allBooking&action=allBooking">My Bookings</a>                
        <a class="active" href="?controller=logout&action=logout">Log Out</a>
        
        
        
            
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>
</br> 

</body> 
</html>
