<html>
    <title>Booking Report</title>
   
     <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            <div class="panel panel-default panel-background">
                <h1>Booking Report</h1>
                <hr />
                <div class="panel-body"> 


<form name=form1 method = GET onchange='form1.submit();'>
  <br>Select Start Date:<input type="date" name="date1" value="<?php echo $date1; ?>" class="form-control"/>

                         
<br>Select End Date:<input type="date" name="date2" value="<?php echo $date2; ?>" class="form-control"/>


<?php
echo "<input type=hidden name=controller value = bookingReport>";
echo "<input type=hidden name=action value = bookingReport>";

?>
</form> 
<?php if ($booking) { ?>
<table>
    
<tr><th>Service Description</th><th >Service Price</th>
</tr>
<?php
foreach ($booking as $book)
{
echo "<tr>
    
<td>$book->bk_desc</td>
<td>$book->bk_price </td>

        
            
</tr>";

}

}
?>
</table><br>

                </div>
            </div>
        </div>
     </div>
                    
</html>






