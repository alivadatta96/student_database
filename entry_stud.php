<?
$reqlevel=1;
include 'ck.php';
?>
<script type="text/javascript" src="js1.js" ></script>
<form name="f1" method="post" action="value.php">
<table border="1" width="500px" align="center" bgcolor="pink">
<tr>
<td align="right">Name :</td>
<td colspan="5"><input type="text" name="nm" id="nm" size="30" placeholder="Please Enter Your Name"> </td>
</tr>
<tr>
<td align="right">Cont. :</td>
<td colspan="5"><input type="text" maxlength="10" name="cont" id="cont" size="30"> </td>
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
<option value="<?=$cid;?>"><?=$f2;?></option>
<?
	 }
?>
</select>
</td>
<td align="right">Sec :</td>
<td>
<select name="sec" id="sec">
<option value="">---Select---</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select>
</td>
<td align="right">Roll :</td>
<td>
<input type="text" name="rl" id="rl" size="5">
</td>
</tr>
<tr>
<td colspan="6" align="right"><br>
<a href="srch1.php"><input type="button" value=" Search "></a>
<a href="srch2.php"><input type="button" value=" Search All"></a>
<input type="submit" value=" SAVE ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>



