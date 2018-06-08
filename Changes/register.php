<?php
function __autoload($class)
{include($class.".php");}
if(isset($_POST['submit']))
{$run=new classfun();
$run->register();
}
?>
<html>
<head>
<title>register</title>
</head>
<body>
<center><h1>Registration form</h1></center>
<form method ="post" >
<table align="center">
<tr>
<td width="117">
Name:</td><td width="206"><input type="text" name="name" placeholder="ENTER YOUR NAME" required/>
</td>
</tr>
<tr>
  <td>Roll No.</td>
  <td><input type="text" name="rollno" placeholder="ENTER YOUR ROll NUMBER" required/></td>
</tr>
<tr>
<td>
Phone number:</td><td><input type="text" name="phone" placeholder="ENTER YOUR PHONE NUMBER" required/>
</td>
</tr>
<tr>
<td>
DOB:</td><td>
<select name="YYYY">
<option value="">YYYY</option>
<?php for($i=1990;$i<2017;$i++){?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select><select name="MM">
<option value="">MM</option>
<?php for($i=1;$i<13;$i++){?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select><select name="DD">
<option value="">DD</option>
<?php for($i=1;$i<32;$i++){?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select>
</td>
</tr>
<tr>
<td>
E-MAIL:</td><td><input type="text" name="mail" placeholder="enter your e-mail" required/>
</td>
</tr>
<tr>
<td>
Password:</td><td><p>
  <input type="password" name="password1" placeholder="ENTER YOUR PASSWORD" required/>
</p>
  </td>
</tr>
<tr>
<td>
Confirm Password:</td><td><p>
  <input type="password" name="cpassword" placeholder="ENTER YOUR PASSWORD" required/>
</p>
  </td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" name="submit" value="Register"/>
</td>
</tr>
</table>
</form>
</body>
</html>
