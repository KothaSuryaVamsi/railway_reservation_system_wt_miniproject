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
if(($a==$row['City1'] || $a==$row['City2'] || $a==$row['City3'] || $a==$row['City4'] || $a==$row['City5'] || $a==$row['City6'] || $a==$row['City7'] || $a==$row['City8'] || $a==$row['City9'] || $a==$row['City10']) && ($b==$row['City1'] || $b==$row['City2'] || $b==$row['City3'] || $b==$row['City4'] || $b==$row['City5'] || $b==$row['City6'] || $b==$row['City7'] || $b==$row['City8'] || $b==$row['City9'] || $b==$row['City10']))
{
echo "train is available"."<br>";
$c=$row['Train'];
$d=$row['Trainid'];
echo "train name from $a to $b is ".$c."<br>";
echo "train id from $a to $b is ".$d."<br>";
$x=$x+1;
}
}
if($x==0)
echo "no trains are available";
if($result1)
echo "";
else
echo mysql_error();
echo "<a href='book.html'>book tickets</a>";
?>
