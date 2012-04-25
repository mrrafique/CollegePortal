
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/twitbg.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1268" height="805" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="212">&nbsp;</td>
    <td width="674"><p id="para1">Sign Up</p></td>
    <td width="382">&nbsp;</td>
  </tr>
  <tr>
    <td height="563">&nbsp;</td>
    <td><form id="form1" name="form1" method="GET" action="edproh.php" enctype="multipart/form-data">
      <p>
        <label for="ID">Unique ID</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="ID" id="ID" readonly="readonly" value="<?php echo($_GET['studcode'])?>"/>
      </p>
      <p><span id="sprytextfield1">
        <label for="name">Name</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name" id="name" maxlength="30" value=""/>
        <span class="textfieldRequiredMsg"></span></span></p>
      <p><span id="sprytextfield2">
        <label for="Email">Email ID</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Email" id="Email" />
        <br />
        <br />
        <span class="textfieldRequiredMsg"></span></span></p>
      <p><span id="sprytextarea1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="address">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea name="address" id="address" cols="45" rows="5"></textarea>
        <span class="textareaRequiredMsg"></span></span></p>
        Branch<select name="branch" value="CSE"/><option value="CSE">CSE</option><option value="MAE">MAE</option> <option value="ECE">ECE</option> <option value="EEE"">EEE</option>  
        <option value="CSE">IT</option></select><p></p><p></p>
        Semester<select name="sem" value="Choose Sem"/><option value="1">1</option><option value="1">1</option>   <option value="2">2</option>   <option value="3">3</option>   <option value="4">4</option>   <option value="5">5</option>   <option value="6">6</option>   <option value="7">7</option>   <option value="8">8</option>      
        </select><p>
            
        </p>
        <p>&nbsp;</p>
      <p><span id="sprypassword1">
        <label for="pwd">Password</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" id="pwd" />
        <span class="passwordRequiredMsg"></span></span></p>
      <p><span id="sprypassword2">
        <label for="cpwd">Confirm Password</label>
        &nbsp;&nbsp;<input type="password" name="cpwd" id="cpwd" />
        <span class="passwordRequiredMsg"></span></span></p>
        Admin Credentials<input type="text" name="ap"></input>
        
        <p><span id="uplodfile">
        <label for="uplodfile">Upload Photo</label>
        &nbsp;&nbsp;<input type="file" name="imgdd"/>
        <span></span></span></p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit" /></p>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
</script>
</body>
</html>

<?php
function createStuCode()
{   session_unset();
    require_once("includes/db.php");
	//global $conn;
	$stucode = 'STU';
date_default_timezone_set("Asia/Kolkata");
		$res = mysql_query("SELECT * FROM login", $conn);
		$r = mysql_num_rows($res);
                //echo($r);
                //$r+=20;
		$r+=1;
		$yy = date("Y");
		$stucode.= $yy;
		$stucode.= $r;
	return $stucode;
		
}

?>