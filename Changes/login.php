<?php
function __autoload($class)
{include($class.".php");}
if(isset($_POST['login']))
{$run=new classfun();
$run->login();
}
?><html>
<head>
<title>login</title>
</head>
<body><h1><center>LOGIN</center></h1>
<form method="post">
<table align="center">
<tr>
<td>
RollNo:<input type="text" name="rollno" placeholder="enter your RollNo" required/>
</td>
</tr>
<tr>
<td>
PASSWORD:<input type="password" name="password" placeholder="enter your password" required/>
</td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" name="login" value="LOGIN"/>
</td>
</tr>
</table>
</form>
</body>
</html>