
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


<div style="margin:0 auto;" class="content">
<title>Booking Finances Report</title>
   
     <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            <div class="panel panel-default panel-background">
                <h1>Booking Finances Report</h1>
                <hr />
                <div class="panel-body"> 


<form name=form1 method = GET onchange='form1.submit();'>
  <br>Select Start Date:<input type="date" name="date1" value="<?php echo $date1; ?>" class="form-control"/>

                         
<br>Select End Date:<input type="date" name="date2" value="<?php echo $date2; ?>" class="form-control"/>


<?php
echo "<input type=hidden name=controller value = amountReport>";
echo "<input type=hidden name=action value = amountReport>";

?>
</form> 
<?php if ($booking) { ?>
<table>
    
<th>Total Number of Bookings</th><th >Total Overall Amount</th>
</tr>
<?php
foreach ($booking as $book)
{
echo "<tr>
    
<td>$book->total</td>
<td>$book->totalAmnt</td>

                
</tr>";

}

}
?>


</div>
</div>
<div style="margin:0 auto;" class="bottomButton"> 

 
</div>
</br>
</body> 
</html>
















