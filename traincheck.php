<html>
<head>
<title>check by trainname</title>
<link rel="style sheets" type=text/css hred="style.css"/>
<script type="text/javascript">
function validate(form1)
{
var Trainname=window.document.form1.train1.value;
check=new RegExp("[^a-zA-Z]","g");
if(Trainname.match(check))
{
alert("enter a correct name");
return false;
}
if(Trainname.length==0)
{
alert("enter a TrainName");
return false;
}
return true;
}
</script></head>
<body>
<form name="form1" method="post" action="traincheck1.php">
<center>
<table>
<tr><td>Train Name:</td><td><input type="text" name="train1" placeholder="train name"></td></tr>
</table>
<input type="submit" value="check" onclick="return validate(this)">
</center>
</body>
</center>
