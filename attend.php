<?php
error_reporting(E_ERROR);
/*require_once("includes/db.php");
session_start();
//require_once("includes/sessioninit.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*if(isset($_GET['month']))
{
    resolvegrid();
    
    
}*/



/*function resolvegrid()
{ require_once("includes/db.php");
//require_once("includes/sessioninit.php");

    if($_GET['month']=='jul')
    {
        $coll="c".$_GET['date'];
            }
       if($_GET['month']=='aug')
    {    $collstart=32;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
            
     
                 
              if($_GET['month']=='sep')
    {    $collstart=64;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='oct')
    {    $collstart=95;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='nov')
    {    $collstart=127;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='dec')
    {    $collstart=158;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='jan')
    {     $coll="c".$_GET['date'];
            }
                 
              if($_GET['month']=='feb')
    {    if(date("Y")%4==0 && $_GET['date']==29)
    {
        $coll=184;///look at the logic here
        
    }
                  $collstart=32;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='mar')
    {    $collstart=64;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='apr')
    {    $collstart=95;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
                   if($_GET['month']=='may')
    {    $collstart=127;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              if($_GET['month']=='jun')
    {    $collstart=158;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              else
              {
                  header("Location:adminhome.php");
                  
                  
              }
            
     
   return $coll; 
    



$_GET['subcode'];
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

$inval=$_GET['subcode'];

//$collname=resolvegrid();

$attend=$_GET['stat'];
if($attend=='p'||$attend=='P')
mysql_query("INSERT INTO $tabno $collname values('$inval')");
mysql_close($conn);

}*/

?>

<html>
    <head>
        <title>"Attendance"</title>
        </head>
    
    
    <body>
        <form name="attendform" method="GET" action="attendquery.php">
       
         <?php echo('<input type="hidden" name="subcode"');
         global $_GET;
         //print_r($_GET);
         /*if(isset($_GET['month']))
{echo ("calling resolve grid,good luck");
    resolvegrid();
    
    
}*/

         //if($_GET[''])
         echo(' value="');
         echo($_GET['subcode']);
         echo('"');
         echo(">");
          //print_r($_GET);
                       
                 ?>   
        <input type="text" name="studid"/>
        <input type="text" name="stat"/>
        <input type="number" name="date"/>
        <select name="month">
            <option value="jul">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">Oct</option>
            
            <option value="nov">November</option>
            <option value="dec">December</option>
        <option value="Seperator">----------</option>
        <option value="jan">January</option>
        <option value="feb">February</option>
        <option value="mar">March</option>
        <option value="apr">April</option>
        <option value="may">May</option>
        </select>
        <input type="submit" name="submit"></input>
        </form>
    </body>
    
    
</html>