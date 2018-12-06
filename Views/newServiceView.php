
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>add service </title>
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
<?php
  
 echo "<h4 > $username</h4>";
?>
 
</div>

	<div style="margin:0 auto;" class="navParent"> 
 

		<div  class="topnav">
		  <a class="active" href="?controller=homePage&action=adminHome">Home</a>   
                  <a  class="active" href="?controller=showAllCustomer&action=showAllCustomer">View Customer</a></li> 
		 <a  class="active" href="?controller=allBooking&action=allBooking">View Bookings</a></li>
                  <a  class="active" href="?controller=addStaff&action=addStaff">Add Staff</a></li>		  
		  <a  class="active" href="?controller=showAllStaff&action=showAllStaff">View Staff</a></li>		  
		  <a  class="active" href="?controller=updateStaff&action=updateStaff">Update Staff</a></li>	
		</div>
 	
	</div>



<div style="margin:0 auto;" class="content5">

<div style="margin:0 auto;" class="insertServiceDv">
  <h1  style="background-color:#dcdcdc" ALIGN="center"> <marquee>Add Service </marquee></h1> 
 <table align="center">
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error">
	   
	  </div>
	  <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Service name" name="serv_name" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Service description" name="serv_desc" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Service Cost" name="serv_cost" required   />
								
	
      <input type="submit" value="Register" name="btnregister" class="btnSub" />
    </form>
</table>

</div>
</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>
 
</body> 
</html>


