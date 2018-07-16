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
$query_TableSet = "SELECT * FROM `table`";
$TableSet = mysql_query($query_TableSet, $MyConnect) or die(mysql_error());
$row_TableSet = mysql_fetch_assoc($TableSet);
$totalRows_TableSet = mysql_num_rows($TableSet);

?>
<style type="text/css" align="center">
body,td,th {
	font-size: 16px;
	color: #000;
	text-align: center;
}
</style>

<title>Data Table</title>

<p><a href="insert-table.php"  >ข้อมูลการจองโต๊ะ</a></p>
<form id="form1" name="form1" method="post" action="search.php">
  ค้นหา : 
    <input type="text" name="textfield" id="word" /> 
  <input type="submit" name="btnSearch" id="btnSearch" value="ค้นหา" />
</form>
<p>&nbsp;</p>
<table border="1" align="center">
  <tr bgcolor="#FF0000">
    <td>รหัสโต๊ะ</td>
    <td>จำนวนที่นั่ง</td>
    <td>สถานะ</td>
    <td>วันที่</td>
    <td align="center">Option</td>
    <td align="center">&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_TableSet['TableID']; ?></td>
      <td><?php echo $row_TableSet['Sessile']; ?></td>
      <td><?php echo $row_TableSet['status']; ?></td>
      <td><?php echo $row_TableSet['time']; ?></td>
      <td align="center"><a href="delete.php?TableID=<?php echo $row_TableSet['TableID']; ?>">ลบ </a></td>
      <td align="center"><a href="update.php?TableID=<?php echo $row_TableSet['TableID']; ?>">แก้ไข</a></td>
    </tr>
    <?php } while ($row_TableSet = mysql_fetch_assoc($TableSet)); ?>
</table>
