<?php
require_once("includes/db.php");
echo('<html><head><title>Result Summary</title>
      <link rel="stylesheet" type="text/css" media="all" href="css/tablekit.css" />
                <script type=/"text/javascript/" src=/"js/prototype.js/"></script>
		<script type=/"text/javascript/" src=/"js/fabtabulous.js/"></script>
		<script type=/"text/javascript/" src=/"js/tablekit.js/"></script>
              <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
		</head><body><h1>Result Enumeration for ');
echo('<table class="sortable resizable editable">');
echo('<thead><th id="creation-date">Student ID</th>');
echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');

if($_GET['sem']==1)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {      
        dispres($row47);
        
    }}
    if($_GET['sem']==2)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {      
        dispres($row47);
        
    }}
    if($_GET['sem']==3)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {       
        dispres($row47);
        
    }}
    if($_GET['sem']==4)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {        
        dispres($row47);
        
    }}
    if($_GET['sem']==5)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {        
        dispres($row47);
        
    }}
    if($_GET['sem']==6)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {        
        dispres($row47);
        
    }}
    if($_GET['sem']==7)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {        
        dispres($row47);
    }
}    



    if($_GET['sem']==8)
{  $tabnumbr="sem".$_GET['sem'];
     echo($tabnumbr);
    $res=mysql_query("Select * from $tabnumbr");
    while($row47=mysql_fetch_array($res))
    {dispres($row47);
               
    }
}
function dispres($row48)
{
   
     $counter=0;
            echo('<tr><td>');
            echo($row48[0].'</td>');
            echo('<td>');
            $temp0=$row48[0];
            $name=mysql_query("Select name from login where uid='$temp0'");
            $naam=mysql_fetch_array($name);
            echo($naam[0].'</td>');
            for($ancount=0;$ancount<=6;$ancount++)
            {$row48.next($row48);
            $temp09=$row48.next($row48);
            $temp10=str_replace("Array","",$temp09);
            echo('<td>'.$temp10);
            }
         echo('</tr>');   
         return;
      
    
}

?>