

<html>
    <head>
        <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
        <title>"Attendance"</title>
        <script type="text/javascript">
function deactivate()
{
document.getElementById("checks").innerHTML="";
}
</script>
        
        
        </head>
    
    
    <body>
        <div align="center">

            <form name="attendform2" method="GET" action="attendmark.php">
       
         <?php 
          require_once ("includes/db.php");
         if(isset($_GET['submit']))
         {  

//echo("aaya to h kuch");      
              if(!strcmp($_GET['month'],"jul"))
    {
        $coll="c".$_GET['date'];
        //echo("yeah its july");
        
        
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
    { //   $arr="Sankalp";
      
                  
                  $collstart=158;
       $collstart+=$_GET['date'];
        $coll="c".$collstart;
            }
                 
              else
              {//print_r($_GET);
                        //header("Location:adminhome.php");
                  
                
              }
             
           
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
 if(!strcmp($_GET['deact'],'on'))
         
                
                
                
                {
            // echo($tabno.$coll);
           mysql_query("Update $tabno set $coll='H'");
           echo(mysql_error());
             //header("Location:adminhome.php");
             
             
                }
//echo($tabno);
//echo($inval);
//echo($coll);
$keys=array_keys($_GET);
//print_r($keys);
$keys.next($keys);$keys.next($keys);
for($j=0;$j<80;$j++)
{$ind=$keys.next($keys);
 //echo($ind); 
 $ind=str_replace("Array","",$ind);
 //echo("rep...".$ind);
if(!(strcmp($ind,"Array")&&strcmp($ind,"submit")))
{break;header("Location:adminhome.php");}
    $ind2=str_replace("Array.","",$ind);
   // echo("...".$ind2."...");
        if(!strcmp($_GET[$ind2],"on"))
          {
              $rt=mysql_query("Update $tabno set $coll='$inval' where uid='$ind2'");   
            echo(mysql_error());

   
}

}
echo($j."Records Updated Succesfully");

         }
         
         echo('<p><p><p>');
         echo('<input type="hidden" name="subcode"');
         global $_GET;
            
         echo(' value="');
         echo($_GET['subcode']);
         echo('"');
         echo(">");
          date_default_timezone_set("Asia/Kolkata");          
                   $ter=$_GET['subcode'];
        echo('<b>Check if No class</b><input type="checkbox" name="deact" onClick="deactivate()"/></input>');           
                    echo('<input type="number" name="date"');
        echo(' value="'.date("d").'"/>');
        echo('<select name="month"');
           echo(' value='.date("m").'/>');
           echo('<option value="jul">July</option>');
            echo('<option value="aug">August</option>');
            echo('<option value="sep">September</option>');
            echo('<option value="oct">Oct</option>');
            
            echo('<option value="nov">November</option>');
            echo('<option value="dec">December</option>');
        echo('<option value="Seperator">----------</option>');
        echo('<option value="jan">January</option>');
        echo('<option value="feb">February</option>');
        echo('<option value="mar">March</option>');
        echo('<option value="apr">April</option>');
        echo('<option value="may">May</option>');
        echo('</select>');
        
           echo('<div id="checks">');        
        require_once ("includes/db.php");   
                 
                      $subjects=mysql_query("Select * from subassign where subcode='$ter'");
           echo(mysql_error());
              $row34=mysql_fetch_array($subjects);
              $row34.next($row34);
                          
                  for($o=0;$o<80;$o++)
                               {
                      echo('<p><p><p><p>');
                      $tempo=$row34.next($row34);
                            if(!strcmp($tempo,"Array"))
                              break;
                      $tempo=str_replace("Array","",$tempo);
                      echo($tempo.'<input type="checkbox" name="'
                              );
                      echo($tempo.'"'.'/>');
                      echo('<p>');
                        $tempo=$row34.next($row34);
                      
                  
                      
                  }
                    echo('</div>');
                  echo('<input type="submit" name="submit"></input>');
        echo('</form>');
      
        echo('</div>');
    echo('</body>');
    
    
echo('</html>');
                
                  
          
        
       
        ?>
            