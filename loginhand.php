<?php


ob_start();
require_once("includes/db.php");
require_once("includes/vars.php");
require_once("includes/errors.php");
require_once("includes/sessioninit.php");
session_start();
$pwd=$_GET['pwd'];
$usr=$_GET['usrname'];
$_SESSION['usr']=$usr;
setcookie('usr',$usr,time()+14400);
if(is_null($pwd) or is_null($usr))
{$errshow=error_handler("Either you have not entered the Password or Username or both.Go <a href=\"login.php\">Back</a>");
 echo($errshow);

}      
        
if(empty($conn))
{ $errshow=error_handler("Error Connecting to Database Server.Contact Admin.Go <a href=\"login.php\">Back</a>");
   echo($errshow);
}

else
{
    if(!isset($db))
    {$errshow=error_handler("DataBase Connection Error.Go <a href=\"login.php\">Back</a>");
echo($errshow);

        
    }
    else
    {
        $q=mysql_query("Select pwd,role from login where usrname='$usr'");
if(!isset($q))
{   $errshow=error_handler("The UserName is not registerd.Go <a href=\"login.php\">Back</a>");
 echo($errshow);
   
}
else
{

//while ($row = mysql_fetch_array($q)) 
  $row=mysql_fetch_array($q); 
 if($row['pwd']==md5($pwd))
        {
     if(!strcmp($row['role'],"admin"))
        
        {
                
            header("Location:adminhome.php");
           
        }
        else
        {   header("Location:studhome.php");}
    //setcookie('usr',$usr,time()+14400);
}
   else 
     {$errshow=error_handler("Forgot your Password??Contact System Admin.Go <a href=\"login.php\">Back</a>");
echo($errshow);
    }
}       
}       
    
    
    
}  
?>