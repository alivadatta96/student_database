<?
include 'ck.php';
?>
<html>
<head>
<style type="text/css">
#lbox
{
	border : none;
	border-radius: 15px;
	background-image: url(img/bg.png);
	width : 500px;
	
	
	display : none;
	color: #fff;
	position : absolute;
	left : 350px;
	top : 250px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
}
</style>
<script type="text/javascript" src="js1.js" ></script>
</head>
<table border="1" width="500px" align="center" bgcolor="pink">
<td align="right">Cont. :</td>
<td colspan="5"><input type="text" maxlength="10" name="cont1" id="cont1" size="30" onkeyup="srch(this.value)"> </td>
</tr>
<tr>

<tr>
<td colspan="6" align="right"><br>
<input type="button" value=" SEARCH " onclick="srch1()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>
<div id='lbox' align='center'>
Loding.....<br>
<img src="img/loading.gif">
</div>

<div id="div1">



</div>






