<?php session_start();
if($_SESSION['ID']!=NULL)
{

if(@$_REQUEST['id']=="out")
{header("location:login.php");}
?><html>
<head>
<title>enter</title>
</head>
<body>
<h1>you are login</h1>
<a href="?id=out">logout</a>
<?php 
echo "Your Name is ".$_SESSION['NAME']."<br>";
echo "and Your ID is ".$_SESSION['ID']."<br>";
echo $_SESSION['rollno'];
echo $_SESSION['branch'];
echo $_SESSION['year'];

?>


</body>
</html>
<?php }else{header("location:login.php");}?>