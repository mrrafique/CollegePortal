<?php
require_once("includes/db.php");
if(isset($_POST['submit']))
{
    
    $upload_dirr = "assignments";
    $tchr=stripslashes(trim($_POST['tchr']));
    $subcod=stripslashes(trim($_POST['subcode']));
    print_r($_FILES);
    $tmp = $_FILES['file']['tmp_name'];
    $targetName = $_POST['tchr'].time().".txt"; 
    
                                       
    if(!move_uploaded_file($tmp, $upload_dirr."/".$targetName))
    {header("Location:upload.php");
    }
    date_default_timezone_set("Asia/Kolkata");
    $temp94=$_COOKIE['usr'];
    $q=mysql_query("Select name from login where usrname='$temp94'");
    echo(mysql_error());
    $q2=mysql_fetch_array($q);
    $q3=$q2[0];
    $q6=date("m").date("d");
    mysql_query("Insert into notifications (uid,uploader,date,filename,subcode) values ('$tchr','$q3','$q6','$targetName','$subcod')");                              
    echo(mysql_error());   
                        
    header("Location:adminhome.php");                                     
    }
?>                                    

