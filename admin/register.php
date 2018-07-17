<?php require_once('../Connections/MyConnect.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO admin_login (user_name, user_pass, myname, namelast, phon, email) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['user_name'], "text"),
                       GetSQLValueString($_POST['user_pass'], "text"),
                       GetSQLValueString($_POST['myname'], "text"),
                       GetSQLValueString($_POST['namelast'], "text"),
                       GetSQLValueString($_POST['phon'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysqli_select_db($database_MyConnect, $MyConnect);
  $Result1 = mysqli_query($insertSQL, $MyConnect) or die(mysqli_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysqli_select_db($database_MyConnect, $MyConnect);
$query_Recordset1 = "SELECT * FROM admin_login";
$Recordset1 = mysqli_query($query_Recordset1, $MyConnect) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

mysqli_free_result($Recordset1);
?>
<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <p>&nbsp;</p>
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right"><p>User_name:</p></td>
      <td><input type="text" name="user_name" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">User_pass:</td>
      <td><input type="password" name="user_pass" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Myname:</td>
      <td><input type="text" name="myname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Namelast:</td>
      <td><input type="text" name="namelast" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Phon:</td>
      <td><input type="text" name="phon" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="email" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input name="btnRegister" type="submit"  id="btnRegister" value="บันทึก"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
</body>