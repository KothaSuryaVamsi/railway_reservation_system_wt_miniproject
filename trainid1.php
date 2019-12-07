<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("miniproject",$connection)))
showerror();
$a=$_POST['trainid'];
$query='select * from train';
$result=mysql_query($query,$connection);
$num=mysql_num_rows($result);
echo "<table border='1'>";
$x=0;
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result);
if($a==$row['Trainid'])
{
$x=1;
echo "the train name is".$row['Train'];
echo "<tr><td>Station1</td><td>".$row['City1']."</td></tr>";
echo "<tr><td>Station2</td><td>".$row['City2']."</td></tr>";
echo "<tr><td>Station3</td><td>".$row['City3']."</td></tr>";
echo "<tr><td>Station4</td><td>".$row['City4']."</td></tr>";
echo "<tr><td>Station5</td><td>".$row['City5']."</td></tr>";
echo "<tr><td>Station6</td><td>".$row['City6']."</td></tr>";
echo "<tr><td>Station7</td><td>".$row['City7']."</td></tr>";
echo "<tr><td>Station8</td><td>".$row['City8']."</td></tr>";
echo "<tr><td>Station9</td><td>".$row['City9']."</td></tr>";
echo "<tr><td>Station10</td><td>".$row['City10']."</td></tr>";
break;
}
}
if($x==0)
echo "there is no train with trainid".$a;
echo "</table>";
if($result)
echo "";
else
echo mysql_error();
echo "<a href='city.html'>sarting and destination</a>";
?>