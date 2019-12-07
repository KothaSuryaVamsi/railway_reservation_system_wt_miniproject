<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$a=$_POST['train'];
$b=$_POST['trainid'];
$c=$_POST['city1'];
$d=$_POST['city2'];
$e=$_POST['city3'];
$f=$_POST['city4'];
$g=$_POST['city5'];
$h=$_POST['city6'];
$i=$_POST['city7'];
$j=$_POST['city8'];
$k=$_POST['city9'];
$l=$_POST['city10'];
$query="insert into train(Train,Trainid,City1,City2,City3,City4,City5,City6,City7,City8,City9,City10)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$result=mysql_query($query,$connection);
if($result)
echo "1 more train is added";
else
echo mysql_error();
?>