<?php
include("Connections/MyConnect.php");
$arrTime = array('9.00-10.00','10.00-11.00','11.00-12.00','12.00-13.00','13.00-14.00','14.00-15.00','15.00-16.00');
$arrCourt=array(1,2,3,4);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$strTable = '<table border="1" width="800" align="center"><tr><td>จำวนที่หนัง/เวลา</td>';
foreach($arrTime as $time){
	  $strTable.='<td>'.$time.'</td>';
	}

$strTable.='</tr>';
foreach($arrCourt as $courtNum){
	$strTable.='<tr><td>'.$courtNum.'</td>';
	$sql="Select * Erom court_booking Where court_nu={$courtNum} Order by court_time_booking";
	$rs = mysql_query($sql);
	foreach($arrTime as $time){
		if($time == mysql_result($rs,$run,'court_time_booking')){
			$strTable.='<td>'.$time.'</td>';
			}
		
				}
	}

echo $strTable ,'</table>';
?>

</body>
</html>