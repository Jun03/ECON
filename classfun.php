<?php session_start();
global $com;
$com=new PDO("mysql:host=localhost;dbname=jundb","root","");
class classfun{
	function register(){
	global $com;
	$Name=$_POST['name'];
	$rollid=$_POST['rollno'];
	$phone=$_POST['phone'];
	$Date=$_POST['YYYY']."-".$_POST['MM']."-".$_POST['DD'];
	$email=$_POST['mail'];
	$Password1=$_POST['password1'];
	$CPassword=$_POST['cpassword'];
        $b=substr($rollid,0,2);
        $year= substr(date('Y-m-d H:i:s'),2,2);
	$year=$year-$b;
        
         $k=substr($rollid,-5,2);
switch($k){
  case 00 :$branch="CE";
           break;
  case 10 :$branch="CSE";
           break;
  case 13 :$branch="IT";
           break;
  case 20 :$branch="Electrical Engg.";
           break;
  case 31 :$branch="EC";
           break;
  case 43 :$branch="ME";
           break;
  case 51 :$branch="Chemical Engg.";
           break;
  case 70 :$branch="MBA";
           break;
  case 89 :$branch="Agriculture Engg.";
           break;
  
  
  
  default:$branch="None";
}


      $SQL="insert into details(NAME,ROLLNO,PHONE_NUMBER,YEAR,BRANCH,DATE_OF_BIRTH,EMAIL,PASSWORD1,CPASSWORD)
	values('$Name','$rollid',$phone,$year,'$branch','$Date','$email','$Password1','$CPassword')";
		if($Password1==$CPassword)
		{if($com->query($SQL))
		{echo "data saved successfully";
		header("location:index.php");}
		else
		{echo "something goes wrong";}
	    }
		else {echo "Passwords Does not Match";}
		}
function login(){
global $com;
$v1=$_POST['rollno'];
$v3=$_POST['password'];
$SQL="select * from details where ROLLNO=:Iv1 and PASSWORD1=:Iv2";
$s=$com->prepare($SQL);
$s->execute(array(":Iv1"=>"$v1",":Iv2"=>"$v3"));
	if($s->rowcount()>0)
	{
	$r=$s->fetch(PDO::FETCH_ASSOC);
	$_SESSION['NA']=$r['ROLLID'];
	$_SESSION['ID']=$r['ID'];
	header("location:userpage.php");
	}
}




}
?>