<?php require_once('Connections/MyConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_MyConnect, $MyConnect);
$query_BookingSet = "SELECT * FROM booking";
$BookingSet = mysql_query($query_BookingSet, $MyConnect) or die(mysql_error());
$row_BookingSet = mysql_fetch_assoc($BookingSet);
$totalRows_BookingSet = mysql_num_rows($BookingSet);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 p {
	text-align: center;
	color: #F66;
	font-size: 18px;
}
#form1 table tr td {
	text-align: center;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>จัดการข้อมูลการจองโต๊ะ</p>
  <table border="1" align="center">
    <tr>
      <td width="105">id</td>
      <td width="134">tableid</td>
      <td width="119">time</td>
      <td width="120">date</td>
      <td width="126">name</td>
      <td width="120">phon</td>
      <td width="36">&nbsp;</td>
      <td width="35">&nbsp;</td>
      <td width="35">&nbsp;</td>
    </tr>
    <?php do { ?>
    <tr>
      <td><?php echo $row_BookingSet['id']; ?></td>
      <td><?php echo $row_BookingSet['tableid']; ?></td>
      <td><?php echo $row_BookingSet['time']; ?></td>
      <td><?php echo $row_BookingSet['date']; ?></td>
      <td><?php echo $row_BookingSet['name']; ?></td>
      <td><?php echo $row_BookingSet['phon']; ?></td>
      <td><a href="insert-booking.php">เพิ่ม</a></td>
      <td><a href="delete-b.php?id=<?php echo $row_BookingSet['id']; ?>">ลบ</a></td>
      <td><a href="update-b.php?id=<?php echo $row_BookingSet['id']; ?>">แก้ไข</a></td>
    </tr>
    <?php } while ($row_BookingSet = mysql_fetch_assoc($BookingSet)); ?>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($BookingSet);
?>
