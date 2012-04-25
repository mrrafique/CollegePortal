<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Choose Subjects</title>
    <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
    
    </head>
    <body>
        <?php
        require_once("includes/db.php");
        session_start();
      $temp6=$_SESSION['usr'];
      $r=mysql_query("Select uid,branch,sem from login where usrname='$temp6'");
      $ar2=mysql_fetch_array($r);
      $branch=$ar2[1];
      $uid3=$ar2[0];
      $sems=$ar2[2];
      
        
        
        
        ?>
        <form name="subchose" action="subchose.php" method="GET" align="center">
            <?php
            echo('<b>Branch</b><input type="text" name="branch" value="'.$branch.'"/></input><p></p></p>');
            echo('<b>Semester</b><input type="text" name="sem" value="'.$sems.'"/></input><p></p><p></p>');
            echo('<h3>Enter Subject Codes:</h3>');
            echo('<input type="text" name="sub1"/></input><p></p></p>');
                    echo('<input type="text" name="sub2"/></input><p></p></p>');
                            echo('<input type="text" name="sub3"/></input><p></p></p>');
                                    echo('<input type="text" name="sub4"/></input><p></p></p>');
            
            
                    echo('<input type="text" name="sub5"/></input><p></p></p>');
                    echo('<input type="text" name="sub6"/></input><p></p></p>');
echo('<input type="submit" name="submit"/>');
echo('</form>');
if(isset($_GET['submit']))
{$sub1=$_GET['sub1'];
//echo($sub1);
//echo($uid3);
$sub2=$_GET['sub2'];
$sub3=$_GET['sub3'];
$sub4=$_GET['sub4'];
$sub5=$_GET['sub5'];
$sub6=$_GET['sub6'];
require_once("includes/db.php");
$file=fopen("subassign.txt",'r');
    $indx=fgets($file);
    //echo($indx);
    $ri=$indx[0];
    $ri++;
    $col="studcode".$ri;
    fclose($file);
    mysql_query("Update subassign set $col='$uid3' where subcode='$sub1'");
    echo(mysql_error());
     mysql_query("update subassign set $col='$uid3' where subcode='$sub1'");
     echo(mysql_error());
    mysql_query("Update subassign set $col='$uid3' where subcode='$sub2'");
    echo(mysql_error());
    mysql_query("Update subassign set $col='$uid3' where subcode='$sub3'");
     echo(mysql_error()); 
     mysql_query("Update subassign set $col='$uid3' where subcode='$sub4'");
     echo(mysql_error());  
     mysql_query("Update subassign set $col='$uid3' where subcode='$sub5'");
   mysql_query("Update subassign set $col='$uid3' where subcode='$sub6'");
    
    $file=fopen("subassign.txt",'w');
    fwrite($file,$ri);
    fclose($file);
    
echo("Subjects Assigned");
    
    
}



            ?>
     
        
        
    </body>
</html>