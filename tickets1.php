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
$b=$_POST['id'];
$c=$_POST['date'];
$d=$_POST['num'];
$query2="select * from traintickets";
$result2=mysql_query($query2,$connection);
$n=mysql_num_rows($result2);
$x=0;
for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_array($result2);
if($a==$row[0] && $b==$row[1] && $c==$row[2])
{
$g=$row[3]-$d;
$x=1;
if($g>0)
{
$query10="update traintickets set availableseats='$row[3]'-'$d' where ('$a'=Trainname && '$b'=Trainid && '$c'=date)";
$result10=mysql_query($query10,$connection);
if($result10)
echo "tickets are booked<br>";
echo "<a href='bill.php'>show bill</a>";
break;
}
else
{
echo "insufficient tickets";
}
}
}
if($x==0)
echo "there is no train on that day".mysql_error();

?>