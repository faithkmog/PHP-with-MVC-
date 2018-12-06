
<!DOCTYPE html>
 
<html>
<head>

<script language="javascript">

//alert ("haha");
</script>

<title>customer Details </title>
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
        <a  class="active" href="?controller=updateCustomer&action=updateCustomer">Update details</a></li>
		<a  class="active" href="?controller=&action=">Book Service</a></li>
	
		<a class="active"  href="#booking">View/Cancel Bookings</a> 
		<a class="active" href="?controller=logout&action=logout">Log Out</a> 
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content3">
<?php
/************************************************************************
* This page is used to display a list of subjects for a lecturer
************************************************************************/

// start with the dropdown that is populated with subject code and ViewDetails

echo "my details";
echo "<form method = POST>
 <table border='1'>
    <tr >
        <th>Name</th>
        <th>Surname</th>
        <th>Gender</th>
        <th>Id Num</th>
        <th>Email</th>
        <th>City</th>
        <th>password</th>

       </tr>";


foreach ($allDetails as $customer) 
    {
echo "<tr>
<td>$customer->name</td>
<td>$customer->surname</td>
<td>$customer->gender</td>
<td>$customer->idNum</td>
    <td>$customer->email</td>
        <td>$customer->city</td>
            <td>$customer->password</td>
</tr>";
}

echo "<input type=hidden name=controller value = logout>";
echo "<input type=hidden name=action value = logout>";
?>
</table> <input type=submit value=Deactivate name=btnDeactivateProfile>
</form>

<?php


?></div>
</br>
 
</body> 
</html>