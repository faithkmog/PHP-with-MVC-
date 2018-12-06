<h1>Profile</h1>



<form action='' method=GET>
<table>
<?php
	echo "<tr>

<td>Surname</td><td><input type=text name=surname value =".$cust->surname."></td></tr>
<tr>
<td>First name</td><td><input type=text name=firstname value =".$cust->name."></td></tr>
<tr><td span=2><input type=hidden name=controller value='student'>
<input type=hidden name=action value='myProfile'>
</td></tr></table>
<input type=submit value=Update>

</form>
";

?>
