<?
require_once('html2pdf/html2pdf.class.php');
include 'conct.php';

$c1="
<table border=\"1\" align=\"center\" width=\"80%\">
<tr>
<th align=\"center\" width=\"5%\">Sl.</th>
<th align=\"center\" width=\"5%\">Class</th>
<th align=\"center\" width=\"5%\">Sec</th>
<th align=\"center\" width=\"5%\">Roll</th>
<th align=\"center\" width=\"50%\">Name</th>
<th align=\"center\" width=\"20%\">Cont.</th>
</tr>";
$f=0;
$select=mysql_query("select * from stud");
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
$c_2=$c_2."
<tr>
<td >".$f."</td>
<td >".$f1."</td>
<td >".$f2."</td>
<td >".$roll."</td>
<td >".$nm."</td>
<td >".$cont1."</td>
</tr>";
	 }
$c3="</table>";
$content=$c1.$c_2.$c3;

		$html2pdf = new HTML2PDF('P', 'A4', 'en');
        $html2pdf->writeHTML($content);
		$html2pdf->Output("file.pdf");
?>