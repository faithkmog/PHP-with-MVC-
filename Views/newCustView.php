
<!DOCTYPE html>

<html>
<head>

<script language="javascript">

 
</script>

<title>sign up</title>
<link rel="stylesheet" href="public/styling.css" /> 
</head>

<body class="body">

<div class="toptop" style="align:center;">

 
<div  class="logoHolder"> 
     
		        <img  class="logo" src="public/images/lastLogo2.png"; >
				
		  </div>	
</div>

<div class"between"> 
 <h2> </h2>
  
 
</div>

	<div style="margin:0 auto;" class="navParent"> 
 

		<div  class="topnav">
                    
		 <a class="active" href="index.php">Home</a>
		  <a class="active"  href="?controller=homePage&action=about">About Us</a>	
	 
		  <a class="active" href="?controller=homePage&action=contact">Why Choose US!</a>
		  
		</div>
 	
	</div>



<div style="margin:0 auto;" class="SignuUpcontent">

 
  <h1  style="background-color:#dcdcdc" ALIGN="center"> <marquee>Sign Up Today!! </marquee></h1> 
 <table align="center">
    <form class="form" method=POST action="" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error">
	   
	  </div>
	  <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="First Name" name="name" required />
	  <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Last Name" name="surname" required />
	  <input pattern='(\d{2})(0[123456789]|1[012])(0[123456789]|[12][0123456789]|3[01])(\d{4})([01])(8)(\d{1})' title='Please enter a valid id number, 13 numeric characters required!'style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="ID Number" name="idNumber" />
	  
			  	<th> <input   type="radio" name="gender" 
									<?php if (isset($gender) && $gender=="Female") echo "checked";?>
									value="Female">Female
									<input type="radio" name="gender"
									<?php if (isset($gender) && $gender=="Male") echo "checked";?>
									value="Male"> Male
								 </select>
                                   
            <div style="margin:0 auto;"> <select class="inputB" style="height:23px;width:200px;font-size:14pt;text-align: center;" name="city" >
									
									<option>  SELECT CITY  </option>
                                            <option >Witbank</option>
                                            <option>Middleburg</option>
											<option>Ogies</option>
											<option>Secunda</option>
											<option>Carolina</option>  </div>
											
											
      <input pattern='\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*' title='Please enter a valid email address' style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Email/Username" name="email"  />
	 


      <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="password" placeholder="Password" name="password" autocomplete="password" />
      <input style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password"  />
	 
	 <div class="inputB">
	  
	  
      <input type="submit" value="Register" name="btnregister" class="btnSub" />
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


















 