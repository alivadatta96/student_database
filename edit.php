<?
include 'conct.php';
$sid=$_REQUEST[sl];
$select=mysql_query("select * from stud where sl='$sid'");
      while($r1=mysql_fetch_array($select))   
	 {	  $cls=$r1['scls'];
		  $sec=$r1['sec'];
		  $roll=$r1['roll'];
		  $nm=$r1['nm'];
		  $cont=$r1['cont'];
	 }
	 sleep(1);
?>
<form name="f1" method="post" action="value.php">
<input type="hidden" name="sid" id="sid" value="<?=$sid;?>">
<br><br>
<table border="0" width="90%" align="center" bgcolor="pink">
<tr>
<td align="right" colspan="6"><a href="#" onclick="clr()" title="Close"><img src="img/del.png" width="25"/></a></td>
</tr>
<tr>
<td align="right">Name :</td>
<td colspan="5"><input type="text" value="<?=$nm;?>" name="nm" id="nm" size="30" placeholder="Please Enter Your Name"> </td>
</tr>
<tr>
<td align="right">Cont. :</td>
<td colspan="5"><input type="text" value="<?=$cont;?>" maxlength="10" name="cont" id="cont" size="30"> </td>
</tr>
<tr>
<td align="right">Class :</td>
<td>
<select name="cls1" id="cls1">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from s_cls") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $cid=$r1['cid'];
		  $f2=$r1['scls'];
?>
<option value="<?=$cid;?>" <?=($cid==$cls)? 'Selected':''?>><?=$f2;?></option>
<?
	 }
?>
</select>
</td>
<td align="right">Sec :</td>
<td>
<select name="sec" id="sec">
<option value="">---Select---</option>
<option value="A" <?=($sec=='A')? 'Selected':''?>>A</option>
<option value="B" <?=($sec=='B')? 'Selected':''?>>B</option>
<option value="C" <?=($sec=='C')? 'Selected':''?>>C</option>
</select>
</td>
<td align="right">Roll :</td>
<td>
<input type="text" value="<?=$roll;?>" name="rl" id="rl" size="5">
</td>
</tr>
<tr>
<td colspan="6" align="right"><br>
<input type="submit" value=" UPDATE ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>
<br>
</form>