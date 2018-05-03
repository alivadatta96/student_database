<?
include 'conct.php';
$name=$_POST[nm];
if($name!='')
{
	$q1=" and nm like '%$name%'";
}
else
{
	$q1="";
}
$cont=$_POST[cont];
if($cont!='')
{
	$q2=" and cont like '%$cont%'";
}
else
{
	$q2="";
}

$roll=$_POST[rl];
if($roll!='')
{
	$q3=" and roll ='$roll'";
}
else
{
	$q3="";
}
$cls1=$_POST[cls1];
if($cls1!='')
{
	$q4=" and scls ='$cls1'";
}
else
{
	$q4="";
}
$sec=$_POST[sec];
if($sec!='')
{
	$q5=" and sec ='$sec'";
}
else
{
	$q5="";
}

$QRY="select * from stud where sl>0 ".$q1.$q2.$q3.$q4.$q5;
echo $QRY;
?>
<html>
<body >
<style> 
body {
    background: url("img/bg.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
<table border="0" align="center" width="800px" >
<tr>
<th align="center" width="5%">Sl.</th>
<th align="center" width="5%">Class</th>
<th align="center" width="5%">Sec</th>
<th align="center" width="5%">Roll</th>
<th align="center" width="50%">Name</th>
<th align="center" width="20%">Cont.</th>
<th align="center" width="10%">Edit.</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from stud where sl>0 ".$q1.$q2.$q3.$q4.$q5);
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="#63A6B8";
		}
		else
		{
			$clr="#DEB5E3";
		}
		  $f1=$r1['scls'];
		  $sid=$r1['sl'];
		  $f2=$r1['sec'];
		  $roll=$r1['roll'];
		  $nm=$r1['nm'];
		  $cont=$r1['cont'];
		  
	$select1=mysql_query("select * from s_cls where cid='$f1'");
      while($r2=mysql_fetch_array($select1))   
	 {		
		  $f1=$r2['scls'];
	 }  
		  
		  if($cont=="")
		  {
			  $cont="NA";
		  }
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$roll;?></td>
<td ><?=$nm;?></td>
<td ><?=$cont;?></td>
<td ><a href="edit.php?sl=<?=$sid?>" title="Click to Edit"> <img src="img/edit.png" height="35px"> </a>
<a href="del.php?sl=<?=$sid?>" title="Click to Delete!"> <img src="img/del.png" height="35px"> </a>
</td>
</tr>
<?
	 }
?>
</table>
</body>
</html>