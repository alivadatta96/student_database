<?
include 'conct.php';
$cont=$_REQUEST[cont];
$f=0;
$select=mysql_query("select * from stud where cont like '%$cont%'");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
	 }
if($f>0)
{
?>
<table border="0" align="center" width="800px">
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
$select=mysql_query("select * from stud where cont like '%$cont%'");
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
		  $cont1=$r1['cont'];
		  
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
<td ><?=$cont1;?></td>
<td ><a href="#" onclick="sfdtl('<? echo $sid; ?>',event)" title="Edit"><img src="img/edit.png" height="35px"> </a></td>
</tr>
<?
	 }
?>
<tr>
<td colspan="7" align="right">
<form name="f1" method="post" action="toexl.php">
<input type="submit" value="Export to Excel">
<input type="hidden" name="val" id="val" value="<?=$cont;?>">
</form>

<form name="f1" method="post" action="topdf.php">
<input type="submit" value="Export to PDF">
<input type="hidden" name="val" id="val" value="<?=$cont;?>">
</form>
</td>
</tr>
</table>
<?
}
else
{
?>
<center>
<font color="red">No Data Found</font>
</center>
<?
}
?>




