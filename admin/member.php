<?php require_once('../Connections/MyConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  //$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

//mysqli_select_db($database_MyConnect, $MyConnect);
$query_Recordset1 = "SELECT * FROM admin_login";
$Recordset1 = mysqli_query($MyConnect,$query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

?>
<style type="text/css">
body p {
	font-size: 18px;
	text-align: center;
	color: #F90;
}
</style>
<body>
<p>จัดการข้อมูลสมาชิก</p>
<table border="1" align="center">
  <tr>
    <td>รหัสสมาชิก</td>
    <td>Username</td>
    <td>Password</td>
    <td>ชื่อผู้ใช้</td>
    <td>ชื่อ-นามสกุล</td>
    <td>เบอร์โทร</td>
    <td>อีเมลล์</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['id']; ?></td>
      <td><?php echo $row_Recordset1['user_name']; ?></td>
      <td><?php echo $row_Recordset1['user_pass']; ?></td>
      <td><?php echo $row_Recordset1['myname']; ?></td>
      <td><?php echo $row_Recordset1['namelast']; ?></td>
      <td><?php echo $row_Recordset1['phon']; ?></td>
      <td><?php echo $row_Recordset1['email']; ?></td>
      <td><a href="delete-m.php?id=<?php echo $row_Recordset1['id']; ?>">ลบ</a></td>
      <td><a href="update-m.php?<?php echo $row_Recordset1['id']; ?>=<?php echo $row_Recordset1['id']; ?>">แก้ไข</a></td>
    </tr>
    <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
</table>
<p><a href="insertMember.php">เพิ่มข้อมูลสมาชิก</a></p>
</body>
<?php
mysqli_free_result($Recordset1);
?>