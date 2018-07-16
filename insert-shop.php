<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery.ui-1.5.2/jquery-1.2.6.js" type="text/javascript"></script>
<script src="jquery.ui-1.5.2/ui/ui.datepicker.js" type="text/javascript"></script>
<link href="jquery.ui-1.5.2/themes/ui.datepicker.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="361" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="134">เพิ่มข้อมูลร้านค้า</td>
      <td width="221">&nbsp;</td>
    </tr>
    <tr>
      <td>ชื่อร้าน</td>
      <td><p>
        <input type="text" name="textfield2" id="textfield2" />
      </p></td>
    </tr>
    <tr>
      <td>วันที่เริ่มใช้</td>
      <td><input name="datestrat" type="text" id="datestrat" autocomplete="on" /></td>
    </tr>
    <tr>
      <td>วันที่สิ้นสุด</td>
      <td><input type="text" size="30" value="Click to show datepicker" name="dateEnd" id="jQueryUICalendar1"/>
        <p></p>
      <script type="text/javascript">
// BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
jQuery("#jQueryUICalendar1").datepicker({dateFormat: 'yy-mm-dd'});

// EndWebWidget jQuery_UI_Calendar: jQueryUICalendar1
        </script></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Save" /></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>