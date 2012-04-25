<html>
    
    <head>
        <title>Result Update</title>
        <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
        
        
    </head>
    <body>
<?php
error_reporting(E_ERROR);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



if(isset($_GET['submi']))
{require_once("includes/db.php");
    $enum=array_keys($_GET);
   // print_r($enum);
    unset($enum[0]);
    unset($enum[1]);
    //print_r(array_pop($enum));
    //print_r($enum);
    //unset($_GET['submi']);
    $col2=$_GET['col'];
    $tab2=$_GET['tabno'];
    $loop=count($_GET);
    $loop-=4;
    unset($_GET['tabno']);
    unset($_GET['col']);
    unset($_GET['submi']);
    //print_r($_GET);
    for($p=0;$p<=$loop;$p++)
    {$thetempest=$_GET.next($_GET);
     $condi=$enum.next($enum);
     $thetempest=str_replace("Array","",$thetempest);
     $condi=str_replace("Array","",$condi);
     //echo('<p><p>'.$thetempest.$condi);
    $y=mysql_query("Update $tab2 set $col2='$thetempest' where Studcode='$condi'");
    echo(mysql_error());
    }
    echo('<div align="center">Updated Successfully</div>');
}


?>

    </body>
</html>