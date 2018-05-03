<?
$reqlevel=20;
include 'ck.php';

$sid=$_POST[sid];
$name=$_POST[nm];
$cont=$_POST[cont];
$roll=$_POST[rl];
$cls1=$_POST[cls1];
$sec=$_POST[sec];

if($sid=='')
{
if($name=="" or $roll=="" or $cls1=="" or $sec=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query = "INSERT INTO stud (nm,cont,roll,scls,sec) VALUES ('$name','$cont','$roll','$cls1','$sec')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Submited!');
document.location = "index.php";
</script>
<?
}}
else
{
if($name=="" or $roll=="" or $cls1=="" or $sec=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query = "Update stud set nm='$name',cont='$cont',roll='$roll',scls='$cls1',sec='$sec' where sl='$sid'";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Updated!');
document.location = "index.php";
</script>
<?
}	
}
?>
