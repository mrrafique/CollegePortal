<?php
error_reporting(E_ERROR);
   require_once("vars.php");
// mysql_close($conn);  


$conn=mysql_connect(DBSERVER,DBUSER,"sankalp");
//echo "hello";
if(!isset($conn))
{die("Server Down");

}

else
{$db=mysql_select_db(DBNAME,$conn);
    if(!isset($db))
  {die("Database Woes");

  }
//echo "tutu";
}

//echo "db working"; 
$UPLOAD_ERROR = Array("No file is selected","Some Error while uploading","Not a valid Image file","Size is larger than 2MB");


?>