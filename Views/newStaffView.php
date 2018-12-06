
<!DOCTYPE html>

<html>
<head>

<script language="javascript">

 
</script>

<title>add staff </title>
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
		  <a  class="active" href="?controller=showAllStaff&action=showAllStaff">View Staff</a></li>		  
		  <a  class="active" href="?controller=updateStaff&action=updateStaff">Update Staff</a></li>
		  
		</div>
 	
	</div>



<div  style="margin:0 auto;" class="SignuUpcontent">
 
 
<h1  style="background-color:#dcdcdc" ALIGN="center">   New Staff  </h1>
 <table align="center">
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error">
	   
	  </div>
	  <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Staff First Name" name="fName" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Staff Last Name" name="lName" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Staff ID Number" name="idNo" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Staff Email Address" name="email" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Staff Password" name="password" required />
	  
			  	<th> <input   type="radio" name="gender" 
									<?php if (isset($gender) && $gender=="Female") echo "checked";?>
									value="Female">Female
									<input type="radio" name="gender"
									<?php if (isset($gender) && $gender=="Male") echo "checked";?>
									value="Male"> Male
								 </select>
      <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="date" placeholder="Staff Hire Date" name="hireDate" required />
      <input type="submit" value="Add New Staff" name="btnaddStaff" class="btnSub" />
    </form>
</table>




</div>


 
</div>
<div style="margin:0 auto;" class="bottomButton">
 
  
 
</div>
</br>
<div>

</body> 

</html>


















 