<?php require_once('Connections/MyConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

$colname_Recordset1 = "-1";
if (isset($_POST['word'])) {
  $colname_Recordset1 = $_POST['word'];
}
mysqli_select_db($database_MyConnect, $MyConnect);
$query_Recordset1 = sprintf("SELECT * FROM `table` WHERE status LIKE %s", GetSQLValueString("%" . $colname_Recordset1 . "%", "text"));
$Recordset1 = mysqli_query($query_Recordset1, $MyConnect) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1" align="center">
  <tr>
    <td>TableID</td>
    <td>Sessile</td>
    <td>status</td>
    <td>time</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['TableID']; ?></td>
      <td><?php echo $row_Recordset1['Sessile']; ?></td>
      <td><?php echo $row_Recordset1['status']; ?></td>
      <td><?php echo $row_Recordset1['time']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
</table>
</body>
</html>
<?php
mysqli_free_result($Recordset1);
?>
