<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$y=$_POST['train'];
$z=$_POST['id'];
$x=$_POST['date'];
$query2="select * from traintickets";
$result2=mysql_query($query2,$connection);
$n=mysql_num_rows($result2);
$f=0;
$h=0;
for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_array($result2);
if($row['Trainid']==$z && $row['date']==$x)
{
$f=1; 
if($row['availableseats']>0 && $row['date']==$x)
{
$h=1;
echo "available seats are".$row['availableseats'];
echo "<br><a href='tickets.php'>book tickets</a>";
break;
}
else
{
echo "no seats are available";
}
}
}
if($h==0)
{
echo "there is no train on that day";
}
if($x==0)
echo "give correct train name ".$y." or trainid ".$z;
?>  