<html>
<head>
<title></title>
<style>
div {text-align: center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<body>
<div>
<form name="form1" method="post" action="Board.php">
<strong><u> ตั้งกระทู้</u></strong><br>
ชื่อกระทู้<br>
<input name="title" type="text" id="title" size="30" pattern=".{4,140}"   required title="ชื่อกระทู้ต้องยาว 4–140 ตัวอักษร" >
<br>

เนื้อหากระทู้<br>
<textarea name="body" cols="30" rows="5" wrap="VIRTUAL" id="message"  maxlength="2000" minlength="6"
required title="เนื้อหากระทู้ต้องยาว 6–2000 ตัวอักษร"
oninvalid="setCustomValidity('เนื้อหากระทู้ต้องยาว 6–2000 ตัวอักษร')"
></textarea>
<br>
<input type="submit" name="btsubmit" id="btsubmit" value="ตั้งกระทู้">
</form></div>
</body>
</html>