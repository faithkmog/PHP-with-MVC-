
<!DOCTYPE html>

<html>
<head>

<script language="javascript">

 
</script>

<title>make booking </title>
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
	  <a class="active" href="?controller=allBooking&action=allBooking">My Bookings</a>  		  
		 
		  
		</div>
 	
	</div>



<div  style="margin:0 auto;" class="SignuUpcontent">
 
 
<h1  style="background-color:#dcdcdc" ALIGN="center">   New Booking  </h1>
 <table align="center">
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error">
	   
	  </div>
	  <input  type="date"  style="height:23px;width:200px; font-size:14pt;text-align: center;"  name="bkdesc"  value="<?php echo $bkdesc;?> "class="inputB"  />
          
                     <div style="margin:0 auto;"> <select class="inputB" style="height:23px;width:200px;font-size:14pt;text-align: center;" name="town" >
									
									<option>  SELECT CITY  </option>
                                            <option >Witbank</option>
                                            <option>Middleburg</option>
											<option>Ogies</option>
											<option>Secunda</option>
											<option>Carolina</option>  </div>
          <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="suburb" name="suburb"   />
          <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="Street" name="street" />
          <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="text" placeholder="house Number" name="Hnum" />

                     <div style="margin:0 auto;"> <select class="inputB" style="height:23px;width:200px;font-size:14pt;text-align: center;" name="time" >
									
									<option>  Time </option>
                                            <option >06:00</option>
                                            <option>06:30</option>
											<option>07:00</option>
											<option>07:30</option>
											<option>08:00</option>
                                                                                        <option>08:30</option>
                                                                                        <option>09:00</option>
                                                                                        <option>09:30</option>
                                                                                        <option>10:00</option>
                                                                                        <option>10:30</option>
                                                                                        <option>11:00</option>
                                                                                        <option>12:00</option>
                                                                                        <option>12:30</option>
                                                                                        <option>13:00</option>
                                                                                         <option>13:30</option>
                                                                                          <option>14:00</option>
                                                                                           <option>14:30</option>
                                                                                            <option>15:00</option>
                                                                                             <option>15:30</option>
                                                                                              <option>16:00</option>
                     </div>
           <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="number" placeholder="Number of Kitchens" value="0" name="numKitchen" />
            <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="number" placeholder=" Number of bedrooms" value="0" name="numBedroom"/>
            <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="number" placeholder="Number of Toilets" value="0" name="numToilet" />
	   <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="number" placeholder="Number of lounch" value="0" name="numLounch"/>
           <input  style="height:23px;width:200px; font-size:14pt;text-align: center;" class="inputB" type="number" placeholder="Number of bathrooms" value="0" name="numBathroom"/>
            
 
       
      <input type="submit" value="Book" name="btnaddBooking" class="btnSub" />
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


















 