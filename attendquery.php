<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("includes/db.php");
session_start();

    require_once("includes/db.php");
    

$tabresole=$_GET['subcode'];
if($tabresole[7]==1)
    $tabno=1;
if($tabresole[7]==2)
    $tabno=2;
if($tabresole[7]==3)
    $tabno=3;
if($tabresole[7]==4)
    $tabno=4;
if($tabresole[7]==5)
    $tabno=5;
if($tabresole[7]==6)
    $tabno=6;
if($tabresole[7]==7)
    $tabno=7;


                      $tabno="tab0".$tabno;
//echo ("tabno".$tabno);
$inval=$_GET['subcode'];
//echo $inval."is the subject code";
//$collname=resolvegrid();
//$uidcoll=$_GET['studid'];
//$attend=$_GET['stat'];
//$r=mysql_query(Select uid from $tabno where  )
echo('<html><head><title>Attendance Post</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/tablekit.css" 
    <link href="css/twitbg.css" rel="stylesheet" type="text/css"/>

                <script type=/"text/javascript/" src=/"js/prototype.js/"></script>
		<script type=/"text/javascript/" src=/"js/fabtabulous.js/"></script>
		<script type=/"text/javascript/" src=/"js/tablekit.js/"></script>
<style type="text/css">
html, body {width:100%; height:100%; padding:0; margin:0; background:#fff;}
html {overflow:hidden;}
body {
font-family:verdana, arial, sans-serif; font-size:12px;

background-image: url(plastic.jpg);
background-repeat:no-repeat;
background-position:center center;
background-attachment:fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}

#scroller {position:absolute; width:100%; height:100%; top:0; left:0; overflow:auto; z-index:2;} 
#content {padding:5px 300px 20px 200px;}
p {line-height:22px; text-align:justify;}
#fixed {position:absolute; top:25px; left:10px; width:160px; z-index:10; color:#567; border:1px solid #000; padding:10px;}

</style>                


		</head><body>');
     echo("<p><p><p>".$inval);
     echo('<div id="scroller">
<div id="content"><table class="sortable resizable editable">');
     echo('<thead><tbody>
					<tr><th class="sortfirstdesc" id="Student ID">Student ID</th>');
     
     for($i2=1;$i2<=31;$i2++)
     {echo('<th id="creation-date">July'.$i2.'</th>');
     }         
     for($i2=1;$i2<=31;$i2++)
     {echo('<th id="creation-date">Aug'.$i2.'</th>');
     }         
     for($i2=1;$i2<=30;$i2++)
     {echo('<th id="creation-date">Sept'.$i2.'</th>');
     }         
     for($i2=1;$i2<=31;$i2++)
     {echo('<th id="creation-date">Oct'.$i2.'</th>');
     }         
     for($i2=1;$i2<=30;$i2++)
     {echo('<th id="creation-date">Nov'.$i2.'</th>');
     }
     for($i2=1;$i2<=31;$i2++)
     {echo('<th id="creation-date">Dec'.$i2.'</th></thead>');
     }         
   
  
  
$rassign=mysql_query("Select * from subassign where subcode='$inval'");
   $row=mysql_fetch_array($rassign,MYSQL_NUM);
       //echo("Students enrolled///");print_r($row);
//echo("///");
$temp=$row.next($row);
     //echo("first record".$temp);  
     $temp9=str_replace("Array","",$temp);
              //                                                 $temp=$row['studcode1'];
       //echo($temp9);
    //while(){
     for($stopcount=0;$stopcount<60;$stopcount++)
     {if(!strcmp($temp9,"Array"))
         break;   
         $temp9=str_replace("Array","",$temp9);
       /*  $str=strcmp($temp9[0],'s');
          if($str!=0)
              break;*/
         //echo("criteria".$temp9);
         $attendance=mysql_query("Select * from $tabno where uid='$temp9'");
        
        //$temp=$row.next($row);
        //while($row68=mysql_fetch_array($attendance))
     $row68=mysql_fetch_array($attendance,MYSQL_NUM);
        //print_r($row68);
            
            $counter=0;
            echo('<tr><td>');
            //$temp2=substr($temp,-9);
            //$temp2=str_replace("Array","",$temp);
            echo($temp9.'</td>');
            for($ancount=0;$ancount<=185;$ancount++)
            {$temp3=$row68.next($row68);
            //$temp4=substr($temp3,-8);
            $temp4=str_replace("Array","",$temp3);
            echo('<td>'.$temp4);
            
            }
            $temp9=$row.next($row);
            echo("???".$temp9."??");
            
         echo('</tr>');   
        
   }
   echo('</div></div></table></body></html>');



?>