<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$a=$_POST['from'];
$b=$_POST['to'];
$query1='select * from train';
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
$x=0;
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result1);
for($j=2;$j<12;$j++)
{
if($a==$row[$j])
{
for($k=$j+1;$k<12;$k++)
{
if($b==$row[$k])
{
echo "train is available"."<br>";
$c=$row['Train'];
$d=$row['Trainid'];
echo "train name from $a to $b is ".$c."<br>";
echo "train id from $a to $b is ".$d."<br>";
//echo "the starting station stop number of the train is".$j."<br>";
//echo "the destination station stop number of the train is".$k."<br>";
$u=($k-$j)*100;
//echo "the distance between two stations is ".$u."kms"."<br>";
$x=$x+1;
break;
}
}
}
}
}
if($x==0)
echo "no trains are available";
if($result1)
echo "";
else
echo mysql_error();
echo "<a href='book.php'>book tickets</a>";
?>
