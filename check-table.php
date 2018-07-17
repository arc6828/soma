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
<form action="show-table.php" name="form1" id="form1" novalidate="novalidate">
  <p>ตรวจสอบสถานะการจองโต๊ะ </p>
  <p>
    <input type="text" size="30" value="Click to show datepicker" name="ckDate" id="jQueryUICalendar1"/> 
	<script type="text/javascript">
// BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
jQuery("#jQueryUICalendar1").datepicker({dateFormat:'yy-mm-dd'});
// EndWebWidget jQuery_UI_Calendar: jQueryUICalendar1
  </script>
    <input name="btncheck" type="submit" autofocus="autofocus" id="btncheck" form="form1" value="submit" />
  </p>
  <p></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
