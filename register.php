<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$a=$_POST['name1'];
$b=$_POST['pwd'];
$c=$_POST['name4'];
$d=$_POST['vamsi'];
$e=$_POST['phone'];
$query="insert into registration(username,password,conform,email,phoneno) values('$a','$b','$c','$d','$e')";
$result=mysql_query($query,$connection); 
if($result)
{
echo "1 row inserted into registration database<br><br>";
echo "<a href='1stpage.php'>check your train</a><br><br>";
}
else
echo mysql_error();
$query2="insert into loginpage(userid,password) values('$a','$b')";
$result2=mysql_query($query2,$connection);
if($result==1)
echo "entered into login datebase also";
else
echo mysql_error();
?>