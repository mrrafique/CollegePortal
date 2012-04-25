<html>
<head>
<link href="css/twitbg.css" rel="stylesheet" type="text/css"/>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="1067" height="863" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="169" height="134"><p id="para1"><a href="signup.php">Sign Up</a></p></td>
    <td colspan="2"><p id="para1">College Portal</td>
  </tr>
  <tr>
    <td rowspan="6">&nbsp;</td>
    <td width="541" height="50"><p id="para1">Updates</p></td>
    <td width="357" rowspan="6"><form name="form1" method="GET" action="loginhand.php">
      <span id="sprytextfield1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="usrname">UserName</label>
      <input type="text" name="usrname" id="usrname">
      <span class="textfieldRequiredMsg"></span></span>
      <p>&nbsp;</p>
      <p><span id="sprypassword1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd">
        <span class="passwordRequiredMsg"></span></span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login
        <input type="submit" name="Login" id="Login" value="Login">
      </p>
    </form></td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
  </tr>
  <tr>
    <td height="52">&nbsp;</td>
  </tr>
  <tr>
    <td height="47">&nbsp;</td>
  </tr>
  <tr>
    <td height="364">&nbsp;</td>
  </tr>
  <tr>
    <td height="68" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Suggestions</a></td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
<?php
//$_COOKIE['usr']="";

?>

