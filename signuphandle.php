<?php
require_once("includes/sessioninit.php");
require_once("includes/db.php");
require_once ("includes/function.php");
//@sankalp
session_start();
$upload_dirr = "stupix";
$val = checkValidImage($_FILES["imgdd"]);
if($val>=0 && $val<4)
echo $UPLOAD_ERROR[$val];
//$_SESSION[0]=
if(isset($_POST['Submit']))
    $adminp=stripslashes(trim($_POST['ap']));
    $sem=stripslashes(trim($_POST['sem']));$bran=stripslashes(trim($_POST['branch']));
{  $uid=stripslashes(trim($_POST['ID']));
   $name=stripslashes(trim($_POST['name']));
   $email=stripslashes(trim($_POST['Email']));
   $pwd1=stripslashes(trim($_POST['pwd']));
   $pwd2=stripslashes(trim($_POST['cpwd']));
   $add=stripslashes(trim($_POST['address']));
   $tmp = $_FILES['imgdd']['tmp_name'];
   $targetName = $_POST['ID'].".jpg"; 
       $_SESSION['usr']=$email;   
                                      
   if(!move_uploaded_file($tmp, $upload_dirr."/".$targetName))
     {header("Location:signup.php");
     }
else{   
   if($pwd1==$pwd2)
   {$pwd1=md5($pwd2);
    
if(!strcmp($adminp,'logger'))
//$q=mysql_query("INSERT INTO login (usrname,pwd,uid,name,address) VALUES ('$email','$pwd1','$uid','$name','$add')");
   //$q=mysql_query("UPDATE login set role='admin',pwd='$pwd1',uid='$uid',name='$name',address='$add' where usrname='$email'");
$q=mysql_query("Insert into login (usrname,pwd,uid,name,address,role) values ('$email','$pwd1','$uid','$name','$add','admin')");
   //echo(mysql_error());     
        else
     $q=mysql_query("Insert into login (usrname,pwd,uid,name,address,role,sem,branch) values ('$email','$pwd1','$uid','$name','$add','student','$sem','$bran')");
echo(mysql_error());
   setcookie('usr',$email,time()+14400);
   $p=mysql_query("Select role from login where usrname='$email'");
   $f=mysql_fetch_array($p);
   $f2=$f[0];
   //echo($f2);
   //if(!strcmp($f2,"admin"))
   //$locant="Location:adminhome.php?usr="."$email";
   //else
   //{$locant="Loaction:studhome.php?usr="."$email";}
   //echo($locant);
   unset($_SESSION['usr']);

   $_SESSION['usr']=$email;
   print_r($_SESSION);
   mysql_close($conn);
        echo("Signed up");
   header("Locaton:login.php");
        
        
   }
   else
  {echo ("Passwords do not match");
   header("Location:signup.php");
}
  
}
   
}

?>