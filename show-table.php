<?php
include("Connections/MyConnect.php");
//mysqli_select_db('$database_MyConnect');
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
<p>ตารางการจองวันที่ :<?php echo $_GET['ckDate']; ?></p>
<p>&nbsp;</p>
<p>
  <?php
$strTable = '<table border="1" width="800" align="center"><tr><td>จำวนที่หนัง/เวลา</td>';
foreach($arrTime as $time){
	  $strTable.='<td>'.$time.'</td>';
	}

$strTable.='</tr>';
foreach($arrCourt as $courtNum){
	$strTable.='<tr><td>'.$courtNum.'</td>';
	$sql="Select * From booking Where court_num={$courtNum} and court_date_booking='{$_GET['ckDate']}' Order by court_time_booking ASC ";
	echo $sql;
	$rs = mysqli_query($MyConnect,$sql); //or die(mysqli_error());
	$run=0;
	$time_slot = [];
	while ($row = mysqli_fetch_assoc($rs)){
		$time_slot[] = $row['court_time_booking'];
	} 

	foreach($arrTime as $time){
		//IF $TIME IS IN $time_slot
		if(in_array($time, $time_slot)){
			$strTable.='<td>จองแล้ว</td>';
			$run++;
		}else{
			$strTable.='<td><a href="insert-booking.php">ว่าง</a></td>';
			}
		
				}
		$strTable.='</tr>';
	}

echo $strTable ,'</table>';
?>
</p>
</body>
</html>