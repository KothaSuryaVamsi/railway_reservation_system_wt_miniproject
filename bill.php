<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$dd=$_POST['train'];
$a=$_POST['from'];
$b=$_POST['to'];
$cc=$_POST['num'];
$query1='select * from train';
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
$x=0;
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result1);
if($dd==$row['Train'])
{
for($j=2;$j<12;$j++)
{
if($a==$row[$j])
{
for($k=$j+1;$k<12;$k++)
{
if($b==$row[$k])
{
echo "tickets are booked"."<br>";
$c=$row['Train'];
$d=$row['Trainid'];
echo "<table border='1'>";
echo "<tr><td>train name from $a to $b is </td><td>".$c."</td></tr>";
echo "<tr><td>train id from $a to $b is </td><td>".$d."</td></tr>";
$u=($k-$j)*100;
echo "<tr><td>the distance between two stations is </td><td>".$u."kms"."</td></tr>";
$ee=($u/2)*$cc;
echo "<tr><td>the bill for individual member is </td><td>".($u/2)."ruppes</td></tr>";
echo "<tr><td>the total amount is </td><td>".$ee."</td></tr>";
echo "</table>";
$x=$x+1;
break;
}
}
}
}
}
}
if($result1)
echo "";
else
echo mysql_error();
?>
