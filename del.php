<?
include 'conct.php';
$sid=$_REQUEST[sl];
$query = "delete from stud where sl='$sid'";
$result = mysql_query($query) or die(mysql_error());
?>

