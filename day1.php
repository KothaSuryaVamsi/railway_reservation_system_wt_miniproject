<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$a=$_POST['name'];
$b=$_POST['id'];
$c=$_POST['date'];
$d=$_POST['num'];
$query="insert into traintickets(Trainname,Trainid,date,availableseats) values('$a','$b','$c','$d')";
$result=mysql_query($query,$connection);
if($result)
{
echo "database is updated";
}
else
echo mysql_error();