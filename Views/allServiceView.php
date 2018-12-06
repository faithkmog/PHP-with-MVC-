
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
	 
 
      
		</div>
 	
	</div>
 
<?php
 echo "<h4 > $username</h4>";
?>


<div style="margin:0 auto;" class="content3">


<?php
echo "Our Services";
echo "<form method = GET>
 <table border='1'>
    <tr >
        <th bgcolr>Service Name</th>
        <th>Service Description</th>
        <th>Service Cost</th>
         
       </tr>";
foreach ($allService as $serv) {
echo "<tr>
<td>$serv->name</td>
<td>$serv->desc</td>
<td>$serv->cost</td>
 
</tr>";
}
?>
</table></form>

<?php
echo "<input type=hidden ViewService=controller value = viewServiceController>";
echo "<input type=hidden ViewService=action value = showAllService>";

?>

</div>
<div style="margin:0 auto;" class="bottomButton">
 

 
</div>
</br>
 
</body> 
</html>
















