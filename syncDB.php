
<html><head><title>Result Summary</title>
      <link rel="stylesheet" type="text/css" media="all" href="css/tablekit.css" />
                <script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/fabtabulous.js"></script>
		<script type="text/javascript" src="js/tablekit.js"></script>
                <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
		</head>
                <body>


<?php
//make it a handler send it sem and reg in sem table and all the tables
require_once("includes/db.php");
session_start();
//function syncsem()
//{
//$sem=$_GET['sem'];
   // echo("hello");
$templ=$_SESSION['usr'];
//$sem=1;
$d=mysql_query("Select uid from login where usrname='$templ'");
$x=mysql_fetch_array($d);

$ins=$x[0];
//$templ="rupert";
$r=mysql_query("Select sem from login where uid='$ins'");
//echo("selct from sem".mysql_error());
echo(mysql_error());  
$r2=mysql_fetch_array($r);
    $sem=$r2[0];
    //echo($sem);
    $tab="sem".$sem;
    //echo($tab);
    //mysql_query("Update $tab set Studcode='$ins'");
    mysql_query("Insert into $tab (Studcode) values('$ins')");
    echo("Updated semester table,Result Register Available<p><p>");
    echo(mysql_error());
    $tg=mysql_query("Select indx from subassign");
   echo(mysql_error());
    $tgg=mysql_fetch_array($tg);
    $tgg=$tgg[0]+1;
    //echo($tgg);
    $col="studcode".$tgg;
    $ru=$tgg-1;
    $colpre="studcode".$ru;
    mysql_query("Alter table subassign add $col varchar(45) null after $colpre");
    echo(mysql_error());
    echo("Subjects Alloted for the Semester<p><p>");
    mysql_query("Update subassign set $col='$ins'");
    echo(mysql_error());
   
    mysql_query("update subassign set indx='$tgg'");
    //echo("update indx".mysql_error());
    echo("Indexes Updated");
    mysql_query("Insert into tab01 (uid) values('$ins')");
    echo(mysql_error()); 
    mysql_query("Insert into tab02 (uid) values('$ins')");
      mysql_query("Insert into tab03 (uid) values('$ins')");
       mysql_query("Insert into tab04 (uid) values('$ins')");
        mysql_query("Insert into tab05 (uid) values('$ins')"); mysql_query("Insert into tab6 (uid) values('$ins')");
         mysql_query("Insert into tab07 (uid) values('$ins')");
   
         echo("Updated Subject Table,Attendance Register Available<p><p>");
         
         
?>    
    
                </body>
</html>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  