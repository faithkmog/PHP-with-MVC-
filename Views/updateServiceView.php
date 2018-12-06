<h1>Update Service</h1>



<form action='' method=GET>
<table>
<?php

foreach($serv as $st)
{
	echo "<tr>

<td>Name</td><td><input type=text name=name value =".$st->name."></td></tr>
<tr>
<td>Description </td><td><input type=text name=desc value =".$st->desc."></td></tr>
<tr>
<td>Price</td><td><input type=text name=cost value =".$st->cost."></td></tr>
    <tr>
    <td>Category</td><td>
    <input type=text name=categ value =".$st->categ."></td></tr>
    <tr>
    

<td>Servic ID</td><td><input type=text name=serv_id value =".$st->serv_id."></td></tr>


<tr><td span=2><input type=hidden name=controller value='updateServiceController'>
<input type=hidden name=action value='updateService'>
</td></tr></table>
<input type=submit value=Update name=btnUpdate>


";
}
?>

    <input type="hidden" name="controller" value="updateService">
   <input type="hidden" name="action" value="updateService">
   
   </form>