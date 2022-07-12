<?php
include('../control/login_session.php');
if(isset($_SESSION['username'])){
header("location:page1.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<fieldset>
<table> 

<h2>Login</h2>
<form action="" method="post">
    
<tr> 
<td></td><td>Enter first Name </td><td> <input type="text" name="username" placeholder="Username"></td>
</tr>
<tr> 
<td></td><td>Enter Password </td><td><input type="password" name="password" placeholder="Password"></td> 
</tr>

<tr> <td>  <input name="submit" type="submit" value="LOGIN"> </td></tr>
</form>
<br>

<?php 
//echo $error; 
?>
</table>
<td>
    <tr>
    <h5><a href="registation.php">Register Here </a></h5>
    </tr>
</td>
</body>
</fieldset>
</html>
