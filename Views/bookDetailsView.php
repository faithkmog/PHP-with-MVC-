
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
                  <a  class="active" href="?controller=addStaff&action=addStaff">Add Staff</a></li>		  		  
		  <a  class="active" href="?controller=updateStaff&action=updateStaff">Update Staff</a></li>
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="contents">
<?php
 

 
echo "<form method = POST>
 <table border='1'>
    <tr >
        <th bgcolr>booking description</th>
        <th>Booking Cost</th>
        <th>Service date</th>
        <th>Date Placed</th>
           <th>Time</th>
               <th>Address</th>
               <th>Action</th>

		 
		
       </tr>";
foreach ($allbooking as $book) {
echo "<tr>
    
<td>$book->desc</td>
<td>$book->cost</td>
<td>$book->servDate</td>
<td>$book->datePlaced</td>
<td>$book->time</td>
<td>$book->address</td>
 <td><input type=hidden name=bookid value = ".$book->bookid."> <input type=submit value=Attended name=btnAttended > <input type=submit value=Cancel name=btnCancel> </td>
 
</tr>";
}
?>
</table> </form>

<?php
//echo "<input type=hidden viewBooking=controller value = viewBookingController>";
//echo "<input type=hidden viewBooking=action value = showAllbooking>";

?>
</body> 
</html>
















