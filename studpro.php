<html>
    <head><title>Student Profile</title>
<link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta></head><body>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$scodee=$_GET['id'];
if(!isset($scodee))
    $scodee=$_GET['studcode'];
require_once("includes/db.php");

$t=mysql_query("Select usrname,uid,name,address,role,sem from login where uid='$scodee'");
$tt=mysql_fetch_array($t);
//print_r($tt);
echo(mysql_error());
echo('<h3>Viewing Profile of '.$tt['name'].'</h3>');
//echo($scodee);
//echo($tt);
//echo($t);
//print_r($tt);
echo('<div align="center"><p><br>');
echo("Name:             ".$tt['name'].'<p>');
echo("UserName:         ".$tt['usrname'].'<p>');
echo("UID:              ".$tt['uid'].'<p>');
echo("Address:          ".$tt['address'].'<p>');
echo("Role:             ".$tt['role'].'<p>');
echo("Semester:         ".$tt['sem'].'<p><p><p><p><p>');
echo('</div>');

echo('<div align="left">');
echo('<a href="resstud.php?studcode='.$tt['uid'].'">View Result</a><p><p>');
echo('<a href="adminhome.php"></a>');




?>
    </body>
</html>